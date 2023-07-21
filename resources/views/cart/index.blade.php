@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Shopping Cart<small> ({{ count($viewData["products"]) }} items in your cart)</small></div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            @foreach ($viewData["products"] as $product)
                            <li class="cart_item clearfix" id="product_{{ $product->getId() }}">
                                <div class="cart_item_image"><img src="{{ asset('/storage/'.$product->getImage()) }}" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Name</div>
                                        <div class="cart_item_text">{{ $product->getName() }}</div>
                                    </div>
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                        <div class="cart_item_text">{{ session('products')[$product->getId()] }}</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Price</div>
                                        <div class="cart_item_text">${{ $product->getPrice() }}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Total</div>
                                        <div class="cart_item_text">${{ $product->getPrice() * session('products')[$product->getId()] }}</div>
                                    </div>
                                    <div class="cart_item_remove cart_info_col">
                                        <div class="cart_item_title">Action</div>
                                        <div class="cart_item_text"></div>
                                        <button class="remove_button btn" onclick="removeProduct('{{ $product->getId() }}')">
                                            <ion-icon class="trash" name="trash-bin"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Order Total:</div>
                            <div class="order_total_amount">${{ $viewData["total"] }}</div>
                        </div>
                    </div>
                    <div class="cart_buttons">
                        @if (count($viewData["products"]) > 0)
                        <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Purchase</a>
                        <a href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2">
                                Remove all products from Cart
                            </button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function removeProduct(productId) {
            var url = '/cart/remove/' + productId;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', url, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var productElement = document.getElementById('product_' + productId);
                    if (productElement) {
                        productElement.remove();
                    }
                }
            };
            xhr.send();
        }
    </script>
</div>
@endsection