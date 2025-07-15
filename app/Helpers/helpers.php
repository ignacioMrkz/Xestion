<?php
	function provincias()
	{
		$provincias = [
			'A CORUÑA'=>'A CORUÑA',
			'ÁLAVA'=>'ÁLAVA',
			'ALBACETE'=>'ALBACETE',
			'ALICANTE'=>'ALICANTE',
			'ALMERÍA'=>'ALMERÍA',
			'ASTURIAS'=>'ASTURIAS',
			'ÁVILA'=>'ÁVILA',
			'BADAJOZ'=>'BADAJOZ',
			'BARCELONA'=>'BARCELONA',
			'BURGOS'=>'BURGOS',
			'CÁCERES'=>'CÁCERES',
			'CÁDIZ' => 'CÁDIZ',
			'CANTABRIA'=>'CANTABRIA',
			'CASTELLÓN'=>'CASTELLÓN',
			'CEUTA'=>'CEUTA',
			'CIUDAD REAL'=>'CIUDAD REAL',
			'CÓRDOBA'=>'CÓRDOBA',
			'CUENCA'=>'CUENCA',
			'GIRONA'=>'GIRONA',
			'GRANADA'=>'GRANADA',
			'GUADALAJARA'=>'GUADALAJARA',
			'GUIPÚZCOA' => 'GUIPÚZCOA',
			'HUELVA'=>'HUELVA',
			'HUESCA'=>'HUESCA',
			'ISLAS BALEARES'=>'ISLAS BALEARES',
			'JAÉN'=>'JAÉN',
			'LEÓN'=>'LEÓN',
			'LLEIDA'=>'LLEIDA',
			'LUGO'=>'LUGO',
			'MADRID'=>'MADRID',
			'MÁLAGA'=>'MÁLAGA',
			'MELILLA'=>'MELILLA',
			'MURCIA'=>'MURCIA',
			'NAVARRA'=>'NAVARRA',
			'OURENSE'=>'OURENSE',
			'PALENCIA'=>'PALENCIA',
			'LAS PALMAS'=>'LAS PALMAS',
			'PONTEVEDRA'=>'PONTEVEDRA',
			'LA RIOJA'=>'LA RIOJA',
			'SALAMANCA'=>'SALAMANCA',
			'SEGOVIA'=>'SEGOVIA',
			'SEVILLA'=>'SEVILLA',
			'SORIA'=>'SORIA',
			'TARRAGONA'=>'TARRAGONA',
			'SANTA CRUZ DE TENERIFE'=>'SANTA CRUZ DE TENERIFE',
			'TERUEL'=>'TERUEL',
			'TOLEDO'=>'TOLEDO',
			'VALENCIA'=>'VALENCIA',
			'VALLADOLID'=>'VALLADOLID',
			'VIZCAYA'=>'VIZCAYA',
			'ZAMORA'=>'ZAMORA',
			'ZARAGOZA'=>'ZARAGOZA'];
		return $provincias;
	}
	function pontevedra() {
		$pontevedra=['Agolada' => 'Agolada',
		'Arbo' => 'Arbo',
		'Baiona' => 'Baiona',
		'Barro' => 'Barro',
		'Bueu' => 'Bueu',
		'Caldas de Reis' => 'Caldas de Reis',
		'Cambados' => 'Cambados',
		'Campo Lameiro' => 'Campo Lameiro',
		'Cangas' => 'Cangas',
		'Cañiza, A' => 'Cañiza, A',
		'Catoira' => 'Catoira',
		'Cerdedo-Cotobade' => 'Cerdedo-Cotobade',
		'Covelo' => 'Covelo',
		'Crecente' => 'Crecente',
		'Cuntis' => 'Cuntis',
		'Dozón' => 'Dozón',
		'Estrada, A ' => 'Estrada, A ',
		'Forcarei' => 'Forcarei',
		'Fornelos de Montes' => 'Fornelos de Montes',
		'Gondomar' => 'Gondomar',
		'Grove, O' => 'Grove, O',
		'Guarda, A ' => 'Guarda, A ',
		'Illa de Arousa, A' => 'Illa de Arousa, A',
		'Lalín' => 'Lalín',
		'Lama, A' => 'Lama, A',
		'Marín' => 'Marín',
		'Meaño' => 'Meaño',
		'Meis' => 'Meis',
		'Moaña' => 'Moaña',
		'Mondariz' => 'Mondariz',
		'Mondariz-Balneario' => 'Mondariz-Balneario',
		'Moraña' => 'Moraña',
		'Mos' => 'Mos',
		'Neves, As' => 'Neves, As',
		'Nigrán' => 'Nigrán',
		'Oia' => 'Oia',
		'Pazos de Borbén' => 'Pazos de Borbén',
		'Poio' => 'Poio',
		'Ponteareas' => 'Ponteareas',
		'Ponte Caldelas' => 'Ponte Caldelas',
		'Pontecesures' => 'Pontecesures',
		'Pontevedra' => 'Pontevedra',
		'Porriño, O' => 'Porriño, O',
		'Portas' => 'Portas',
		'Redondela' => 'Redondela',
		'Ribadumia' => 'Ribadumia',
		'Rodeiro' => 'Rodeiro',
		'Rosal, O' => 'Rosal, O',
		'Salceda de Caselas' => 'Salceda de Caselas',
		'Salvaterra de Miño' => 'Salvaterra de Miño',
		'Sanxenxo' => 'Sanxenxo',
		'Silleda' => 'Silleda',
		'Soutomaior' => 'Soutomaior',
		'Tomiño' => 'Tomiño',
		'Tui' => 'Tui',
		'Valga' => 'Valga',
		'Vigo' => 'Vigo',
		'Vilaboa' => 'Vilaboa',
		'Vila de Cruces' => 'Vila de Cruces',
		'Vilagarcía de Arousa' => 'Vilagarcía de Arousa',
		'Vilanova de Arousa' => 'Vilanova de Arousa',];
		return $pontevedra;
	}

	function participantesEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->participantes;
			}
		}
		return $participantes;
	}

	function novosParticipantesEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->primeiravez;
			}
		}
		return $participantes;
	}

	function moza12Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->moza12;
			}
		}
		return $participantes;
	}

	function mozo12Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->mozo12;
			}
		}
		return $participantes;
	}

	function no_binaria12Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->no_binaria12;
			}
		}
		return $participantes;
	}

	function outro12Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->outro12;
			}
		}
		return $participantes;
	}

	function no_contesta12Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->no_contesta12;
			}
		}
		return $participantes;
	}

	function moza17Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->moza17;
			}
		}
		return $participantes;
	}

	function mozo17Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->mozo17;
			}
		}
		return $participantes;
	}

	function no_binaria17Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->no_binaria17;
			}
		}
		return $participantes;
	}

	function outro17Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->outro17;
			}
		}
		return $participantes;
	}

	function no_contesta17Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->no_contesta17;
			}
		}
		return $participantes;
	}

	function moza26Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->moza26;
			}
		}
		return $participantes;
	}

	function mozo26Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->mozo26;
			}
		}
		return $participantes;
	}

	function no_binaria26Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->no_binaria26;
			}
		}
		return $participantes;
	}

	function outro26Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->outro26;
			}
		}
		return $participantes;
	}

	function no_contesta26Edicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$participantes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$participantes += $avaliacion->no_contesta26;
			}
		}
		return $participantes;
	}

	function monitorsEspazoEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->valoracionespazo;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function monitorsMateriaisEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->valoracionmateriais;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function monitorsHorarioEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->valoracionhorario;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function monitorsParticipacionEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->valoracionparticipacion;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function monitorsXeralEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->valoracionxeral;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function monitorsControlEdicion($edicion) {
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionmonitors as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->control;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function satistfaccionMonitores($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->monitores;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function satistfaccionEspazo($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->espazo;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function satistfaccionMateriais($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->materiais;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function satistfaccionHorario($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->horario;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function satistfaccionXeral($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$avaliacions = 0;
		$espazo = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$avaliacions ++;
				$espazo += $avaliacion->xeral;
			}
		}
		if ($avaliacions == 0) {
			return null;
		}
		return $espazo / $avaliacions;
	}

	function homesEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$homes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				if ($avaliacion->xenero === 'home') {
					$homes ++;
				}
			}
		}
		return $homes;
	}

	function estudianEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$contador = 0;
		$datos = [];
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$_datos = explode('|', $avaliacion->estado);
				$datos = array_merge($datos, $_datos);
			}
		}
		return array_count_values($datos);
	}

	function motivacionEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$contador = 0;
		$datos = [];
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$_datos = explode('|', $avaliacion->motivacion);
				$datos = array_merge($datos, $_datos);
			}
		}
		return array_count_values($datos);
	}

	function encontrouEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$contador = 0;
		$datos = [];
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$_datos = explode('|', $avaliacion->encontrou);
				$datos = array_merge($datos, $_datos);
			}
		}
		return array_count_values($datos);
	}

	function concelloEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$contador = 0;
		$datos = [];
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				$_datos = explode('|', $avaliacion->concello);
				$datos = array_merge($datos, $_datos);
			}
		}
		return array_count_values($datos);
	}

	function idadeEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$contador = 0;
		$pequenos = 0;
		$medianos = 0;
		$grandes = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				if ($avaliacion->idade >= 12 && $avaliacion->idade < 17) {
					$pequenos++;
				}
				if ($avaliacion->idade >= 17 && $avaliacion->idade <= 25) {
					$medianos++;
				}
				if ($avaliacion->idade > 25 && $avaliacion->idade <= 30) {
					$grandes++;
				}
			}
		}
		return ['12-16'=>$pequenos, '17-25'=>$medianos, '25-30'=>$grandes];
	}

	function mulleresEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$mulleres = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				if ($avaliacion->xenero === 'muller') {
					$mulleres ++;
				}
			}
		}
		return $mulleres;
	}

	function noBinariaEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$outros = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				if ($avaliacion->xenero === 'no_binaria') {
					$outros ++;
				}
			}
		}
		return $outros;
	}

	function outrosEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$outros = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				if ($avaliacion->xenero === 'outro') {
					$outros ++;
				}
			}
		}
		return $outros;
	}

	function noContestaEdicion($edicion)
	{
		$actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
		$outros = 0;
		foreach ($actividades as $actividad) {
			foreach ($actividad->avaliacionsatisfacions as $avaliacion) {
				if ($avaliacion->xenero === 'no_contesta') {
					$outros ++;
				}
			}
		}
		return $outros;
	}

	function numEnquisas($actividade, $evento)
	{
		$actividade = \App\Models\Actividade::find($actividade);
		$evento = \App\Models\Evento::find($evento);
		$aval = $actividade->avaliacionsatisfacions->where('created_at', '>=', $evento->inicio)->where('created_at', '<', $evento->inicio->addDays(5));
		return ' ('.$aval->count().' enquisas)';
	}

	function colores()
	{
		$colores = [
			'#ef9a9a',
			'#f48fb1',
			'#ce93d8',
			'#b39ddb',
			'#9fa8da',
			'#90caf9',
			'#81d4fa',
			'#80deea',
			'#80cbc4',
			'#a5d6a7',
			'#c5e1a5',
			'#e6ee9c',
			'#fff59d',
			'#ffe082',
			'#ffcc80',
			'#ffab91',
			'#bcaaa4',
			'#eeeeee',
			'#b0bec5',
		];
		return $colores;
	}