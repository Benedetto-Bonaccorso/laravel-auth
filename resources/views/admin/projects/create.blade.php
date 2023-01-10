<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>