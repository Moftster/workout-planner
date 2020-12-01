@extends('layouts.app')

@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{!! \Session::get('success') !!}</p>
    </div>
@endif

<h1>My Exercises</h1>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Exercise</th>
        <th scope="col">Body part</th>
        <th scope="col">Previous weight</th>
        <th scope="col">Previous reps</th>
        <th scope="col">Previous sets</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($exercises as $exercise) 
            <tr>
                <th scope="row">{{$exercise->exerciseName}}</th>
                <td>{{$exercise->exerciseCategory}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-success">View my records</button></td>
                <td><a href="{{route('exercises.edit', [$exercise->id])}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                <td>               
                  <form action="{{ route('exercises.destroy', ['id' => $exercise->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
                {{-- <td><a href="{{ route('exercises.destroy', [$exercise->id])}}"><button type="button" class="btn btn-danger">Delete</button></a></td> --}}
            </tr>
      @endforeach
    </tbody>
  </table>



<a href="{{route('exercise.create')}}"><button type="button" class="btn btn-primary">Create a new exercise</button></a>

@endsection