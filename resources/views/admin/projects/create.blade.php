@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="py-2 bg-warning my-2">
            @foreach ($errors->all() as $error)
                <p class="mx-5 mt-4">{{ $error }}</p>
            @endforeach
    </div>
@endif

<form action="{{route('projects.store')}}" method="post">
        @csrf
        
        <label for="title">title</label>
        <input type="text" title="title" name="title" id="title" value="{{old('title')}}">
        <label for="author">author</label>
        <input type="text" title="author" name="author" id="author" value="{{old('author')}}">
        <label for="deadline">deadline</label>
        <input type="text" title="author" name="deadline" id="deadline" value="{{old('deadline')}}">

        <button type="submit">send</button>

    </form>
@endsection