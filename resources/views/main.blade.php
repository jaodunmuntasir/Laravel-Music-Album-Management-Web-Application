@extends('layouts.main')

@section('content')
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-4 fw-bold">MyTracks</h1>
    <p class="col-md-8 fs-4">A place where you can store, edit and view your music projects.</p>
    <p class="col-md-8 fs-4">We have {{ $numberOfProjects }} projects so far.</p>
    <a class="btn btn-primary btn-lg" type="button" href="#">Learn more</a>
  </div>
</div>
@endsection