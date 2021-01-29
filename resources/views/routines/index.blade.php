@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <a href="{{route('routines.create')}}"><button class="btn-lg btn-primary">Create a New Routine!</button></a>
    </div>

    <br>

    <h3>Current Routine</h3>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Exercise</th>
            <th scope="col">Bodypart</th>
            <th scope="col">Previous weight</th>
            <th scope="col">Previous Set</th>
            <th scope="col">Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Press-up</th>
            <td>8</td>
            <td>8</td>
            <td>9</td>
          </tr>
          <tr>
            <th scope="row">Bodyweight Squat</th>
            <td>8</td>
            <td>8</td>
            <td>9</td>
          </tr>
          <tr>
            <th scope="row">Sit Up</th>
            <td>8</td>
            <td>8</td>
            <td>9</td>
          </tr>
        </tbody>
      </table>

      <br>
      <br>

      <h2>My Routines</h2>

      <div class="row">

        @foreach($routines as $routine)
          <div class="col-sm-4">
            <div class="card text-center">
            <h5 class="card-header">{{$routine->routineName}}</h5>
                <div class="card-body">
                <p class="card-text">{{$routine->routineDescription}}</p>
                <ul class="list-group">
                @foreach ($routine->exercises as $exercise)
                  <li class="list-group-item">{{$exercise->exerciseName}}@if( !$loop->last), @endif</li>
                @endforeach
                </ul>
                <a href="#" class="btn btn-success">Select as current routine</a>
                <br>
                <br>
                <a href="{{route('routines.edit', [$routine->id])}}" class="btn-sm btn-warning">Edit</a>
                <a href="#" class="btn-sm btn-danger">Delete</a> 
                </div>
                <div class="card-footer text-muted">
                Last completed 2 days ago
                </div>
            </div>
          </div>

        @endforeach
    </div>
</div>
@endsection
