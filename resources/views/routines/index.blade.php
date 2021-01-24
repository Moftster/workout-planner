@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <button class="btn-lg btn-primary">Start Workout!</button>
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
                <a href="#" class="btn btn-success">Select as current routine</a>
                <br>
                <br>
                <a href="#" class="btn-sm btn-warning">Edit</a>
                <a href="#" class="btn-sm btn-danger">Delete</a> 
                </div>
                <div class="card-footer text-muted">
                Last completed 2 days ago
                </div>
            </div>
          </div>

        @endforeach
    </div>

        <h3>My Routines</h3>
        <div class="d-flex justify-content-center">
            <a href="{{route('routines.create')}}"><button class="btn btn-primary">Create a New Workout Routine!</button></a>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card text-center">
                <h5 class="card-header">Full Body 1</h5>
                    <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-success">Select as current routine</a>
                    <br>
                    <br>
                    <a href="#" class="btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn-sm btn-danger">Delete</a> 
                    </div>
                    <div class="card-footer text-muted">
                    Last completed 2 days ago
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center">
                    <h5 class="card-header">Full Body 1</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-success">Select as current routine</a>
                        <br>
                        <br>
                        <a href="#" class="btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn-sm btn-danger">Delete</a> 
                    </div>
                    <div class="card-footer text-muted">
                    Last completed 2 days ago
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center">
                  <h5 class="card-header">Full Body 1</h5>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-success">Select as current routine</a>
                      <br>
                      <br>
                      <a href="#" class="btn-sm btn-warning">Edit</a>
                      <a href="#" class="btn-sm btn-danger">Delete</a> 
                    </div>
                    <div class="card-footer text-muted">
                    Last completed 2 days ago
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="card text-center">
                <h5 class="card-header">Full Body 1</h5>
                    <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-success">Select as current routine</a>
                    <br>
                    <br>
                    <a href="#" class="btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn-sm btn-danger">Delete</a> 
                    </div>
                    <div class="card-footer text-muted">
                    Last completed 2 days ago
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center">
                    <h5 class="card-header">Full Body 1</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-success">Select as current routine</a>
                        <br>
                        <br>
                        <a href="#" class="btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn-sm btn-danger">Delete</a> 
                    </div>
                    <div class="card-footer text-muted">
                    Last completed 2 days ago
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center">
                  <h5 class="card-header">Full Body 1</h5>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-success">Select as current routine</a>
                      <br>
                      <br>
                      <a href="#" class="btn-sm btn-warning">Edit</a>
                      <a href="#" class="btn-sm btn-danger">Delete</a> 
                    </div>
                    <div class="card-footer text-muted">
                    Last completed 2 days ago
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
