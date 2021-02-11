@extends('master')
@section('content')
<div class="container " style="    height: 73vh;
    display: flex;
    flex-direction: column;
    justify-content: center;">
<div class="row">
    <div class="col-md-4">
        </div>
            <div class="col-md-4">
                <form method="post" action="register">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                
                <button type="submit" class="btn btn-default">Register</button>
                </form>
            </div>
        <div class="col-md-4">
        </div>
        </div>
    </div>
</div>
@endsection