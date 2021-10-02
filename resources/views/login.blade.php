@extends('master')
@section('Content')

<div class="container">
    <div class="form-login" style="alignment: center;color: white;background-color: #1c7430;position: center; padding:10px;margin:100px;;margin-left: 300px;height: 420px;width: 450px;text-align: center">

        <img src="https://www.almrsal.com/wp-content/uploads/2017/03/3.-Robert-Downey-Jr.jpg" style="width: 150px;height: 150px;border-radius: 60%;border: 2px solid white"  >
        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" style="width: 400px;margin-left: 10px">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" id="password" style="width: 400px;margin-left: 10px">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit"  >Login</button>
        </form>

</div>

</div>

    <script>



@endsection
