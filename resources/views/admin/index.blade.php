@extends('layout')

@section('content')
    @include('admin.partials.admin-navbar')
    <div class="container-fluid  admin-body mt-5">
        <h2 class="mb-5 text-secondary fw-light ps-5">Laras Admin</h2>
        <div class="admin-flex d-flex justify-content-between">
            <div class="admin-flex-left ps-5">
                <h2 class="text-danger">Collections</h2>
                <ul class="collections">
                    <li class="collection">
                        <a href="/adminpage?collection=products" class="btn btn-link text-dark text-decoration-none"><p class="lead">Products</p></a>
                    </li>
                    <li class="collection">
                        <a href="/adminpage?collection=users" class="btn btn-link text-dark text-decoration-none"><p class="lead">Users</p></a>
                    </li>
                    <li class="collection">
                        <a href="/adminpage?collection=orders" class="btn btn-link text-dark text-decoration-none"><p class="lead">Orders</p></a>
                    </li>
                </ul>
            </div>
            <div class="admin-flex-right">
                @if (count($collection) < 1)
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="lead">No items to display</p>
                    </div>
                @else
                @if ($request == 'products')
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Category</th>
                                <th scope="col">Color</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $product)
                                <tr>
                                    <td><img src={{$product['image']}} alt="" style="width: 100px; height: auto;"></td>
                                    <td>{{$product['name']}}</td>
                                    <td>{{$product['brand']}}</td>
                                    <td>{{$product['model']}}</td>
                                    <td>{{$product['category']}}</td>
                                    <td>{{$product['color']}}</td>
                                    <td>{{$product['description']}}</td>
                                    <td>sh {{$product['price']}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-link text-danger"><i class="bi bi-trash-fill"></i></a>
                                            <a href="#" class="btn btn-link text-warning"><i class="bi bi-pencil-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                @if ($request == 'users')
                    <table class="table table-striped">
                        <thead class="table-danger">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $user)
                                <tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                  
                @if ($request == 'orders')
                    <table class="table table-striped">
                        <thead class="table-danger">
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $order)
                                <tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                @endif
            </div>
        </div>
    </div>
@endsection