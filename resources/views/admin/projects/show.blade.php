@extends('layouts.app')

@section('content')
    <div class="project-info py-4">
        <h1 class="m-2">Project ID: {{$project->id}}</h1>
        <h3 class="m-2">Project Title: {{$project->title}}</h3>
        <h3 class="m-2">Project Author: {{$project->author}}</h3>
        <h3 class="m-2">Project Deadline: {{$project->deadline}}</h3>
    </div>
@endsection