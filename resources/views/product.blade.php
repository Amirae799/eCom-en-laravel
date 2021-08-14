@extends('master')
@section('Content')
<div class="custom-product"  >
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

                @foreach($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block" style="background-color:#1a202c;" >
                    <h3 >{{$item['name']}}</h3>
                    <p >{{$item['description']}}</p>

                </div>
                    </a>
            </div>

            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="trending-wrapper" style="margin: 20px">
<h2 style="color: #1c7430">Trending Products</h2>
        @foreach($products as $item)
            <div class="trending-item" >
                <a href="detail/{{$item['id']}}" style="color: #1c7430">
                <img class="trending-img" src="{{$item['gallery']}}" style="margin-left: 10px" >

                <h2 style="margin-left: 70px;size: 20px">{{$item['name']}}</h2>
                </a>
        </div>
</div>
@endforeach
    </div>


@endsection
