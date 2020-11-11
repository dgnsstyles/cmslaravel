@extends('plantilla')
@section('content')    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestor del Slide</h1>
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
                <form method="post" enctype="multipart/form-data" novalidate="">
                @csrf
                    <div class="row">
                        <div class="col-4">
                            <h3>Titulo</h3>
                            <input type="text" name="titulo" class="form-control">
                        </div>
                        <div class="col-6">
                            <h3>Descripcion</h3>
                            <input type="text" name="descripcion" class="form-control">
                        </div>
                        <div class="col-6 my-3">
                            <h3>Imagen</h3>
                            <input type="file" name="file" class="mb-3">
                        </div>  
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Agregar al Slide</button>
                    </div>
                
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