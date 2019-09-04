<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
</head>
<body> 

<div class="container">
		<form action="/blogs/{{$blog->id}}" method='post' enctype='multipart/form-data'>
		@csrf
		@method('PATCH')
		<br><a href='/blogs' class='h5 text-success'>Go to Home Page</a>
	 <form method="post" action="">
	 	<div class="form-group">
		 	<label>Blog Name</label>
	        <input type='text' name='name'  class="form-control" value="{{$blog->name}}" required>
	    </div>
		<div class="form-group">  
			<label>Blog Description</label>
	        <textarea name="description"  class="form-control"  required>{{$blog->description}}</textarea>
		</div>
		<div class="form-group">
			<label>Blog Photo</label>
	        <input type="file" name="photo" id="photo" class="form-control-file text-primary"  required >
		</div>
		
		<div class="form-group">
		 	<label>User ID</label>
	        <input type='number' name='user_id'  class="form-control" value="{{$blog->user_id}}"  required>
	    </div>
		<div class="form-group"> 
	        <input type="submit" value="Update Blog" name="submit" class="form-control btn btn-success "  required>
		</div>
	
	</form>
	<form action="/blogs/{{$blog->id}}/delete" method='post' enctype='multipart/form-data'  required>
		@csrf
		@method('DELETE')
		<div class="form-group"> 
	        <input type="submit" value="Delete Blog" name="submit" class="form-control btn btn-success "  required>
		</div>
		</form>
		@if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
	</div>
	</body>
</html>
