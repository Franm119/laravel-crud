@extends('layout')

@section('title', 'List | Personal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 col-lg-8 mx-auto py-3">
                <div class="row align-items-start d-flex align-items-center">
                    <div class="p-1"><h1 class="mb-0">@lang('Lista de personal')</h1></div>
                    <div class="ml-auto p-1"><a class="btn btn-outline-success" href="{{ route('personal.create') }}">Create</a></div>
                </div>
                <div class="row justify-content-center">
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 134px;" >Id</th>
                                    <th scope="col" style="width: 134px;" >Nombre</th>
                                    <th scope="col" style="width: 134px;" >Apellido</th>
                                    <th scope="col" style="width: 134px;" >Seso</th>
                                    <th scope="col" style="width: 134px;" >F. nac</th>
                                    <th scope="col" style="width: 280px;"  colspan="3" >Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($personal as $persona)
                                    <tr>
                                        <td class="align-middle" > {{ $persona->id }} </td>
                                        <td class="align-middle"> {{ $persona->names }} </td>
                                        <td class="align-middle"> {{ $persona->last_name }} </td>
                                        <td class="align-middle"> {{ $persona->sex }} </td>
                                        <td class="align-middle"> {{date("d/m/Y", strtotime($persona->birthday))}} </td>
                                        <td class="align-middle">
                                            <a href="#" title="Ver dato personal" class="btn btn-outline-success">Show</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" title="Editar dato personal" class="btn btn-outline-primary">Edit</a>
                                        </td>
                                        <td class="align-middle">
                                            <form action="#" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <BUtton title="Eliminar dato personal" class="btn btn-outline-danger " ><i class="fa fa-trash"></i>Delete</BUtton>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {!! $personal->render() !!}
            </div>
        </div>
    </div>
@endsection
