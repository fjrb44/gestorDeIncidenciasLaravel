@extends('layouts.app')

@section('content')
    <div class="content">
        @if(Session::has('mensaje'))
            <div class="alert alert-success">
                {{Session::get('mensaje')}}
            </div>
        @endif
        <div class="row justify-content-center">
            
            @if (empty($tickets) or sizeof($tickets)==0)
                <div class="alert alert-warning">Aun no tienes ningun ticket</div>
            @else
                <div class="col-8">
                    <h2>Mis tickets</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Last Updated</th>
                                <th scope="col">Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td scope="row">
                                        @foreach ($categorias as $categoria)
                                            @if($categoria->id == $ticket->categoria_id)
                                                {{ $categoria->nombre }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <th scope="row">
                                        <a href="my_tickets/{{$ticket->id}}">
                                            {{ $ticket->title }}
                                        </a> 
                                    </th>
                                    <td>
                                        {{ ($ticket->status?"Cerrado":"Abierta")}}
                                    </td>
                                    <td>
                                        {{ $ticket->updated_at }}
                                    </td>
                                    <td>
                                        @foreach ($prioridades as $prioridad)
                                            @if($prioridad->id == $ticket->priority_id)
                                                {{ $prioridad->nombre }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection