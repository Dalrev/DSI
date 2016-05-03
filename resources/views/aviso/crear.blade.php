@extends('app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="" method="POST" class="form-inline">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   
                    <p>Precio: <input type="text" class="form-control" name="precio"> </p> 
                 	<p><input type="submit" class="btn btn-success" value="Save"></p>
                   
                </form>
                  <p>Tipo Propiedad: <input type="text" class="form-control" name="workName">
                    <p>Superficie: <input type="text" class="form-control" name="workName">
                    <p>Dormitorios: <input type="text" class="form-control" name="workName">
                    <p>Telefono: <input type="text" class="form-control" name="workName">
                    <p>Universidad: <input type="text" class="form-control" name="workName">
                    <p>Descripcion: <input type="text" class="form-control" name="workName">
                    <p>Estacionamientos: <input type="text" class="form-control" name="workName">
                    <p>Baños: <input type="text" class="form-control" name="workName">
                    <p>Visibilidad: <input type="text" class="form-control" name="workName">
                    <p>Dirección: <input type="text" class="form-control" name="workName">
                    <p>Comuna: <input type="text" class="form-control" name="workName">
                    <p>Region: <input type="text" class="form-control" name="workName">  
                     <p>Titulo: <input type="text" class="form-control" name="titulo"> </p> 
            </div>
        </div>
    </div>
@endsection
