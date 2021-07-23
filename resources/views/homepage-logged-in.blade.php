@extends('layouts.app')

@section('content')

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <main role="main" class="inner cover">
      <h1 class="cover-heading">My Workout Planner</h1>
      <p class="lead">Build your own workout plan and use the power of AI to get the best results from your exercise regime.</p>
      <p class="lead">
        <a href="{{ route('routines.index') }}" class="btn btn-primary btn-lg">Go to your workouts!</a>
      </p>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Designed and developed in the United Kingdom by <a href="https://chillaweb.com/">Chillaweb</a></p>
      </div>
    </footer>
  </div>


@endsection