@extends('layouts.app')

@section('content')
<div class="content">
    
    @if(Session::has('permisions'))
        <div class="alert alert-danger">
            {{Session::get('permisions')}}
        </div>
    @endif

    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p>
                        
                    </p>
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a class="card-link" href="./new_ticket">Crea un nuevo Ticket</a></li>
                            <li class="list-group-item"><a class="card-link" href="./my_tickets">Ve tus tickets</a></li>
                            @if (auth()->user()->admin)
                                <li class="list-group-item">
                                    <a class="card-link" href="./admin/tickets">Administrar tickets</a>
                                </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection