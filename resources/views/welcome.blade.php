@extends('layouts.master')

@extends('includes.header')

@section('title')
    Welcome!!
@endsection

@section('content')
    @if(count($errors)>0)
        <div class="row-fluid">
            <table>
                @foreach($errors->all() as $error)
                    <td style="font-size: small; color: red; border-left: 5px solid  ">&nbsp;{{$error}}&nbsp;</td>
                @endforeach
            </table>

        </div>
    @endif

    <div class="row-fluid">

        <div class="col-md-6">
            <h4>Sign in</h4>
            <form action="{{route('singnIn')}}">
                <input class="{{$errors->has('name')?'alert-danger':''}}" name="name" type="text" placeholder="Name" value="{{old('name')}}"></input><br/><br/>
                <input class="{{$errors->has('name')?'alert-danger':''}}" name="password" type="password" placeholder="Password"></input><br/><br/>
                <input type="hidden" name="_token" value="{{Session::token()}}"/>
                <button type="submit">Sign in</button>
            </form>
        </div>

        <div class="col-md-6">
            <h4>Sign Up</h4>
            <form action="{{route('signUp')}}" method="post">
                <input class="{{$errors->has('name')?'alert-danger':''}}" name="name" type="text" placeholder="Name" value="{{old('name')}}"><br/><br/>
                <input class="{{$errors->has('address')?'alert-danger':''}} name="address" type="text" placeholder="Address" value="{{old('address')}}"></input><br/><br/>
                <input class="{{$errors->has('password')?'alert-danger':''}} name="password" type="password" placeholder="New Password"></input><br/><br/>
                <input class="{{$errors->has('C_password')?'alert-danger':''}} name="C_password" type="password" placeholder="Confirm Password"></input><br/><br/>
                <input type="hidden" name="_token" value="{{Session::token()}}"/>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection