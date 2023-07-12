<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-6">
            <h1>All Users Data List</h1>

           <a href="/newuser" class="btn btn-success btn-sm mb-3">Add new</a>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                @foreach ($data as $id=>$user )
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->city}}</td>
                    <td><a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                    <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    <td><a href="{{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                </tr>
                @endforeach
            </table>
           </div>
        </div>
    </div>
</body>
</html>


{{-- <h1>All Users Data List</h1>
@foreach ($data as $id=>$user )
    <h3>
        {{$user->name}} |
        {{$user->email}} |
        {{$user->age}} |
        {{$user->city}} |
    </h3>
@endforeach --}}
