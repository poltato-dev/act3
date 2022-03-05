@extends('layouts.mainlayout')
@section('title', 'Create')
@section('content')
<h1> create new record </h1>
    <form action="/records" action="POST">
        @csrf
        lastname :     <input type="text" name="lastname" id="lastname" value="{{$post['lastname']}}" /> <br>
        firstname :    <input type="text" name="firstname" id="firstname" value="{{$post['firstname']}}" /> <br>
        birthday :    <input type="date" name="birthday" id="birthday"  value="{{$post['birthday']}}"/> <br>
        <input type="submit" value="save" />
    </form>
 
@endsection