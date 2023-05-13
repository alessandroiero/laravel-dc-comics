@extends('layout.app')

@section('page.title')
  <div class="container">
    Modifica dati fumetto: {{ $comic->titolo }}
  </div>
@endsection

@section('page.main')

  <div class="container">
      {{-- il form dovrà sempre avere il metodo POST perchè invierà dei dati --}}
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
      {{-- csrf sempre obbligatorio da inserire --}}
        @csrf
        @method('PUT')
      {{-- titolo --}}
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title}}">
        </div>
      {{-- /titolo --}}

      {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="3" name="description"> {{ strip_tags( $comic->description ) }} </textarea>
        </div>
      {{-- /descrizione --}}

      {{-- Immagine --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb}}">
        </div>
      {{-- /Immagine --}}

      {{-- Prezzo --}}
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price}}">
        </div>
      {{-- /Prezzo --}}
      
      {{-- Serie --}}
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series}}">
        </div>
      {{-- /serie --}}

        <button type="submit" class="btn btn-primary">Crea</button>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna Indietro</a>
    </form>
  </div>
@endsection
