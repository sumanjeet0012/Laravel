@extends('include_template3.layout')

@section('content')
    <h1>this is dynamic view</h1>
@endsection

@section('footer')
    <h1>this is a footer</h1>
    
@endsection

@section('section')
    @parent
    <h1>this is dynamically typed</h1>
@endsection