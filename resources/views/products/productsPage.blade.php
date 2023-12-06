@extends('layout')

@section('content')
@include('products.partials.navbar')
<div class="container-fluid products-page d-flex justify-content-between">
    <div class="filter-section">
        <h4 class="mb-2">All products ({{count($products)}})</h4>
        <hr>
        <ul class="filter-categories mt-4 mb-5">
            <li class="filter-category">
                <a href="/all" class="filter-category-link">All</a>
            </li>
            @foreach ($categories as $category)
                <li class="filter-category">
                    <a href="?category={{$category->id}}" class="filter-category-link">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
        <h5 class="mt-3 mb-2">By price</h5>
        <hr>
        <ul class="filter-categories mt-4 mb-5">
            <li class="filter-category">
                <a href="?minprice=0&maxprice=500" class="filter-category-link">sh 0 - sh 500</a>
            </li>
            <li class="filter-category">
                <a href="?minprice=501&maxprice=2000" class="filter-category-link">sh 501 - sh 2000</a>
            </li>
            <li class="filter-category">
                <a href="?minprice=2001&maxprice=4000" class="filter-category-link">sh 2001 - sh 4000</a>
            </li>
            <li class="filter-category">
                <a href="?minprice=4001&maxprice=8000" class="filter-category-link">sh 4001 - sh 8000</a>
            </li>
            <li class="filter-category">
                <a href="?minprice=8001&maxprice=none" class="filter-category-link">sh 8001 - ...</a>
            </li>
        </ul>
        <h5 class="mt-3 mb-2">Sort By:</h5>
        <hr>
        <ul class="filter-categories mt-4">
            <li class="filter-category">
                <a href="?sort=newest" class="filter-category-link">Newest</a>
            </li>
            <li class="filter-category">
                <a href="?sort=pricehl" class="filter-category-link">Price high to low</a>
            </li>
            <li class="filter-category">
                <a href="?sort=pricelh" class="filter-category-link">Price Low to High</a>
            </li>
        </ul>
    </div>
    <div class="container w-75 allproducts">
        <form action="" class="w-100 d-flex justify-content-center mb-5">
            <input type="text" placeholder="Search..." class="form-control w-50 ps-3" name="search" id="search">
            <input type="submit" name="submit-search" class="form-control btn btn-outline-dark ms-2" style="width: 10%;" value="search">
        </form>
        <div class="ready-row d-flex flex-wrap justify-content-center">
            @foreach ($products as $product)
                <x-product :product="$product"/>
            @endforeach
        </div>
    </div>
</div>
@endsection