@extends('layouts.admin')

@section('content')
    <h1>Dettagli Progetto</h1>
    <h2>Titolo: {{ $project->title }}</h2>
    <h3>Descrizione</h3>
    <p>{{ $project->content }}</p>
@endsection