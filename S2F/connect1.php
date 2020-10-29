
 <html>
 <html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./font/css/open-iconic-bootstrap.min.css">
</head>
	
	

 <body>

   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="connect1.php"><img src="s2f.png" alt="1" style="width:12%;">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="connect1.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	
<style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>	
	
	
	

<div class="container-fluid">
  	​​<div class="container">
  <div class="jumbotron">
    <h1 align="center">Welcome to Sit 2 Fit</h1>   
<hr>	
    <h2 align="center">Meet Our Personal Trainers Registered From Our Database</h2>
	<h2></h2>
  </div>

</div>
</div>

<div class="container-fluid" style="background-color:aqua;">
  <div class="col-sm-12" style="background-color:aqua;"><h2></h2></div>
  <h1 align="center">Meet the faces of our Personal Trainers</h1>
  <h2 align="center"></h2>
  

  <div class="row">
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 1</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 2</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 3</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 4</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
      <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 5</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 6</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
  </div>
  
    <div class="row">
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 7</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 8</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 9</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 10</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
      <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 11</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
    <div align="center" class="col-sm-2" style="background-color:aqua;"><blockquote>
    <p class="text-success">Personal Trainer 12</p>
	<img src="pt.png" width="250" height="250">
  </blockquote></div>
  </div>
 </div>

<div class="container-fluid" style="background-color:aqua;">
  <div class="row">
	
	
	
	<div class="col-sm-4" style="background-color:aqua;">
	<h2 align="center""font-family: serif;"><font >The Personal Trainer Database</font></h2>
 
  <?php 
   $user = 'root';
   $hostname = "127.0.0.1";
   $pass = '';
   $db = 'test_db';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "The PT Team <br>";
   
   $sql = "SELECT * FROM trainers";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "ID: " . $row["ID"] . "<br>" . " Name: " . $row["name"]. "<br>" . " location: " . $row["location"]. "<br>" . " email: " . $row["email"]. "<br>" . " price: " . $row["price"]. "<br>" . " age: " . $row["age"]. " " . "<br>";
	}
	} else {
	echo "0 results";
	}



?>
</div>
  </div>
 </div>

 
 
	<footer>
		 <div class="container-fluid">
		  <div class="row">
			<div class="col-sm-12" style="background-color:#d2d8d7;">
			<h1 align="center""font-family: serif;"><b>Change Your Life Today.</b></h1></div>
			<h1></h1>
			<h1></h1>
			<h1></h1>
		  </div>
		 </div>
    
               <div class="container-fluid">
               <h3 style="text-align:center">Follow us on Social Media</h3>
       
         <div class="row">
           <div class="col-sm-2" style="background-color:;"></div>
           <div class="col-sm-2" style="background-color:;"></div>
           <div class="col-sm-2" style="background-color:;"><a href="https://www.facebook.com/"><img src="facebookicon.png" alt="1" style="width:25%;"></a><a href="https://www.twitter.com/"><img src="twittericon.png" alt="1" style="width:25%;"></a><a href="https://www.plus.google.com/"><img src="googleplusicon.png" alt="1" style="width:25%;"></a><a href="https://www.youtube.com/"><img src="youtubeicon.png" alt="1" style="width:25%;"></a></div>
           <div class="col-sm-2" style="background-color:;"><a href="https://www.pinterest.com/"><img src="pintresticon.png" alt="1" style="width:25%;"></a><a href="https://www.reddit.com/"><img src="redditicon.png" alt="1" style="width:25%;"></a><a href="https://www.flickr.com/"><img src="flickricon.png" alt="1" style="width:25%;"></a><a href="https://www.tumblr.com/"><img src="tumblericon.png" alt="1" style="width:25%;"></div>
           <div class="col-sm-2" style="background-color:lavender;"></div>
           <div class="col-sm-2" style="background-color:lavender;"></div>
         </div>
       </div>
       </footer>

   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>



 </body>
</html>

