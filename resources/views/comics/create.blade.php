@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Create</h1>
    {{-- stampo lista degli errorri --}}
    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
          @endforeach
        </ul>
      </div>      
    @endif

    <form action="{{route('comics.store')}}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" 
          class="form-control @error('title') is-invalid @enderror"
          value="{{old('title')}}"
          name="title" id="title"
          placeholder="Inserisci titolo"
        >
        @error('title')
          <div id="title" class="invalid-feedback">
            {{$message}}
          </div>          
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" 
          class="form-control  @error('description') is-invalid @enderror"
          value="{{old('description')}}"
          id="description">
        </textarea>

        @error('description')
          <div id="description" class="invalid-feedback">
            {{$message}}
          </div>          
        @enderror 
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" 
          class="form-control  @error('thumb') is-invalid @enderror" 
          value="{{old('thumb')}}"
          name="thumb" id="thumb" 
          placeholder="Inserisci url dell'immagine"
        >
        @error('thumb')
          <div id="thumb" class="invalid-feedback">
            {{$message}}
          </div>          
        @enderror 
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" 
          class="form-control @error('price') is-invalid @enderror"
          value="{{old('price')}}"
          name="price" id="price"
          placeholder="Inserisci prezzo"
        >
        @error('price')
          <div id="price" class="invalid-feedback">
            {{$message}}
          </div>          
        @enderror 
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" 
          class="form-control  @error('series') is-invalid @enderror"
          value="{{old('series')}}"
          name="series" id="series"
          placeholder="Inserisci serie"
        >
        @error('series')
          <div id="series" class="invalid-feedback">
            {{$message}}
          </div>          
        @enderror 
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="text" 
          class="form-control  @error('sale_date') is-invalid @enderror" 
          value="{{old('sale_date')}}"
          name="sale_date" id="sale_date"
          placeholder="Inserisci data"
        >
        @error('sale_date')
          <div id="sale_date" class="invalid-feedback">
            {{$message}}
          </div>          
        @enderror 
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" 
          class="form-control  @error('type') is-invalid @enderror"
          value="{{old('type')}}"
          name="type" id="type"
          placeholder="Inserisci tipo"
        >
        @error('type')
          <div id="type" class="invalid-feedback">
            {{$message}}
          </div>          
        @enderror 
      </div>
      

      <button type="submit" class="btn btn-success">CREA</button>
      <button type="reset" class="btn btn-primary">RESET</button>
    </form>
  </div>
@endsection