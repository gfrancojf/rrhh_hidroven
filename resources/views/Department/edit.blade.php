@extends ('app.layout')
@section('content')

    <h1 class="h3 mt-5 mb-4 text-gray-800">Actualizar departamento </h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Todos los campos marcados con * son requeridos</h6>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form class="user" method="POST" action="{{ route('departments.update', $department->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="name" type="text" class="form-control" placeholder="Nombre *" required
                                    value="{{ $department->name }}">
                            </div>
                        </div>
                        <hr>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-user"><i class="fa fa-save"></i>
                                Actualizar</button>
                            <a class="btn btn-danger btn-user" href="{{ route('departments.index') }}"><i
                                    class="fa fa-times-circle"></i> Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
