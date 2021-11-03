@extends('layout')

@section('title', 'Edit | Personal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 col-lg-8 mx-auto py-3">
                <form class="bg-white shadow rounded py-4 px-4" method="POST" action="{{ route('personal.update', $personal->id) }}">
                    @csrf @method('PATCH')
                    <h1 class="display-5" >@lang('Editar Personal')</h1>
                    <div class="form-group">
                        <label for="names">Nombre</label>
                        <input class="form-control bg-light shadow-sm
                        @error('names') is-invalid @else border-0 @enderror"
                        id="names" name="names" placeholder="José..." value="{{ old('names', $personal->names) }}">
                        @error('names')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input class="form-control bg-light shadow-sm
                        @error('last_name') is-invalid @else border-0 @enderror"
                        id="last_name" name="last_name" placeholder="Hernández..." value="{{ old('last_name', $personal->last_name) }}">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sex">Sexo</label>
                        <select class="custom-select bg-light shadow-sm
                        @error('sex') is-invalid @else border-0 @enderror"
                        id="sex" name="sex">
                            <option {{ old('sex', $personal->sex) == 'Femenino' ? 'selected' : '' }}  value="Femenino">Femenino</option>
                            <option {{ old('sex', $personal->sex) == 'Masculino' ? 'selected' : '' }}  value="Masculino">Masculino</option>
                        </select>
                        @error('sex')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birthday">Fecha de nacimiento</label>
                        <input type="date" class="form-control bg-light shadow-sm
                        @error('birthday') is-invalid @else border-0 @enderror"
                        id="birthday" name="birthday" placeholder="" value="{{ old('birthday', $personal->birthday) }}">
                        @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" >@lang('Actualizar')</button>
                    <!-- <button class="btn btn-outline-primary btn-lg btn-block" href="{{ route('personal.index') }}" >@lang('Cancelar')</button> -->
                </form>
            </div>
        </div>
    </div>
@endsection
