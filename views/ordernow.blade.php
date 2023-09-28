@extends('master')
@section('content') 
<div class="custom-product">
    <div class="col-sm-10"> 
        <table class="table">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>{{$quantity}}</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td>${{$total*$quantity+10}}</td>                
                </tr>
            </tbody>
        </table>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Your Name">
            </div>
            <div class="form-group">
                <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">วิธีการชำระเงิน</label><br>
                <input type="radio" value="บัตรเครดิต/เดรบิต" name="payment"><span>บัตรเครดิต/เดรบิต</span><br><br>
                <input type="radio" value="Paypal" name="payment"><span>Paypal</span><br><br>
                <input type="radio" value="เก็บเงินปลายทาง" name="payment"><span>เก็บเงินปลายทาง</span><br><br>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
        </form>
    </div>
</div>
@endsection