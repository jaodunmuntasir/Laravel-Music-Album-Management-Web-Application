@extends('layouts.main')

@section('content')
<div class="container py-3">
      <h2>New track</h2>

      <form action="{{ route('projects.tracks.store', ["project" => $project -> id]) }}" method="POST">
        
      @csrf
        <div class="mb-3">
          <label class="form-label" for="name">Track name</label>
          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="">
          @error('name')
            <div class="invalid-feedback">
              Please choose a Track Name
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="file">Audio file</label>
          <input name="filename" type="file" class="form-control @error('filename') is-invalid @enderror" id="file" placeholder="">
          @error('filename')
            <div class="invalid-feedback">
              There's a problem with the file
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="color">Color</label>
          <input name="color" type="color" class="form-control form-control-color @error('color') is-invalid @enderror" id="color" placeholder="">
          @error('color')
            <div class="invalid-feedback">
              Please choose a Color
            </div>
          @enderror
        </div>

        <label class="form-label">Filters</label>
        <div class="mb-3 d-flex flex-wrap row-gap-3 column-gap-3">
          <div>
            <input type="checkbox" class="btn-check" id="btn-check-outlined1" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btn-check-outlined1">Filter1</label>
          </div>
          <div>
            <input type="checkbox" class="btn-check" id="btn-check-outlined2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btn-check-outlined2">Filter2</label>
          </div>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Add new track</button>
        </div>

      </form>
    </div>

@endsection