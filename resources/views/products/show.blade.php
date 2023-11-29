@php
    $options = [
        [ 'value' => '', 'label'=> 'Please select a size' ],
        [ 'value'=> 'Medium', 'label'=> 'Medium' ],
        [ 'value'=> 'Large', 'label'=> 'Large' ],
        [ 'value'=> 'X Large', 'label'=> 'X Large' ],
        [ 'value'=> 'XX Large', 'label'=> 'XX Large' ],
    ];
    $text = $product['description']
@endphp

@extends('layout')

@section('content')
    <div class="product-detail container">
        <a href="{{ url()->previous() }}" class="btn btn-link text-decoration-none text-dark"><i class="bi bi-arrow-left"></i> Back</a>
        <div class="row product-detail-row justify-content-around align-items-center">
            <div class="col-md-6 product-detail-img">
                <img class="img-fluid" src={{$product['image']}} alt=""/>
            </div>

            <div class="col-md-4">
                <p class='lead fw-normal'>{{$product['name']}}</p>
                <p class='fw-light mb-3'>sh {{$product['price']}}</p>
                <div class='d-flex'>
                    <p class='fw-light' style='font-size: small;'>{{$product['description']}}</p>
                </div>
                <select name="size" id="">
                    @foreach($options as $option)
                        <option value="{{$option['value']}}">{{$option['label']}}</option>
                    @endforeach
                </select>
                <button class='btn btn-dark text-center mt-3 add-cart'>ADD TO BAG</button>
            </div>
        </div>
    </div>
@endsection