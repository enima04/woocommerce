@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">orders</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard/orders')}}">orders</a></li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
<div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">orders</h4>
                        </p>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_orders as $order)
                                        <tr>
                                            <th scope="row">{{$order->id}}</th>
                                            <td>{{$order->number}}</td>
                                            <td>{{$order->status}}</td>
                                            <td>
                                            <div class="row">
                                                <a class="btn btn-primary" href="{{url('/dashboard/orders/show/'.$order->id.'')}}">show</a>
                                                <a class="btn btn-secondary offset-1" href="{{url('/dashboard/orders/update/'.$order->id.'')}}">edit</a>
                                                
                                                <form class="offset-1" action="{{url('/dashboard/orders/delete')}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                    <button class="btn btn-danger" type="submit" name="id" value="{{$order->id}}">delete</button>
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