<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\IOFactory;
use Flash;

class ExcelController extends Controller
{
	public function getTest()
	{
		return view('excel.cargar-excel');
	}

	public function master(Request $request)
	{
		$archivo = $request->file('archivo');
		$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
		$reader->setReadDataOnly(TRUE);
		$spreadsheet = $reader->load($archivo);
		$worksheet = $spreadsheet->getActiveSheet();
		// Get the highest row number and column letter referenced in the worksheet
		$highestRow = $worksheet->getHighestRow(); // e.g. 10
		$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
		$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
		for ($row = 1; $row <= $highestRow; ++$row) {
			$objeto['dato1'] = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
			$objeto['dato2'] = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
			return $objeto;
		}
	}

	public function postTest(Request $request)
	{
		$archivo = $request->file('archivo');
		$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
		$reader->setReadDataOnly(TRUE);
		$spreadsheet = $reader->load($archivo);
		$worksheet = $spreadsheet->getActiveSheet();
		$highestRow = $worksheet->getHighestRow();
		$highestColumn = $worksheet->getHighestColumn();
		$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
		$ano = $request->ano;
		$edicion = $request->edicion;

		//Errores
		$errores = [];
		for ($row = 2; $row <= $highestRow; ++$row) {
			$numErrores = 0;
			if ($worksheet->getCellByColumnAndRow(4, $row)->getValue() == '') {
				$errores = array_add($errores, $numErrores, 'La columna event_name de la fila '.$row.' no puede estar vacía. (Hay '.$highestRow.' filas con contenido o estilo)');
			}
			if (!is_double($worksheet->getCellByColumnAndRow(7, $row)->getValue())) {
				$errores = array_add($errores, $numErrores, 'La columna event_start_date de la fila '.$row.' no tiene el formato correcto.');
			}
			if ((int)$worksheet->getCellByColumnAndRow(7, $row)->getValue() < 36526) {
				$errores = array_add($errores, $numErrores, 'La columna event_start_date de la fila '.$row.' es una fecha anterior al 1 de enero de 2000.');
			}
			if ((int)$worksheet->getCellByColumnAndRow(7, $row)->getValue() > 55153) {
				$errores = array_add($errores, $numErrores, 'La columna event_start_date de la fila '.$row.' es una fecha posterior al 31 de diciembre de 2050.');
			}			
			if (!is_double($worksheet->getCellByColumnAndRow(8, $row)->getValue())) {
				$errores = array_add($errores, $numErrores, 'La columna event_start_time de la fila '.$row.' no tiene el formato correcto.');
			}
			if ((double)$worksheet->getCellByColumnAndRow(8, $row)->getValue() > 1 || (double)$worksheet->getCellByColumnAndRow(8, $row)->getValue() < 0) {
				$errores = array_add($errores, $numErrores, 'La columna event_start_time de la fila '.$row.' contiene un dato incorrecto.');
			}
			if (!is_double($worksheet->getCellByColumnAndRow(9, $row)->getValue())) {
				$errores = array_add($errores, $numErrores, 'La columna event_end_date de la fila '.$row.' no tiene el formato correcto.');
			}
			if ((int)$worksheet->getCellByColumnAndRow(9, $row)->getValue() < 36526) {
				$errores = array_add($errores, $numErrores, 'La columna event_end_date de la fila '.$row.' es una fecha anterior al 1 de enero de 2000.');
			}
			if ((int)$worksheet->getCellByColumnAndRow(9, $row)->getValue() > 55153) {
				$errores = array_add($errores, $numErrores, 'La columna event_end_date de la fila '.$row.' es una fecha posterior al 31 de diciembre de 2050.');
			}
			if (!is_double($worksheet->getCellByColumnAndRow(10, $row)->getValue())) {
				$errores = array_add($errores, $numErrores, 'La columna event_end_time de la fila '.$row.' no tiene el formato correcto.');
			}
			if ($worksheet->getCellByColumnAndRow(10, $row)->getValue() > 1.0 || $worksheet->getCellByColumnAndRow(10, $row)->getValue() < 0.0) {
				$errores = array_add($errores, $numErrores, 'La columna event_end_time de la fila '.$row.' contiene un dato incorrecto.');
			}		
		}
		if (count($errores) > 0) {
			return view('excel.cargar-excel')->with('errores', $errores);
		}

		//Carga contenido
		$espazos = [];
		for ($row = 2; $row <= $highestRow; ++$row) {
			if (!in_array($worksheet->getCellByColumnAndRow(13, $row)->getValue(), $espazos)) {
				$espazos = array_add($espazos, $worksheet->getCellByColumnAndRow(13, $row)->getValue(), $worksheet->getCellByColumnAndRow(14, $row)->getValue());
			}
		}
		foreach ($espazos as $espazo => $enderezo) {
			if(!\App\Models\Espazo::where('nome', $espazo)->exists()) {
				$newEspazo = new \App\Models\Espazo;
				$newEspazo->nome = $espazo;
				$newEspazo->enderezo = $enderezo;
				$newEspazo->save();
			}
		}
		$actividades = [];
		$nomeActividades = [];
		$contador = 0;
		for ($row = 2; $row <= $highestRow; $row++) {
			if (!in_array($worksheet->getCellByColumnAndRow(4, $row)->getValue(), $nomeActividades) && !is_null($worksheet->getCellByColumnAndRow(4, $row)->getValue())) {
				$actividades = array_add($actividades, $contador, 
					[
						'nome'=>$worksheet->getCellByColumnAndRow(4, $row)->getValue(),
						'subtitulo'=>$worksheet->getCellByColumnAndRow(5, $row)->getValue(),
						'descripcion'=>$worksheet->getCellByColumnAndRow(6, $row)->getValue(),
						'idade'=>$worksheet->getCellByColumnAndRow(18, $row)->getValue(),
						'espazo'=>$worksheet->getCellByColumnAndRow(13, $row)->getValue()]);
				$nomeActividades = array_add($nomeActividades, $contador, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
				$contador++;
			}
		}
		foreach ($actividades as $actividad) {
			if(!\App\Models\Actividade::where('nome', $actividad['nome'])->exists()) {
				$newActividad = new \App\Models\Actividade;
				$newActividad->nome = $actividad['nome'];
				$newActividad->subtitulo = $actividad['subtitulo'];
				$newActividad->descripcion = $actividad['descripcion'];
				$newActividad->idade = $actividad['idade'];
				$newActividad->ano = $ano;
				$newActividad->edicion = $edicion;

				$newActividad->save();

				$espazo = \App\Models\Espazo::where('nome', $actividad['espazo'])->first();
		        $newActividad->espazos()->attach($espazo->id);
			}
		}

		for ($row = 2; $row <= $highestRow; $row++) {
			$actividad = \App\Models\Actividade::where('nome', $worksheet->getCellByColumnAndRow(4, $row)->getValue())->first();
			$inicio = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(7, $row)->getValue() + $worksheet->getCellByColumnAndRow(8, $row)->getValue());
			$fin = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(9, $row)->getValue() + $worksheet->getCellByColumnAndRow(10, $row)->getValue());
			$eventoComprobar = \App\Models\Evento::where('inicio', $inicio)->where('fin', $fin)->where('actividade_id', $actividad->id)->get();
			if (count($eventoComprobar) === 0) {
				# code...
				$evento = new \App\Models\Evento;
				$evento->inicio = $inicio;
				$evento->fin = $fin;
				$evento->actividade_id = $actividad->id;
				$evento->save();
			}
		}

		$actividades = \App\Models\Actividade::all();
        Flash::success('Carga correcta.');

		return view('actividades.index')
            ->with('actividades', $actividades);
		
	}
}
