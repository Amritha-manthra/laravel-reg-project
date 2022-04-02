<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>All Registrations:</h1>
    <a href="{{url('/')}}" class="btn btn-primary">Add Registration</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Adminssion Grade</th>
      <th scope="col">Age</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($datas as $data)
    <tr>

      <td>{{$data['full name']}}</td>
      <td>{{$data['grade to which admission seeking']}}</td>
      <td>{{$data['age']}}</td>
      <td class="row">
          <a href="details/{{$data['id']}}" class="col-md-3 btn btn-success m-3">View</a>
          <a class="col-md-3 btn btn-info m-3">Edit</a>
          <a href="delete/{{$data['id']}}" class="col-md-3 btn btn-danger m-3">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</body>
</html>