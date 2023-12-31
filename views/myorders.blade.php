@extends('master')
@section('content') 
<div class=" custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>My Bill</h2>
            @foreach ($orders as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->image}}">
                    </a>
                </div>
                <div class="col-sm-3">
                        <div class="">
                            <h3>Name : {{$item->name}}</h3>
                            <h5>Delivery Status : {{$item->status}}</h5>
                            <h5>Customer Name : {{$item->ctm_name}}</h5>
                            <h5>Price : {{$item->price}}</h5>
                            <h5>Address : {{$item->address}}</h5>
                            <h5>Payment Status : {{$item->payment_status}}</h5>
                            <h5>Payment Method : {{$item->payment_method}}</h5>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection