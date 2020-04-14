@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="card padding">
        <header>
          <h4>Crear nuevo producto</h4>
        </header>
        <div class="card-body">
          <form class="app-form" action="{{ route('productos.update', $product->id) }}" method="post">
            @csrf @method('PUT')
              @include('products.form')
          </form>
        </div>
      </div>
    </div>
@endsection