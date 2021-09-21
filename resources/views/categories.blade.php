@extends('components.layout');
@section('content')
    @foreach($category as $categories)
  <h1>{{$categories->name}} </h1>
@endsection
