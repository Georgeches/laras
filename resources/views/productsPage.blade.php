@extends('layout')

@section('content')
@include('partials.navbar')
<div class="container allproducts d-flex justify-content-center">
    <div class="card style-card my-2 border-0">
    <div class="card-body p-0 bg-light">
        <a href='/viewproduct'><img class="img-fluid" src="https://m.hng.io/catalog/product/9/6/962627_dark_green_1.jpg?io=PDP" alt=""/></a>
        <div class="product-details d-flex justify-content-between align-items-start mt-3 container text-start">
        <div>
            <p class=" fw-normal mb-2">Bouclé tweed blazer</p>
            <p class="fw-light mb-2">Ksh 10000</p>
        </div>
        <i class="bi bi-bag-plus" style="font-size: 25px"></i>
        </div>
    </div>
    </div>

    <div class="card style-card my-2 border-0">
    <div class="card-body p-0 bg-light">
        <img class="img-fluid" src="https://m.hng.io/catalog/product/9/5/957727_bright_green_1.jpg?io=PDP" alt=""/>
        <div class="product-details d-flex justify-content-between align-items-start mt-3 container text-start">
        <div>
            <p class=" fw-normal mb-2">Pleated taffeta midi dress</p>
            <p class="fw-light mb-2">Ksh 20000</p>
        </div>
        <i class="bi bi-bag-plus" style="font-size: 25px"></i>
        </div>
    </div>
    </div>

    <div class="card style-card my-2 border-0">
    <div class="card-body p-0 bg-light">
        <img class="img-fluid" src="https://m.hng.io/catalog/product/9/5/955674_red_1.jpg?io=PDP" alt=""/>
        <div class="product-details d-flex justify-content-between align-items-start mt-3 container text-start">
        <div>
            <p class=" fw-normal mb-2">Stretch-silk satin top</p>
            <p class="fw-light mb-2">Ksh 15000</p>
        </div>
        <i class="bi bi-bag-plus" style="font-size: 25px"></i>
        </div>
    </div>
    </div>

    <div class="card style-card my-2 border-0">
    <div class="card-body p-0 bg-light">
        <img class="img-fluid" src="https://m.hng.io/catalog/product/9/5/958851_black_1.jpg?io=PDP" alt=""/>
        <div class="product-details d-flex justify-content-between align-items-start mt-3 container text-start">
        <div>
            <p class=" fw-normal mb-2">Panther draped midi skirt</p>
            <p class="fw-light mb-2">Ksh 40000</p>
        </div>
        <i class="bi bi-bag-plus" style="font-size: 25px"></i>
        </div>
    </div>
    </div>

    <div class="card style-card my-2 border-0">
    <div class="card-body p-0 bg-light">
        <img class="img-fluid" src="https://m.hng.io/catalog/product/9/5/951853_navy_1.jpg?io=PDP" alt=""/>
        <div class="product-details d-flex justify-content-between align-items-start mt-3 container text-start">
        <div>
            <p class=" fw-normal mb-2">Oceane satin midi dress</p>
            <p class="fw-light mb-2">Ksh 50000</p>
        </div>
        <i class="bi bi-bag-plus" style="font-size: 25px"></i>
        </div>
    </div>
    </div>

    <div class="card style-card my-2 border-0">
    <div class="card-body p-0 bg-light">
        <img class="img-fluid" src="https://m.hng.io/catalog/product/9/5/954471_green_1.jpg?io=PDP" alt=""/>
        <div class="product-details d-flex justify-content-between align-items-start mt-3 container text-start">
        <div>
            <p class=" fw-normal mb-2">Karina Tuck midi dress</p>
            <p class="fw-light mb-2">Ksh 45000</p>
        </div>
        <i class="bi bi-bag-plus" style="font-size: 25px"></i>
        </div>
    </div>
    </div>
</div>
@endsection