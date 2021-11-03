@extends('layout')

@section('title', 'Show | Personal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 col-lg-8 mx-auto py-3">
                <form class="bg-white shadow rounded py-4 px-4">
                    <h1 class="display-5" >@lang('Personal')</h1>
                    <div class="form-group">
                        <label for="names">Nombre</label>
                        <input class="form-control bg-light shadow-sm"
                        id="names" name="names" value="{{ $personal->names }}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input class="form-control bg-light shadow-sm"
                        id="last_name" name="last_name" value="{{ $personal->last_name }}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="sex">Sexo</label>
                        <input class="form-control bg-light shadow-sm"
                        id="sex" name="sex" value="{{ $personal->sex }}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Fecha de nacimiento</label>
                        <input type="date" class="form-control bg-light shadow-sm"
                        id="birthday" name="birthday" value="{{ $personal->birthday }}" readonly="readonly">
                    </div>
                    <a class="btn btn btn-success btn-lg btn-block" href="{{ route('personal.edit', $personal->id) }}">@lang('Actualizar')</a>
                    <a class="btn btn-outline-success btn-lg btn-block" href="{{ route('personal.index') }}">@lang('Cancelar')</a>
                </form>
            </div>
        </div>
    </div>
@endsection
