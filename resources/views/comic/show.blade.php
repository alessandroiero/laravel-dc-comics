@extends('layout.app')

@section('page.title')
    <div class="container">
        Nome Fumetto: {{ $comic->title }}
    </div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <img class="rounded" src="{{ $comic->thumb }}" alt="{{ $comic->title}}">
    </div>
    <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna indietro</a>
    {{-- {!! $comics->description !!} possiamo inserire un dato invece che con 2 graffe anche con graffa + !! --}}
</div>

@endsection