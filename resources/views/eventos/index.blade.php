@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Eventos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('eventos.create') !!}">Engadir novo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div id='calendar'></div>
            <div class="box-body">
                    @include('eventos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
@section('scripts')
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            displayEventEnd: true,
            events: [
                @foreach($eventos as $evento)
                {
                    id: '{{$evento->id}}',
                    title: '{{trim($evento->actividade->nome)}}',
                    start: '{{$evento->inicio}}',
                    end: '{{$evento->fin}}'
                },
                @endforeach
            ],
            eventTimeFormat: { // like '14:30:00'
                hour: 'numeric',
                minute: '2-digit',
                meridiem: false,
                hour12: false
            }
        });

        calendar.render();
      });
    $('#eventos-table').DataTable({
        "iDisplayLength": 100
    });
    </script>
    @endsection