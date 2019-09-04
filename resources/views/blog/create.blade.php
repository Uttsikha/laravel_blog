<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
</head>
<body> 

<div class="container">
		<form action="/blogs" method='post' enctype='multipart/form-data'>
		@csrf
		<br><a href='/blogs' class='h5 text-success'>Go to Home Page</a>
	 <form method="post" action="">
	 	<div class="form-group">
		 	<label>Blog Name</label>
	        <input type='text' name='name'  class="form-control"  required value="{{old('name')}}">
	    </div>
		<div class="form-group">  
			<label>Blog Description</label>
	        <textarea name="description"  class="form-control"  required> {{old('description')}}</textarea>
		</div>
		<div class="form-group">
			<label>Blog Photo</label>
	        <input type="file" name="photo" id="photo" class="form-control-file text-primary"  required>
		</div>
		<div class="form-group">
		 	<label>User ID</label>
	        <input type='number' name='user_id'  class="form-control" required value="{{old('user_id')}}">
	    </div>
		<div class="form-group"> 
		<button type="Submit">Upload Blog</button>
		</div>
		@if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
	</form>
	</div>
	</body>
</html>
