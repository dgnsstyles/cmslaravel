@extends('plantilla')
@section('content')    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestor de Usuarios</h1>
          <a href="{{ url('/crear-usuarios')}}">
                <button class="btn btn-primary">Crear Usuarios</button>
            </a>
          </div><!-- /.col -->
          <div class="col-sm-6">
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $user) 
                        <tr>
                            <td scope="row">{{$user -> name}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> rol}}</td>
                            <td>
                            <form method="post" action="{{ url('usuarios/'.$user->id)}}">
                                  @csrf
                                  @method('delete')
                                 <button class="btn btn-danter"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>   
                        @endforeach
                                   
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection