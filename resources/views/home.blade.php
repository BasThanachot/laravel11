@extends('layout.app')

@section('title', 'Home') 
<!-- Home จะใส่อยู่ที่ yield('title') ใน layout-->

@section('sidebar')
     {{-- @parent section ใน layout  --}}

    <p>Home Sidebar</p>
@endsection

@section('content')
    <p>Home Content</p>
@endsection