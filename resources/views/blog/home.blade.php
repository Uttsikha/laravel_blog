

<!DOCTYPE html>
<html>
<head>
	<title>Blogs</title>
	<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
</head>
<body class="container">
<div>
<br>

 
      	</h3>
    	<p class='text-center text-primary '><strong>Welcome </strong></p>
		<!-- <a href='profile.php' class="btn btn-success">My Profile </a> -->
	
	<a href='/blogs/create' class='btn btn-success'>
              Create a blog
     </a>
	 <br>
	 <br>

	</div>
	<div class="container">
	 <table border="1" class="table table-dark table-bordered ">
		<caption class='text-center text-primary'>Blogs Detail</caption>
		<thead class="thead-light">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Picture</th>
			<th>Posted Date</th>
			<th>User ID</th>
		</tr>
		</thead>
		@foreach ($blogs as $blog)
				<tr>
				<td> {{$blog->id}}</td>
				<td><a href="/blogs/{{$blog->id}}"> {{$blog->name}} </a></td>
				<td>{{$blog->description}}</td>
				<td><img src= "	url('storage/app/'.{{$blog->photo}}" class='img-fluid mx-auto'></td>
				<!-- <td><img src= "	{{ URL::asset('storage/app/photos/0VuvDf2hIwlyNacAqpGv1zGwuyYR1Rp9zn1rxqRX.jpeg') }}" ></td> -->
				
				<td>{{$blog->posted_date}}</td>
				<td> {{$blog->user_id}}</td>
				
			
	
				</tr>
				
				@endforeach			
		
	</table> 
</div>
</body>
</html>

