@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Create Routine</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
      </div>
      <br />
    @endif
    <form method="post" action="{{ route('routine.store') }}">
        @csrf
        <div class="form-group">
          <label for="routine-name">Routine name</label>
          <input name="routineName" type="" class="form-control" id="routineName">
        </div>
        <div class="form-group">
          <label for="routine-description">Routine description</label>
          <small>(Optional)</small>
          <textarea name="routine-description" class="form-control" id="routine-description" rows="3"></textarea>
        </div>

        <h3>Current Routine</h3>

        <table class="table" id="routine-table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Exercise</th>
                <th scope="col">Areas targeted</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td></td>
              </tr>
            </tbody>
  
          </table>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="exercisesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Add an exercise!
            </button>
            <div class="dropdown-menu" aria-labelledby="exercisesDropdown">
                @foreach ($exercises as $exercise)
                 <a class="dropdown-item" onclick="exerciseAdded('{{$exercise->exerciseName}}', '@foreach( $exercise->categories as $category){{$category->category}}@if( !$loop->last), @endif @endforeach')">{{$exercise->exerciseName}}</a>
                @endforeach
            </div>
          </div>
        <div class="d-flex justify-content-center">
            <button class="btn-lg btn-success" type="submit">Create routine!</button>
        </div>
      </form>
</div>

@endsection