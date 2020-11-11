@extends('plantilla')
@section('content')    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear Usuario</h1>
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
                <form method="post"  novalidate="">
                    @csrf
                    <h3>Nombre:</h3>
                    <input type="text" name="name" class="form-control">
                    <h3>Email:</h3>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                    <br>
                    <p class="alert alert-danger">el correo se encuentra registrado</p>
                    @enderror
                    <h3>Password:</h3>
                    <input type="password" name="name" class="form-control">
                    <h3>Rol:</h3>
                    <select class="form-control mb-3" name="rol">
                        <option value="">Seleccionar...</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Editor">Editor</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Guardar</button>
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