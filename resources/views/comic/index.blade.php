@extends('layout.app')

@section('page.title')
  <div class="container">
      Elenco Fumetti
  </div>
@endsection

@section('page.main')

  <div class="container">
    <a href="{{ route('comics.create') }}" class="btn btn-success">Inserisci nuovo fumetto</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale date</th>
            <th scope="col">Type</th>
            <th scope="col">Artists</th>
            <th scope="col">Writers</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
              <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->artists }}</td>
                <td>{{ $comic->writers }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Specifiche Dettagli</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        {{-- csrf sarà sempre obbligatorio --}}
                        {{-- aggiungiamo il metodo --}}
                        @method('DELETE')
                        <input type="submit" value="Cancella" class="btn btn-danger btn-sm">
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
  </div>

@endsection