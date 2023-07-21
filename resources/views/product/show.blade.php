@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="show_cart_section">
    <div class="show_cart_list d-flex">
        <div class="gambar-produk"><img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" alt=""></div>
        <div class="card-body">
            <h5 class="card-title">
                {{ $viewData["product"]->getName() }} (${{ $viewData["product"]->getPrice() }})
            </h5>
            <p class="card-text">{{ $viewData["product"]->getDescription() }}</p>
            <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
                <div class="row">
                    @csrf
                    <div class="col-auto">
                        <div class="input-group col-auto">
                            <div class="input-group-text">Quantity</div>
                            <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn bg-primary text-white" type="submit">Add to cart</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection