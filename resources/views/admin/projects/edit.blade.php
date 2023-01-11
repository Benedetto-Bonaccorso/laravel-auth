@extends('layouts.app')

@section('content')
<form action="{{route('projects.update', $project->id)}}" method="post">
        @csrf
        @method("put")
        <label for="title">title</label>
        <input type="text" name="title" id="title" value="{{$project->title}}">
        <label for="author">author</label>
        <input type="text" name="author" id="author" value="{{$project->author}}">
        <label for="deadline">deadline</label>
        <input type="text" name="deadline" id="deadline" value="{{$project->deadline}}">

        <button type="submit">send</button>

    </form>
@endsection