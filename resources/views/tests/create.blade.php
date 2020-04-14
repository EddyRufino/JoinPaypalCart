@extends('layouts.app')

@section('content')
<div class="container">
  {{-- <form action="{{ route('payments.pay') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-auto">
            <label>How much you want to pay?</label>
            <input type="number"
                    name="amount"
                    class="form-control"
                    min="1"
                    step="0.01"
                    value="{{ mt_rand(1, 10) }}"
            >
            <small class="form-text text-muted">
                Use values with up to two decimal positions.
            </small>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" id="payButton" class="btn btn-primary ">Pay</button>
    </div>
  </form> --}}
</div>
@endsection