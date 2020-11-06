@extends('layouts.app')

@section('content')

<h1>Update exercise</h1>

@if ($errors->any())
<div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
</div><br />
@endif

<form method="post" action="{{ route('exercise.update', $exercise->exerciseName) }}">
  @method('PATCH') 
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Exercise Name</label>
    <input type="text" class="form-control" id="exerciseName" name="exerciseName" value={{ $exercise->name }}>
  </div>
  
  {{-- Loop through exercise categries --}}
  
  <div class="form-group">
    <label for="exerciseCategory">Bodypart</label>
      @foreach ($exerciseCategories as $exerciseCategory)
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="{{$exerciseCategory->category}}" name="exerciseCategory[]" id="{{$exerciseCategory->category}}">
        <label class="form-check-label" for="{{$exerciseCategory->category}}">
          {{$exerciseCategory->category}}
        </label>
      </div>
      @endforeach
    </select>
    <small id="categoryHelp" class="form-text text-muted">Select the bodypart/s this exercise will target.</small>
  </div>
  <button type="submit" class="btn btn-primary">Update exercises</button>

    {{-- Conditionally add another body part category --}}

  </form>

@endsection