@extends('layouts.main')

@section('content')
<div class="container py-3">
  <h2>Edit project</h2>
  <form action="{{ route("projects.update", ["project" => $project -> id]) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label class="form-label" for="name">Project name</label>
      <input name="name" value="{{ old('name', $project -> name) }}" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="">
      @error('name')
      <div class="invalid-feedback">
        Please choose a Project Name.
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label class="form-label" for="description">Description</label>
      <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ old('description', $project -> description) }}</textarea>
      @error('description')
      <div class="invalid-feedback">
        Please input a description.
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label class="form-label" for="image_url">Background image URL</label>
      <input name="image_url" value="{{ old('image_url', $project -> image_url) }}" type="text" class="form-control @error('image_url') is-invalid @enderror" id="image_url" placeholder="">
      @error('image_url')
      <div class="invalid-feedback">
        Please input a valid URL.
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Update project</button>
    </div>

  </form>
</div>
@endsection