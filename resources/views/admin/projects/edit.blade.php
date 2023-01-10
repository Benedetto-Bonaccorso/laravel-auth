<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>