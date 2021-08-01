@extends('master')
@section('Content')
<div class="container">
    <div class="form" style="color:white ;text-align: center;background-color: #007bff;
    padding:10px;margin:100px;width:500px;height:500px">
        <img src="E:\xampp\htdocs\ecomm_en\resources\views\im1.jpg" style="border:white;width: 130px;height: 130px;border-style: groove;margin: 20px">
        <form action="/action_page.php">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #2a2a2a">Submit</button>
        </form>

</div>

</div>

    <script>



@endsection
