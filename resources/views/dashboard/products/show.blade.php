@extends('layouts.dashboard')

@section('content')

<div class="container">
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Product {{$product->id}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('/dashboard/products')}}">Products</a></li>
            </ol>
        </div>
    </div> <!-- end row -->
</div>
<div class="card m-b-30 card-body">
    <h4 class="card-title font-16 mt-0">ID</h4>
    <p class="card-text">
        {{$product->id}}
    </p>

    <h4 class="card-title font-16 mt-0">Regular Price</h4>
    <p class="card-text">
        {{$product->regular_price}}
    </p>

    <h4 class="card-title font-16 mt-0">Sale Price</h4>
    <p class="card-text">
        {{$product->sale_price}}
    </p>

    <h4 class="card-title font-16 mt-0">On Sale</h4>
    <p class="card-text">
        @if($product->on_sale) yes @else no @endif
    </p>

    <h4 class="card-title font-16 mt-0">Category</h4>
    <p class="card-text">
        @foreach($product->categories as $category)
            <span> {{$category->name}} </span>
        @endforeach
    </p>

    <h4 class="card-title font-16 mt-0">Description</h4>
    <p class="card-text">
    {{$product->description}}
    </p>

    <h4 class="card-title font-16 mt-0">Short Description</h4>
    <p class="card-text">
    {{$product->short_description}}
    </p>
    <h4 class="card-title font-16 mt-0">Pictures</h4>
    <p class="card-text">
    @foreach($product->images as $image)
        <img src="{{$image->src}}" alt="" height="200" width = "200">
    @endforeach
    </p>
    
</div>
</div>

@endsection