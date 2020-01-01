<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <p>All Articles</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>

    	<?php foreach ($articles as $article) {?>
	      <tr>
	        <td><?=$article->id;?></td>
	        <td><?=$article->title;?></td>
	        <td><?=$article->body;?></td>
	      </tr>
  		<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>