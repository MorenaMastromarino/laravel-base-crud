@extends('layouts.main')

@section('content')
  <div class="text-center mt-5">
    <h1>Errore 404</h1>
    <h5>{{ $exception->getMessage() }}</h5>

  </div>
  
@endsection