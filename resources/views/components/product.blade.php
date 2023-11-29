@props(['product'])

<div class="card style-card my-4 border-0">
    <div class="card-body p-0 bg-light">
        <a href="/products/{{$product['id']}}"><img class="img-fluid" src={{$product['image']}} alt=""/></a>
        <div class="product-details d-flex justify-content-between align-items-start mt-3 container text-start">
        <div>
            <a href="/products/{{$product['id']}}"><p class="text-dark fw-normal mb-2">{{$product['name']}}</p></a>
            <p class="fw-light mb-2">sh {{$product['price']}}</p>
        </div>
        <i class="bi bi-bag-plus" style="font-size: 25px"></i>
        </div>
    </div>
</div>