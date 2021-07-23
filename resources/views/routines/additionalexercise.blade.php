@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Add additional exercise</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <p class="text-center">{{ $error }}</p>
            @endforeach
      </div>
      <br />
    @endif
    <form method="post" action="{{ route('additionalexercise.store') }}">
        @method('PATCH') 
        @csrf

        <div class="form-group">
          <table class="table" id="tbl">
            <thead class="thead-dark">
              <th>Position</th>
              <th>Exercise</th>
              <th></th>
            </thead>
            <tbody>
                <tr>
                  <td class="number">
                    <select name="routineExercisePosition" class="form-control" id="exercisePosition">
                      <option selected value="">--- Select Position ---</option>
                      <option selected value="2">1</option>
                      <option selected value="1">2</option>
                      <option selected value="3">3</option>
                      <option selected value="4">4</option>
                      <option selected value="5">5</option>
                  </select>

                  </td>
                  <td>
                    <select name="routineExercise" class="form-control" id="exerciseSelect">
                        <option selected value="">--- Select an Exercise ---</option>
                        @foreach ($exercises as $exercise)
                          <option value="{{$exercise->id}}">{{$exercise->exerciseName}}</option>
                        @endforeach
                    </select>
                  </td>
                </tr>
                <input type="hidden" name="routineId" value="{{$id}}">
              </tbody>
            </table>
          </div>
        <br>
        <div class="d-flex justify-content-center">
            <button id="createRoutine" class="btn-lg btn-success" type="submit">Add exercise to routine!</button>
        </div>
      </form>
</div>

@endsection