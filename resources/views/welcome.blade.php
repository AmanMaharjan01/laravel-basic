<!DOCTYPE html>
<html lang="en">
<head>
  <title>Texas College</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Satisfy&display=swap');
      h1
      {
          position:absolute;
          top:50%;
          left:50%;
          transform: translate(-50%,-50%);
          font-size:60px; 
          font-family: 'Satisfy', cursive;
      }
  </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('/') }}">Texas College</a>
      </div>
      <ul class="nav navbar-nav">
          <li @if(isset($students)) class="active" @endif><a href="{{ url('students') }}">Students</a></li>
          <li @if (isset($teachers)) class="active" @endif><a href="{{ url('teachers') }}">Teachers</a></li>
          <li @if (isset($parents)) class="active" @endif><a href="{{ url('parents') }}">Parents</a></li>
      </ul>
  </div>
</nav>


<div class="container">


    @if (isset($students))
    <h4><b>Available Students:</b></h4>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($std as $students)
                <tr>
                    <td>{{ $students->id }}</td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->address }}</td>
               
                </tr>

            @endforeach

        </tbody>
    </table>

    {{ $students->links() }}


    @elseif(isset($teachers))

    <h4><b>Available Teachers:</b></h4>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teachers as $teacher) { ?>
                <tr>
                    <td><?php echo $teacher->id;?></td>
                    <td><?php echo $teacher->name;?></td>
                    <td><?php echo $teacher->phone_no;?></td>
                    <td><?php echo $teacher->address;?></td>
                </tr>

            <?php } ?>

        </tbody>
    </table>


    @elseif(isset($parents))
    <h4><b>Available Parents:</b></h4>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parents as $parent) { ?>
                <tr>
                    <td><?php echo $parent->id;?></td>
                    <td><?php echo $parent->name;?></td>
                    <td><?php echo $parent->phone_no;?></td>
                    <td><?php echo $parent->address;?></td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
    @else
    <h1>Texas International College</h1>
    @endif
</div>

</body>
</html>
