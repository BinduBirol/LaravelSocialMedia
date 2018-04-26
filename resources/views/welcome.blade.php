@extends('layouts.master')
@extends('layouts.sub')
@extends('includes.header')

@section('title')
    Welcome!!
@endsection

@section('content')
    <div class="row-fluid">

        <div class="col-md-6">
            <h4>Sign in</h4>
            <form>
                <input type="text" placeholder="ID"></input><br/><br/>
                <input type="password" placeholder="Password"></input><br/><br/>
                <button type="submit">Sign in</button>
            </form>
        </div>

        <div class="col-md-6">
            <h4>Sign Up</h4>
            <form action="{{route('signUp')}}" method="post">
                <input name="name" type="text" placeholder="Name"><br/><br/>
                <input name="address" type="text" placeholder="Address"></input><br/><br/>
                <input name="password" type="password" placeholder="New Password"></input><br/><br/>
                <input name="C_password" type="password" placeholder="Confirm Password"></input><br/><br/>
                <input type="hidden" name="_token" value="{{Session::token()}}"/>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection