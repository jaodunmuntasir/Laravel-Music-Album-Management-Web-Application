@extends('layouts.main')

@section('content')
<div class="container py-3">
      <h2>New track</h2>
      <form>
        
        <div class="mb-3">
          <label class="form-label" for="name">Track name</label>
          <input type="text" class="form-control" id="name" placeholder="">
          <div class="invalid-feedback">
            Please choose a track name.
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="file">Audio file</label>
          <input type="file" class="form-control" id="file" placeholder="">
          <div class="invalid-feedback">
            Some problem with the file.
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="color">Color</label>
          <input type="color" class="form-control form-control-color" id="color" placeholder="">
          <div class="invalid-feedback">
            Please choose a color.
          </div>
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