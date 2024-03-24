@extends('layouts.main')

@section('content')
<div class="container py-3">
  <p>
    <a href="/projects/create" class="btn btn-secondary">Create a new project</a>
  </p>
  <div class="row align-items-start">

  @foreach ($projects as $project)
  <div class="col-6 col-sm-6 col-md-4 col-lg-3 my-3">
    <div class="card h-100">
      <img src="{{ $project -> image_url ?: "https://cdn.dribbble.com/users/12015/screenshots/2131050/apple_music.png"}}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $project -> name }}</h5>
        <p class="card-text">{{ $project -> description }}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a href="/projects/{{ $project -> id }}" class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>
  @endforeach
    
  </div>
</div>
@endsection
