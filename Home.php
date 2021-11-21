<html>
<head>
<link rel="stylesheet" href="Home.css">
<title>
Welcome to Travellers
</title>
</head>
<body>
  <div class="topnav">
    <a class="active" href="Home.php">Home</a>
    <a href="contactus.html">Contact US</a>
	<a href="Signup.html">Sign Up</a>
  </div>
  <div class="WelcomeMSG">
    <div class="transbox">
      <h1>Welcome To The Travellers</h1>
      <p>We provide quality services to our customers. Choose from a lot of different packages which ever suits you best. Your wish is our command.</p>
    </div>
  </div>
  <div class="container">
     <div class="box1">
        Package 1<br>
			<?php
				$conn = mysqli_connect("localhost", "root", "", "travel_agency");
				if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
						}
				$sql = "SELECT package.name, package.cost, destination.country, destination.City, landmarks.Place FROM ((package INNER JOIN destination ON package.id= destination.packageid)INNER JOIN landmarks ON package.id = landmarks.packageid) WHERE package.packageid = 1";
				$raw_results = mysqli_query($conn, $sql);
 
 while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                echo "<p>Name:".$results['Name']."<br/> Cost:".$results['Cost']." <br/>Country:".$results['Country']." <br/>City".$results['City']." <br/> Name:".$results['Place']."</p>" ;
				echo '<button type="nav" class="button_1" ><a href="reserve.php">Reserve</a></button>';
				//echo "<img src='{$results['img_dir']}' width='600' height='350'>";
                
				echo '<div><H3></H3></div>';
            };

	?>
						
     </div>
     <div class="box2">
        Package 2<br>  
		<?php
				$conn = mysqli_connect("localhost", "root", "", "travel_agency");
				if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
						}
				$sql = "SELECT package.id, package.total_cost, hotel.name, destination.country, destination.city, landmarks.name FROM (((package INNER JOIN hotel ON package.id = hotel.package_id) INNER JOIN destination ON package.id = destination.package_id) INNER JOIN landmarks on destination.code = landmarks.destination_code) WHERE package.id = 2";
				$raw_results = mysqli_query($conn, $sql);
 
 while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
               echo "<p>Country: ".$results['country']." <br/> City:".$results['city']."<br/> Location:".$results['name']." <br/>PackageID:".$results['id']." <br/>Price:".$results['total_cost']."</p>" ;
				echo '<button type="nav" class="button_1" ><a href="reserve.php">Reserve</a></button>';
				//echo "<img src='{$results['img_dir']}' width='600' height='350'>";
                
				echo '<div><H3></H3></div>';
 };
	?>
     </div>  
     <div class="box3">
        Package 3<br>  
		<?php
				$conn = mysqli_connect("localhost", "root", "", "travel_agency");
				if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
						}
					
				$sql = "SELECT package.id, package.total_cost, hotel.name, destination.country, destination.city, landmarks.name FROM (((package INNER JOIN hotel ON package.id = hotel.package_id) INNER JOIN destination ON package.id = destination.package_id) INNER JOIN landmarks on destination.code = landmarks.destination_code) WHERE package.id = 3";
				$raw_results = mysqli_query($conn, $sql);
 
 while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                echo "<p>Country: ".$results['country']." <br/> City:".$results['city']."<br/> Location:".$results['name']." <br/>PackageID:".$results['id']." <br/>Price:".$results['total_cost']."</p>" ;
				echo '<button type="nav" class="button_1" ><a href="reserve.php">Reserve</a></button>';
				//echo "<img src='{$results['img_dir']}' width='600' height='350'>";
                
				echo '<div><H3></H3></div>';
 };
	?>
     </div>    
  </div>  
</body>
</html>