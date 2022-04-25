@extends('layout.app')

@section('title')
    Tabla Users
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tabla de usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <a class="btn btn-success mb-4" href="{{ route('usuario.create') }}">Nuevo</a>


                            <table id="example" class="table table-bordered  display nowrap table-hover table-striped"
                                cellspacing="0" width="100%">
                                <thead class="avi-bg-grey text-dark">
                                    <tr class="">
                                        <th class=" ">ID</th>
                                        <th class=" ">Nombre del usuario</th>
                                        <th class=" ">Correo</th>
                                        <th class=" ">Acciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td class="">{{ $usuario->id }}</td>
                                            <td class="">{{ $usuario->name_user }}</td>
                                            <td class="">{{ $usuario->email }}</td>

                                            <td>
                                                <div class="row">

                                                    <div class="col-md-12 col-12">

                                                        <form class="formEliminar"
                                                            action="{{ route('usuario.destroy', $usuario->id) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            {{-- Botones de editar --}}
                                                            <a class="btn btn-primary"
                                                                href="{{ route('usuario.edit', $usuario->id) }}">Editar
                                                            </a>
                                                            {{-- Boton eliminar --}}
                                                            <button class="btn btn-danger" type="submit">Borrar</button>
                                                        </form>

                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="text-muted">
                                    <th class=" ">ID</th>
                                    <th class=" ">Nombre del usuario</th>
                                    <th class=" ">Correo</th>
                                    <th class=" ">Acciones </th>
                                </tfoot>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
