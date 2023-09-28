@extends('master')
@section('content') 
<div class=" custom-product">
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h1>Search</h1>
            @foreach ($product as $item)
            <div class="container searched-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['image']}}">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                        <h5>{{$item['description']}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection