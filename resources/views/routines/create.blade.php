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
    <form method="post" action="{{ route('routines.store') }}">
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

        
        <h3>Exercises</h3>
        
        <div class="form-group">
          <table class="table" id="tbl">
            <thead class="thead-dark">
              <th></th>
              <th>Exercise</th>
              <th>Targeting</th>
              <th></th>
            </thead>
            <tbody>

                <tr>
                  <td>{{$exerciseNumber += 1}}</td>
                  <td>
                    <select name="routineExercises[]" class="form-control" id="exerciseSelect">
                        @foreach ($exercises as $exercise)
                          <option value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>
                        @endforeach
                    </select>
                  </td>
                  <td>
                    @foreach( $exercise->categories as $category)
                      {{$category->category}}@if( !$loop->last), @endif 
                    @endforeach
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm" id="remove">Remove</button>
                  </td>
                </tr>
                <tr>
                  <td>{{$exerciseNumber += 1}}</td>
                  <td>
                    <select name="routineExercises[]" class="form-control" id="exerciseSelect">
                        @foreach ($exercises as $exercise)
                        
                          <option value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>
                        @endforeach
                    </select>
                  </td>
                  <td>
                    @foreach( $exercise->categories as $category)
                      {{$category->category}}@if( !$loop->last), @endif 
                    @endforeach
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm" id="remove">Remove</button>
                  </td>
                </tr>
                <tr>
                  <td>{{$exerciseNumber += 1}}</td>
                  <td>
                    <select name="routineExercises[]" class="form-control" id="exerciseSelect">
                        @foreach ($exercises as $exercise)
                          <option value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>
                        @endforeach
                    </select>
                  </td>
                  <td>
                    @foreach( $exercise->categories as $category)
                      {{$category->category}}@if( !$loop->last), @endif 
                    @endforeach
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm" id="remove">Remove</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
            
        <div class="">
          <button type="button" class="btn btn-primary" id="addExercise">Add exercise</button>
        </div>

        <br>

        <div class="d-flex justify-content-center">
            <button class="btn-lg btn-success" type="submit">Create routine!</button>
        </div>
      </form>
</div>

@endsection

@section('scripts')

  <script> 
  
    $(document).ready(function(){

      $('#addExercise').click(function () {
        $("#tbl").append('<tr><td>{{$exerciseNumber += 1}}</td><td><select class="form-control" id="exerciseSelect">@foreach ($exercises as $exercise)<option name="routineExercises[]" value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>@endforeach</select></td><td>@foreach( $exercise->categories as $category){{$category->category}}@if( !$loop->last), @endif @endforeach </td><td><button type="button" class="btn btn-danger btn-sm" id="remove">Remove</button></td></tr>');
      });

      $('body').on('click', '#remove', function () {
        $(this).closest('tr').remove(); 
      });

    });

  </script>
    
@endsection