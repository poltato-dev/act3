@extends('layouts.mainlayout')
@section('title','show')
@section('content')
 
        <h1>{{$post['lastname']}}</h1>
        <hr>
       <p>{{ $post['firstname']}}</p>
        <br/>
        <p>{{ $post['birthday']}}</p>
        <br/>
    @if ($post['isnewstudent'])
        <span>This is a new student </span>
    @endif
    <span>This is a old student </span>
 
@endsection