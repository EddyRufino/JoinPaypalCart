@extends('layouts.app')

@section('content')
  <div class="row justify-content-sm-center">
    <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
      <div class="card">
        <header class="padding text-center bg-primary">
          <br>
        </header>
        <div class="card-body padding">
          <h1 class="card-title">{{ $product->title }}</h1>
          <h4 class="card-subtitle">{{ $product->price }}</h4>
          <p class="card-text">{{ $product->description }}</p>
          <div class="card-acctions">
            <add-to-card :product='{!! json_encode($product) !!}'></add-to-card>
            {{-- <form action="{{ url('/in_shopping_carts') }}" method="post">
              @csrf
              <input type="hidden" name="product_id" value="{{$product->id}}">
              <button type="submit" class="btn btn-success">Agregar al carrito</button>
            </form> --}}
            <div class="cls">
              @auth
                <form action="{{ route('productos.destroy', $product->id) }}"
                  method="POST" onsubmit="return confirm('Estás seguro de querer eliminarlo?')">
                  @csrf @method('DELETE')
                  <button class="btn btn-danger">Eliminar</button>
                </form>
              @endauth
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection