@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR REGISTROS</h2>


<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo"  type="text" class="form-control" value="{{$articulo->codigo}}" tabindex="1">
</div>

<div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion"  type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
</div>

<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad"  type="number" class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precios</label>
    <input id="precio" name="precio"  type="number" class="form-control" value="{{$articulo->precio}}" tabindex="4">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="4">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="5" >Guardar</button>



</form>

@endsection
