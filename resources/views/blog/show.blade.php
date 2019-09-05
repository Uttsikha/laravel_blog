<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
</head>
<body class="container"> 
<br>
    <div>
    <a href='/blogs' class='btn btn-success'>
         Go to Home
    </a><br><br>
    </div>	
    <table class='table-sm table-hover table-bordered table-striped'>
    <caption class='text-center text-primary'>Blog Detail</caption> 

 
            <tr>
                <td>ID</td>
                <td>{{$blog->id}}</td>
            </tr>
        
            <tr>
                <td>Name</td>
                <td>{{$blog->name}}</td>
            </tr>
        
            <tr>
                <td>Photo</td>
               
                    <td><img src= '{{$blog->photo}}' class='img-fluid mx-auto'/></td>
            
                <td>No picture on display</td>
            
            
            </tr>
            <tr>
                <td>Posted Date</td>
                <td>{{$blog->posted_date}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$blog->description}}</td>
            </tr>
            <tr>
                
                <td colspan='2'>
            	<a href='/blogs/{{$blog->id}}/edit' class='nav-link text-success text-center'> Edit </a>
               
               </ul>
                </td>
            </tr>
        
    </table>
   

