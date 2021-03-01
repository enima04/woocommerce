@extends('layouts.dashboard')

@section('content')

<div class="container">
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">customer {{$customer->id}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('/dashboard/customers')}}">customers</a></li>
            </ol>
        </div>
    </div> <!-- end row -->
</div>
<div class="card m-b-30 card-body">
    <h4 class="card-title font-16 mt-0">ID</h4>
    <p class="card-text">
        {{$customer->id}}
    </p>

    <h4 class="card-title font-16 mt-0">First Name</h4>
    <p class="card-text">
        {{$customer->first_name}}
    </p>

    <h4 class="card-title font-16 mt-0">Last Name</h4>
    <p class="card-text">
        {{$customer->last_name}}
    </p>

    <h4 class="card-title font-16 mt-0">Username</h4>
    <p class="card-text">
        {{$customer->username}}
    </p>

    <h4 class="card-title font-16 mt-0">Email</h4>
    <p class="card-text">
        {{$customer->email}}
    </p>

</div>
</div>

@endsection