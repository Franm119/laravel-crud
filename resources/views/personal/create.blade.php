@extends('layout')

@section('title', 'Create | Personal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 col-lg-8 mx-auto py-3">
                <form class="bg-white shadow rounded py-4 px-4" method="POST" action="{{ route('personal.store') }}">
                    @csrf
                    <h1 class="display-5" >@lang('Crear Personal')</h1>
                    <div class="form-group">
                        <label for="names">Nombre</label>
                        <input class="form-control bg-light shadow-sm
                        @error('names') is-invalid @else border-0 @enderror"
                        id="names" name="names" placeholder="José..." value="{{ old('names') }}">
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
                        id="last_name" name="last_name" placeholder="Hernández..." value="{{ old('last_name') }}">
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
                            <option value="">Selecciona un sexo</option>
                            <option value="Femenino" {{ old('sex') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                            <option value="Masculino" {{ old('sex') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
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
                        id="birthday" name="birthday" value="{{ old('birthday') }}">
                        @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" >@lang('Guardar')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
