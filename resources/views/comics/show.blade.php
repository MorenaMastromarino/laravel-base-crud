@extends('layouts.main')

@section('content')
  <h1>{{$comic->title}}</h1>
  <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
  <p><strong>Series: </strong>{{$comic->series}}</p>
  <p><strong>Sale date: </strong>{{$comic->sale_date}}</p>
  <p><strong>Type: </strong>{{$comic->type}}</p>
  <p><strong>Price: </strong>{{$comic->price}}</p>
  <h5>Description:</h5>
  <p>{{$comic->description}}</p>

  <a href="{{route('comics.index')}}"><< back</a>
@endsection