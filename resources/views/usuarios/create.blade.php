@extends('layout.app')

@section('title')
    Create User
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crete user</h3>
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

                            @if ($errors->any())
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos! </strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ route('usuario.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name_user">Nombre del usuario</label>
                                            <input type="text" name="name_user" class="form-control"
                                                value="{{ old('name_user') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email del Usuario</label>
                                            <input type="email" name="email" class="form-select form-control"
                                                value="{{ old('email') }}">
                                            </input>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <button type="submit" class="btn btn-success m-1 ">Guardar</button>
                                        <a class="btn btn-primary m-1" href="{{ route('usuario.index') }}">Volver</a>

                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
