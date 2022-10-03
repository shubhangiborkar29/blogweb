<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> Blog Table</h2>
  @if(session()->has('msg'))
  <div class="alert alert-success">
      {{session()->get('msg')}}
</div>
@endif

<a href="{{route('admin.blog.create')}}"> <button class="btn btn-success">Add</button></a>
  <table class="table">
    <thead>
      <tr>
      <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
      <tr>
      <td>{{$d->id}}</td>
        <td>{{$d->title}}</td>
        <td>{!!$d->description!!}</td>

        <td><img src="{{asset('uploads/'.$d->image)}}" width="50px" height="50px" alt=""></td>

        <td><a href="{{route('admin.blog.edit',$d->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
        <a href="{{route('admin.blog.delete',$d->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$data->links()}}
</div>

</body>
</html>
