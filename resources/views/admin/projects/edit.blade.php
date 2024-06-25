@extends('layouts.admin')

@section('content')
<H1>Modifica Progetto</H1>
<form action="{{ route('admin.projects.update', ['project'=>$project->slug]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo Progetto</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Descrizione</label>
        <textarea class="form-control" id="content" rows="3" name="content">
            {{ $project->content }}
        </textarea>
      </div>
      <button class="btn btn-success" type="submit">Salva Modifiche</button>
</form>
@endsection