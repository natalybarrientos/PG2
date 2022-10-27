@extends('adminlte::page')

@section('title', 'Tipo de Gastos Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> E D I C I Ó N  D E  </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R O </h1>
<br>
<br>
</font>  
@stop

<font face="Courier New">
@section('content')

<div class="container center col-md-5 col-md-offset-5" >

    <form action="/tipogastos/{{$tipogastos->id}}" method="POST" autocomplete="off">
    
    @csrf
    @method('PUT')

    <!-- Tipo de gasto -->
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Gasto</label>
            <input id="tipo" name="tipo" type="text" class="form-control" value="{{$tipogastos->tipo}}">
        </div>
        @error('tipo')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Descripción -->
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$tipogastos->descripcion}}">
        </div>
        @error('descripcion')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>
    
    <!-- Botones -->
    <div class="text-center">
             <a href="/tipogastos" class="btn btn-danger" tabindex="5"><i class="fa-solid fa-xmark"></i> | Cancelar</a>
             <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i> | Guardar</button>
        </div><br><br>
        
        <br><br>


    </form>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('js')
    <script> console.log('Hi!');</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 
</font>   

@stop