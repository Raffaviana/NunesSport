@extends('products.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Pagina do Produto</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nome : {{ $products->name }}</h5>
        <p class="card-text">Codigo : {{ $products->cod }}</p>
        <p class="card-text">Descrição : {{ $products->desc }}</p>
        <p class="card-text">Preço : {{ $products->price }}</p>
  </div>
    </hr>
  </div>
</div>