@extends('layouts.app')

@section('title') Shopping Cart @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover bg-danger" style="margin-top: 70px; color:white;">
                    <tr>
                        <td><i class="fas fa-database"></i> Items</td>
                        <td>Prices $</td>
                        <td>Qty</td>
                        <td><i class="fas fa-money-bill-wave"></i> Amount</td>
                    </tr>
                    @if(Session::has('cart'))
                    @foreach($cart as $item)
                    <tr>
                        <td>{{$item['item']['product_name']}}</td>
                        <td>{{$item['item']['price']}} $</td>
                        <td>
                            <a href="{{route('decrease.cart',['id'=>$item['item']['id']])}}"><i class="fas fa-minus-square" style="color:white;"></i> </a>
                            {{$item['qty']}}
                            <a href="{{route('increase.cart',['id'=>$item['item']['id']])}}"><i class="fas fa-plus-square" style="color: white;"></i> </a>
                        </td>
                        <td>
                            {{$item['amount']}} $</td>

                    </tr>
                        @endforeach
                    <tr>
                        <td class="text-right" colspan="3"><i class="fas fa-money-bill-wave"></i> Total Amount  =></td>
                        <td>{{$totallyAmount}} $</td>
                    </tr>
                        <tr>
                            <td class="text-left" colspan="5">
                            <a href="{{route('cancel.cart')}}" class="btn btn-outline-light"> Cancel </a>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="4" class="text-center text-light">Empty cart</td>
                        </tr>
                    @endif
                </table>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card bg-danger" style="color: white">
                    <div class="card-header">Customer Detail</div>
                    <div class="card-body">
                        <form action="{{route('post.checkout')}}" method="post">
                            <div class="form-group">
                                <label for="name">Customer Name</label>
                                <input required type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input required type="tel" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Adderss</label>
                                <input required type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Customer Address</label>
                                <textarea required type="text" name="address" id="address" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-light">Confirm</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop