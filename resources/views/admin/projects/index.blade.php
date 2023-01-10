<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Index</h1>
    
    <h1><a href="{{route('projects.create')}}" class="btn">crea elementi</a></h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">author</th>
                    <th scope="col">deadline</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr class="">
                        <td scope="row">{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->author}}</td>
                        <td>{{$project->deadline}}</td>
                        <td>View    
                            
                            <a href="{{route('projects.edit', $project->id)}}">Edit</a>                             
                        
                            <form action="{{route('projects.destroy', $project->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>