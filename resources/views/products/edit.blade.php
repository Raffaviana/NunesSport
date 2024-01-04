@extends('products.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Editar Produto</div>
  <div class="card-body">
       
      <form action="{{ url('products/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
        <label>Codigo</label></br>
        <input type="text" name="cod" id="cod" value="{{$products->cod}}" class="form-control"></br>
        <label>Descrição</label></br>
        <input type="text" name="desc" id="desc" value="{{$products->desc}}" class="form-control"></br>
        <label>Preço</label></br>
        <input type="text" name="price" id="price" value="{{$products->price}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop