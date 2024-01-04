@extends('products.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Criar Novo Produto</div>
  <div class="card-body">
       
    <form action="{{ url('products') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Codigo</label></br>
        <input type="text" name="cod" id="cod" class="form-control"></br>
        <label>Descrição</label></br>
        <input type="text" name="desc" id="desc" class="form-control"></br>
        <label>Preço</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop