@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Routine</h3>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Exercise</th>
            <th scope="col">Set 1</th>
            <th scope="col">Set 2</th>
            <th scope="col">Set 3</th>
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
      
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary">Workout Complete</button>
      </div>

      <br>
      <br>

      <h3>Exercises</h3>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        <button class="btn btn-success">Add Exercise</button>
      </div>
</div>
@endsection
