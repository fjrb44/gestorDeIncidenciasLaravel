@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row justify-content-center">

            @if (empty($tickets) or sizeof($tickets)==0)
                <div class="alert alert-warning">Aun no tienes ningun ticket</div>
            @else
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Last Updated</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Actions</th>
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
                                        {{ $ticket->title }}
                                        (
                                        @foreach ($users as $user)
                                            @if($user->id == $ticket->user_id)
                                                {{ $user->name }}
                                            @endif
                                        @endforeach
                                        )
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
                                    <td>
                                        @if (!$ticket->status)
                                            <form action="close_ticket/{{$ticket->id}}" method="POST">@csrf
                                                <button type="submit" class="btn btn-primary">Cerrar</button>
                                            </form>
                                        @endif
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