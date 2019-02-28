@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row justify-content-center">

        @if (empty($tickets) or sizeof($tickets)==0)
            <div class="alert alert-warning">Aun no tienes ningun ticket</div>
        @else
            <div class="col-5">
                @foreach ($tickets as $ticket)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $ticket->title }} ({{ $ticket->status?"Procesando":"Cerrado"}})
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Categoria: 
                                @foreach ($categorias as $categoria)
                                    @if($categoria->id == $ticket->categoria_id)
                                        {{ $categoria->nombre }}
                                    @endif
                                @endforeach
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Prioridad: 
                                @foreach ($prioridades as $prioridad)
                                    @if($prioridad->id == $ticket->priority_id)
                                        {{ $prioridad->nombre }}
                                    @endif
                                @endforeach
                            </h6>
                            <p class="card-text">{{ $ticket->mensaje }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        @endif
        </div>
    </div>
@endsection