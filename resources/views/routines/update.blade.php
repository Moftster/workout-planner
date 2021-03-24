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
              <th>№</th>
              <th>Exercise name</th>
              <th>Muscles targeted</th>
            </tr>
          </thead>
          @foreach ($routine->exercises as $exercise)
            <tbody class="sortable">
              <tr data-id="{{ $exercise->id }}" class="exercise">
                  {{-- <td>{{$exercise->id}}</td> --}}
                  <td>{{$exercise->pivot->id}}</td>
                  <td>{{$exercise->exerciseName}}</td>
                  <td>
                    @foreach ($exercise->categories as $category)
                      {{$category->category}}@if( !$loop->last), @endif
                    @endforeach  
                  </td>  
              </tr>    
            </tbody>
          @endforeach
        </table>
      </div>
      <ul>
      </ul>

      <a href="{{ route('showexercisetoroutine', $routine->id) }}">
        <button type="button" class="btn btn-success" href="">Add an exercise</button>
      </a>

      <form action="{{route('routines.destroy', [$routine->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to permanently delete this routine?')">Delete this routine</button>
      </form>

      <br>
      <br>

      <button type="submit" class="btn btn-primary">Update routine</button>

    </form>

{{-- </div> --}}
@endsection

@section('scripts')

  <script> 
  
    $(document).ready(function(){

      console.log('jquery hooked up');

      // var $exercises = $('.sortable');

      $('.sortable').sortable();

    });

  </script>
    
@endsection