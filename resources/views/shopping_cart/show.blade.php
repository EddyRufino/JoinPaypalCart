@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="card padding">
        <header>
          <h2>Mi carrito de compras</h2>
        </header>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-6">
              <products-shopping></products-shopping>
            </div>
            <div class="col-12 col-md-6 payments">
              <p>Paga facilmente con cualquiera de estos métodos de pago</p>
              <img src="/img/paypal.jpg" alt="" width="120">
              <div>
                <a href="/pagar" class="btn btn-primary">Proceder a pagar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection