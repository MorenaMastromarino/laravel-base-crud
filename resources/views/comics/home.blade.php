@extends('layouts.main')

@section('content')
  <h1>Comics List</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Type</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)        
        <tr>
          <th scope="row">{{$comic->id}}</th>
          <td>{{$comic->title}}</td>
          <td>{{$comic->price}}</td>
          <td>{{$comic->type}}</td>
          <td><a href="#" class="btn btn-success">SHOW</a></td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
  {{$comics->links()}}

@endsection