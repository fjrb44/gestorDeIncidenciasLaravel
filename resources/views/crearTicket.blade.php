@extends('layouts.app')

@section('content')
    <div class="content">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row justify-content-center">
            <form class="col-5 bg-dark text-white rounded" action="new_ticket" method="POST">
                @csrf
                <h2 class="mt-3">Crear ticket</h2>
                <div class="form-group">
                    <label for="titulo">
                        Título
                    </label>
                    <input name="titulo" id="titulo" type="text" class="form-control" placeholder="Titulo" value="{{old('titulo')}}" >
                </div>
                <div class="form-group">
                    <label for="prioridad">
                        Prioridad
                    </label>
                    <select class="form-control" id="prioridad" name="prioridad">
                        <option disabled hidden {{ (!empty( old('prioridad') ) ) ? '' : 'selected' }}>
                            Prioridad
                        </option>
                        @foreach ($prioridades as $prioridad)
                            <option value="{{$prioridad->id}}" {{ (!empty( old('prioridad') ) and old('prioridad')===$prioridad->id ) ? 'selected' : '' }}>
                                {{ $prioridad->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="categorias">Categorias</label>
                    <select class="form-control" id="categorias" name="categoria">
                        <option disabled hidden {{ (!empty( old('categoria') ) ) ? '' : 'selected' }}>
                            Categoria
                        </option>
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}" {{ (!empty( old('categoria') ) and old('categoria')===$categoria->id) ? 'selected' : '' }}>
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3">
                        {{ old('mensaje') }}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-light mb-3">Enviar</button>
            </form>
        </div>
    </div>
@endsection