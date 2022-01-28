@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Edit di {{$comic->title}}</h1>
    <form action="{{route('comics.update', $comic)}}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$comic->title}}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id="description">{{$comic->description}}</textarea>
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb" value="{{$comic->thumb}}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price" value="{{$comic->price}}">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" name="series" id="series" value="{{$comic->series}}">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" name="type" id="type" value="{{$comic->type}}">
      </div>
      
      
      <button type="submit" class="btn btn-success">EDIT</button>
      <button type="reset" class="btn btn-primary">RESET</button>
    </form>
  </div>
@endsection