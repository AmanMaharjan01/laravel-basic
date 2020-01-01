<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if (isset($students))
<h1>Hello</h1>
<table>
   <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Contract</th>
      <th>Address</th>
   </tr> 
   <tr>
      <td>{{$students->id}}</td>
      <td>{{$students->name}}</td>
      <td>{{$students->contact}}</td>
   </tr> 
</table>
{{ $students->links() }}

@elseif(isset($teachers))

    <h4><b>Available Teachers:</b></h4>            
    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>{{$students->id}}</td>
                <td>{{$students->name}}</td>
                <td>{{$students->contact}}</td>
            </tr>
    </table>
</body>
</html>
