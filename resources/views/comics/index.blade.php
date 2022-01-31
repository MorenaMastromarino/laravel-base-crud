@extends('layouts.main')

@section('content')
  <div class="container">

    <h1 class="mb-3">Comics List</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col">Type</th>
          <th colspan="3" scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)        
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->type}}</td>
            <td><a href="{{route('comics.show', $comic)}}" class="btn btn-success">SHOW</a></td>
            <td><a href="{{route('comics.edit', $comic)}}" class="btn btn-primary">EDIT</a></td>
            <td>
              <form onsubmit="return confirm('Vuoi eliminare {{$comic->title}} ?')"
                action="{{route('comics.destroy', $comic)}}"
                method="POST"
              >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
    
              </form>
            </td>
          </tr>

        @endforeach
        
      </tbody>
    </table>
    {{$comics->links()}}
  </div>
  

@endsection