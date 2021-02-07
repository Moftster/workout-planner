@extends('layouts.app')

@section('content')
<div class="container">

<h3>Update Routine</h3>

@if ($errors->any())
<div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <p class="text-center">{{ $error }}</p>
      @endforeach
</div><br />
@endif

<form method="post" action="{{ route('routines.update', $routine->id) }}">
  @method('PATCH') 
  @csrf
  <div class="form-group">
    <label>Routine Name</label>
    <input type="text" class="form-control" id="routineName" name="routineName" value="{{ $routine->routineName }}">
  </div>
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" id="routineDescription" name="routineDescription" value="{{ $routine->routineDescription }}">
  </div>
  <div class="card">
      <table class="table">
          <thead>
              <tr>
                  <th>Exercise name</th>
                  <th>Bodypart</th>
                  <th></th>
              </tr>
          </thead>
          @foreach ($routine->exercises as $exercise)
            <tr>
                <td>{{$exercise->exerciseName}}</td>
                <td></td>  
                <td>
                    {{-- <form action="{{ route('routines.destroy', ['id' => $routine->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form> --}}
                    <button class="btn-sm btn-danger float-right" type="submit">Remove</button>

                </td>
            </tr>    
          @endforeach
      </table>
  </div>
  <ul>
  </ul>

  {{-- <div class="form-group"> --}}
    {{-- <label for="exerciseCategory">Bodypart</label> --}}
    {{-- @foreach ($exerciseCategories as $exerciseCategory)
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="{{$exerciseCategory->category}}" name="exerciseCategory[]" id="{{$exerciseCategory->category}}" @if (in_array($exerciseCategory->category, $selectedExercises)) checked @endif >
        <label class="form-check-label" for="{{$exerciseCategory->category}}">
          {{$exerciseCategory->category}}
        </label>
      </div>
      @endforeach --}}
    {{-- </select> --}}
      <button type="submit" class="btn btn-primary">Update routine</button>
  </form>

{{-- </div> --}}
@endsection