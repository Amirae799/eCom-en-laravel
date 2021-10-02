@extends('master')
@section('Content')
    <div class="custom-product"  >
        <div class="col-sm-10">
            <div class="trending-wrapper" >
                <h3>Orders List</h3>
                @foreach($orders as $item)
                    <div class="searched-item cart-list-devider" >
                        <div class="col-sm-3" >
                            <a href="detail/{{$item->id}}" style="color: #1c7430">
                                <img class="trending-img" src="{{$item->gallery}}"  >
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="" style="margin-left: 150px;">
                                <h3 >{{$item->name}}</h3>
                                <h5 >Delivery Status : {{$item->status}}</h5>
                                <h5 >Payment Status : {{$item->payment_status}}</h5>
                                <h5>Payment Method : {{$item->payment_method}}</h5>
                                <h5 >Delivery Address : {{$item->address}}</h5>
                            </div>
                        </div>

                    </div>
                    </div>
                @endforeach
            </div>


    </div>
@endsection


