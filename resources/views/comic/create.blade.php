@extends('layout.app')

@section('page.title')
  <div class="container">
    Inserisci un nuovo Fumetto
  </div>
@endsection

@section('page.main')

  <div class="container">
      {{-- il form dovrà sempre avere il metodo POST perchè invierà dei dati --}}
    <form action="{{ route('comics.store') }}" method="POST">
      {{-- csrf sempre obbligatorio da inserire --}}
        @csrf
      {{-- titolo --}}
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
      {{-- /titolo --}}

      {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
      {{-- /descrizione --}}

      {{-- Immagine --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
      {{-- /Immagine --}}

      {{-- Prezzo --}}
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
      {{-- /Prezzo --}}
      
      {{-- Serie --}}
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
      {{-- /serie --}}

        <button type="submit" class="btn btn-primary">Crea</button>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna Indietro</a>
    </form>
  </div>
@endsection
