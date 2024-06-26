@extends('layouts.main')

@section('content')

<div class="container py-3">
    <h2>{{ $project -> name }}</h2>
    <p>{{ $project -> description }}</p>
    <p>
    <a href="{{ route("projects.tracks.create", ["project" => $project -> id]) }}" class="btn btn-primary">Add new track</a>
    
    <form action="{{ route("projects.destroy", ["project" => $project -> id]) }}" method="POST" class="d-inline">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">Delete Project</button>
    </form>
    <a href="/projects/{{ $project -> id }}/edit" class="btn btn-secondary">Edit Project</a>
    </p>
    
    <div class="list-group">

        @foreach($project->tracks as $track)
        <a href="#" class="list-group-item list-group-item-action" style="background-color: {{ $track->color }}">
            <p class="d-flex justify-content-between align-items-center">
            <span> 
                {{ $track->name }} 
                <small>{{ $track->filename }}</small>
            </span>
            <span class="badge badge-primary badge-pill">Muted</span>
            </p>
            <ul class="list-group list-group-horizontal">
            <li class="list-group-item p-1">Cras justo odio</li>
            <li class="list-group-item p-1">Dapibus ac facilisis in</li>
            <li class="list-group-item p-1">Morbi leo risus</li>
            </ul>
        </a>
        @endforeach
    </div>
</div>

@endsection