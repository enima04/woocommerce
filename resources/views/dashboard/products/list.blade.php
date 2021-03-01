@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Products</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard/products')}}">Products</a></li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
<div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Products</h4>
                        <a class="btn btn-primary" href="/dashboard/products/create">Create</a>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Regular Price</th>
                                        <th>On Sale</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_products as $product)
                                        <tr>
                                            <th scope="row">{{$product->id}}</th>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->regular_price}}</td>
                                            <td>@if($product->on_sale) yes @else no @endif</td>
                                            <td>
                                            <div class="row">
                                                <a class="btn btn-primary" href="{{url('/dashboard/products/show/'.$product->id.'')}}">show</a>
                                                <a class="btn btn-secondary offset-1" href="{{url('/dashboard/products/update/'.$product->id.'')}}">edit</a>
                                                
                                                <form class="offset-1" action="{{url('/dashboard/products/delete')}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                    <button class="btn btn-danger" type="submit" name="id" value="{{$product->id}}">delete</button>
                                                </form>


                                            
                                            </div>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
</div>

@endsection