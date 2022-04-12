@extends('layouts.frontbase')
 
@section('title', 'Title from sub file')
 
@section('sidebar')
    @parent
 
    <p>This appended from subfile</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
@endsection