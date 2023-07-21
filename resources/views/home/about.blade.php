@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading about-page-heading" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>About Our Company</h2>
                    <span>Trendy, Stylish &amp; Variety of Designs</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image">
                    <img src="{{ asset('/img/itulo.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <h4>About Us &amp; Our Skills</h4>
                    <span>Our team is comprised of dedicated professionals who are committed to bringing you the latest trends and top-quality products.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>we are here to help you showcase your unique style.</p>
                    </div>
                    <p>We take pride in our attention to detail and our commitment to delivering products that meet the highest standards of quality. Our meticulous selection process ensures that each item in our inventory is carefully chosen for its craftsmanship, style, and durability.</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** About Area Ends ***** -->

<!-- ***** Services Area Starts ***** -->
<section class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Services</h2>
                    <span>Details to details is what makes Sneakers.Id different from the other themes.</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <h4>Product Selection</h4>
                    <p>We curate a diverse collection of footwear products, ranging from casual sneakers to formal shoes, sports footwear to stylish sandals. Our extensive range ensures that you can find the perfect pair of shoes for any occasion or style preference.</p>
                    <img src="{{ asset('/img/produk1.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <h4>Fast and Reliable Delivery</h4>
                    <p>We value your time and strive to provide prompt and reliable delivery services. Once you place an order, we work diligently to ensure that your footwear reaches you in a timely manner, so you can start enjoying your new shoes as soon as possible.</p>
                    <img src="{{ asset('/img/deliver.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <h4>Exclusive Deals and Promotions</h4>
                    <p>We love to reward our loyal customers with exclusive deals and promotions. By subscribing to our newsletter or following us on social media, you'll be the first to know about special offers, discounts, and exciting giveaways.</p>
                    <img src="{{ asset('/img/sale.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Services Area Ends ***** 00-->

@endsection