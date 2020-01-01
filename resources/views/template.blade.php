<!DOCTYPE html>
<html lang="en">
<head>
  <title>Texas College</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
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
      <ul class="nav navbar-nav ml-auto">
          <li @if(isset($students)) class="active" @endif><a href="{{ url('students') }}">Students</a></li>
          <li @if (isset($teachers)) class="active" @endif><a href="{{ url('teachers') }}">Teachers</a></li>
          <li @if (isset($parents)) class="active" @endif><a href="{{ url('parents') }}">Parents</a></li>
      </ul>
  </div>
</nav>


<div class="container">
  @yield('body')
</div>

</body>
</html>
