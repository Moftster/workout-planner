@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Create Routine</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <p class="text-center">{{ $error }}</p>
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
              <th>№</th>
              <th>Exercise</th>
              <th></th>
            </thead>
            <tbody>

                <tr>
                  <td class="number"></td>
                  <td>
                    <select name="routineExercises[]" class="form-control" id="exerciseSelect">
                        <option selected value="">--- Select an Exercise ---</option>
                        @foreach ($exercises as $exercise)
                          <option value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>
                        @endforeach
                    </select>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm float-right" id="remove">Remove</button>
                  </td>
                </tr>
                <tr>
                  <td class="number"></td>
                  <td>
                    <select name="routineExercises[]" class="form-control" id="exerciseSelect">
                        <option selected value="">--- Select an Exercise ---</option>
                        @foreach ($exercises as $exercise)
                          <option value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>
                        @endforeach
                    </select>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm float-right" id="remove">Remove</button>
                  </td>
                </tr>
                <tr>
                  <td class="number"></td>
                  <td>
                    <select name="routineExercises[]" class="form-control" id="exerciseSelect">
                        <option selected value="">--- Select an Exercise ---</option>
                        @foreach ($exercises as $exercise)
                          <option value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>
                        @endforeach
                    </select>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm float-right" id="remove">Remove</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
            
        <div class="d-flex justify-content-center">
          <button type="button" class="btn btn-primary" id="addExercise">Add another exercise</button>
        </div>

        <br>

        <div class="d-flex justify-content-center">
            <button id="createRoutine" class="btn-lg btn-success" type="submit">Create routine!</button>
        </div>
      </form>
</div>

@endsection

@section('scripts')

  <script> 
  
    $(document).ready(function(){

      function calculateRowNumber() {
        $('#tbl .number').each(function(base) {
            base ++;
            $(this).text(base);
        })
        };
      
      $('#addExercise').click(function () {
        $("#tbl").append('<tr><td class="number"></td><td><select class="form-control" id="exerciseSelect"><option selected>--- Select an Exercise ---</option>@foreach ($exercises as $exercise)<option name="routineExercises[]" value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>@endforeach</select></td><td><button type="button" class="btn btn-danger btn-sm float-right" id="remove">Remove</button></td></tr>');
        calculateRowNumber();
      });

      $('body').on('click', '#remove', function () {
        $(this).closest('tr').remove(); 
        calculateRowNumber();
      });
  
      $('#createRoutine').click(function() {

        var numberOfExercises = 0;

        $('select').each(function() {

          numberOfExercises++;
            
          var value = $(this).find(":selected").text();
          
          // if(value.isEmptyObject({})){
          //   event.preventDefault();
          //   alert('At least one exercise must be included in a routine.');
          //   return false;
          // }
          if (value == '--- Select an Exercise ---') {
            event.preventDefault();
            alert('Please remove any unselected exercise entries below');
            return false;
            };
          });
          function calculateRowNumber() {
            $('#tbl .number').each(function(base) {
            base ++;
            $(this).text(base);
            })
          };

          if(numberOfExercises === 0) {
            event.preventDefault();
            alert('At least one exercise must be included in the routine');
            return false;
          }
        });

        calculateRowNumber();
    });

  </script>
    
@endsection