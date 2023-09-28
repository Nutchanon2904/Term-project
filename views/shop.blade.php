@extends('master')
@section('content') 
<div class="trending-wrapper">
    <h3>Shop</h3>
    @foreach ($products as $item)
    <div class="trending-item">
        <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['image']}}">
            <div class="">
                <h5>{{$item['name']}}</h5>
                <span class="mt-2 text-gray-500 font-semibold">฿{{ $item->price }}</span>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection