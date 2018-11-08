@extends('layouts.base')

@section('title', 'Home')

@section('content')
  <h1>Add one serie</h1>
  <form class="" action="/insertserie" method="post">
    @csrf
    <input required placeholder="Title" type="text" name="title" value="">
    <input required placeholder="0000" type="number" name="publication_year" value="">
    <select multiple class="" name="actors[]">
      @foreach($actors as $actor)
        <option value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
      @endforeach
    </select>
    <select multiple class="" name="genres[]">
      @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
      @endforeach
    </select>

    <input type="submit" name="" value="Insert">
  </form>
@endsection
