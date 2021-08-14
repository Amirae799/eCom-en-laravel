<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total=0;
if(Session::has('user')){
$total=ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="/">Ecomm</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Orders</a>
            </li>
            <li>
                <form class="form-inline" action="/search">
                    <input class="form-control mr-sm-2 search-box" type="text" name="query" placeholder="Search" style="width:1000px !important;">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>

            </li>
            <li><a href="#" style="color: whitesmoke;margin-left: 20px;margin-right: 60px">Cart({{$total}})</a> </li>
            @if(Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #1c7430">{{Session::get('user')['name']}}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout" style="padding: 20px;color: #1c7430">logout</a></li>
                </ul>
            </li>
            @else

                <li><a href="/login">login</a> </li>
            @endif
        </ul>
    </div>
</nav>


