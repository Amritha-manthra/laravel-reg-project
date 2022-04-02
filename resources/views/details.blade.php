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
<div class="container">
<table class="table">
@foreach($datas as $data)

<div>
    <h1>{{$data['full name']}}</h1>
    <a href='{{url("/admin")}}' class="btn btn-info">Back</a>
</div>


    
  <tbody>
      
    <tr>
      <td><strong>where did you heared about us</strong></td>
      <td>
          {{($data['website']==1)?'website':''}},
          {{($data['advertisement']==1)?',advertisement':''}}
          {{($data['social media']==1)?',social media':''}}
          {{($data['radio']==1)?',radio':''}}
          {{($data['television']==1)?',television':''}}
          {{($data['print']==1)?',print':''}}
          {{($data['word mouth']==1)?',word mouth':''}}

      </td>
    </tr>

    <tr>
      <td><strong>where did you heared about us(other)</strong></td>
      <td>{{$data['other']}}</td>
    </tr>

    <tr>
      <td><strong>Parents Name</strong></td>
      <td>{{$data['first name']}} {{$data['middle name']}} {{$data['last name']}}</td>
    </tr>

    <tr>
      <td><strong>Relationship with child</strong></td>
      <td>{{$data['relationship']}}</td>
    </tr>

    <tr>
      <td><strong>occupation</strong></td>
      <td>{{$data['occupation']}}</td>
    </tr>


    <tr>
      <td><strong>company name</strong></td>
      <td>{{$data['company']}}</td>
    </tr>

    <tr>
      <td><strong>phone number</strong></td>
      <td>{{$data['contact mobile']}}</td>
    </tr>


    <tr>
      <td><strong>emal ld</strong></td>
      <td>{{$data['email']}}</td>
    </tr>

    <tr>
      <td><strong>home phone</strong></td>
      <td>{{$data['home phone']}}</td>
    </tr>

    <tr>
      <td><strong>other phone</strong></td>
      <td>{{$data['other contact']}}</td>
    </tr>

    <tr>
      <td><strong>child name</strong></td>
      <td>{{$data['full name']}}</td>
    </tr>


    <tr>
      <td><strong>gender</strong></td>
      <td>{{$data['gender']}}</td>
    </tr>


    <tr>
      <td><strong>dob</strong></td>
      <td>{{$data['dob']}}</td>
    </tr>

    <tr>
      <td><strong>age</strong></td>
      <td>{{$data['age']}}</td>
    </tr>

    <tr>
      <td><strong>nationality</strong></td>
      <td>{{$data['nationality']}}</td>
    </tr>

    <tr>
      <td><strong>primary language</strong></td>
      <td>{{$data['primary language']}}</td>
    </tr>

    <tr>
      <td><strong>secondory language</strong></td>
      <td>{{$data['secondory language']}}</td>
    </tr>


    <tr>
      <td><strong>previous school</strong></td>
      <td>{{$data['previous schol']}}</td>
    </tr>
    <tr>
      <td><strong>current grade</strong></td>
      <td>{{$data['current year']}}</td>
    </tr>
    <tr>
      <td><strong>admission year</strong></td>
      <td>{{$data['admission year']}}</td>
    </tr>

    <tr>
      <td><strong>grade to which admission seeking</strong></td>
      <td>{{$data['grade to which admission seeking']}}</td>
    </tr>

  </tbody>
  @endforeach
</table>
</div>
</body>
</html>