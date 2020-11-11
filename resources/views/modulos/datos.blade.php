@extends('plantilla')
@section('content')
    


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Mis Datos</h1>
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
              <form class="form-group" action="post" novalidate="" >
                  @csrf
                  @method('put')
              <h4 >Nombre:</h4>
              <input type="text" class="form-control my-3" name="name" value="{{auth()->user()->name }}">
              @error('name')
              <p class="alert alert-danger">error en el usuario</p>
                  
              @enderror
              <h4>Email:</h4>
              <input type="email" class="form-control my-3" name="email" value="{{auth()->user()->email}}">
              @error('email')
                  <p class="alert alert-danger">el correo ya existe</p>
              @enderror
              <h4>Cambiar Clave:</h4>
              <input type="password" class="form-control my-3" name="password" value="">
              @error('password')
                  <p class="alert alert-danger">el password es como la callampa</p>
              @enderror
                <button type="submit" class="btn btn-lg btn-success mt-2">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection