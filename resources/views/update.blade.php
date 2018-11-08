@extends('layouts.base')

@section('title', 'Home')

@section('content')
  <h1>update one serie</h1>
  <form class="" action="/updateserieaction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $serie->id }}">
    <input required type="text" name="title" value="{{ $serie->title }}">
    <input required type="number" name="publication_year" value="{{ $serie->publication_year }}">
    <select class="" name="actors">
      @foreach($actors as $actor)
        <option @php $actor->id == $serie->actors[0]->id ? 'selected' : ''; @endphp value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
      @endforeach
    </select>
    <select class="" name="genres">
      @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
      @endforeach
    </select>
    <input type="submit" name="" value="Insert">
  </form>
@endsection
