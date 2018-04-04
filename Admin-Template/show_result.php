<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="Font-Awesome-master/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  	</script>

  	
  	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<meta name="viewport" content="width=device-width, 
	initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="multiselect-master/multiselect-master/dist/js/multiselect.js"></script>
	<link rel="stylesheet" type="text/css" href="multiselect-master/multiselect-master/css/bootstrap-multiselect.css">
	<link rel="stylesheet" type="text/css" href="multiselect-master/multiselect-master/css/style.css">
  	
  	<link rel="stylesheet" type="text/css" href="css/animate.min.css">

  	
  		<script type="text/javascript">
			$(document).ready(function(){
				$('#Example').multiselect();
			});
		</script>
  	
</head>
<body>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse" 
	role="navigation">
		<div class="container">
			<div class="navbar-header">
				<!-- <button type="button" class="navbar-toggle collapsed" 
				data-toggle="collapse" data-target=".navbar-collapse">
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button> -->
				<a href="dashboard.php" class="navbar-brand">Admin Panel</a>
				<p class="navp">XYZ HIGH SCHOOL</p>

			</div>
			<div class="navbar-collapse navbar-collapse collapse navc">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<p>Hello Admin</p>
					</li>

					<li>
						<a href="#services">Log Out</a>
					</li>
					
				</ul>
			</div>

		</div>
		
	</div>

	<!-- Mid -->

<nav class="navbar navbar-inverse visible-xs navbar-fixed-top" id="navbar2">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#section1">Dashboard</a></li>
			<li><a href="#section2">Student Information</a></li>
			<li><a href="#section3">Student Attendance</a></li>
			<li><a href="#section3">Bulk Sms</a></li>
			<li><a href="#section3">Result Processing</a></li>
			<li><a href="#section3">Teacher Login	</a></li>
	      </ul>
	    </div>
	  </div>
</nav>

	
		<div class="container-fluid" style="background-color: #eee;">
			<div class="row content" >
				<div class="col-sm-3 sidenav hidden-xs">

					<ul class="nav nav-pills nav-stacked">
						
				        <li class="dropdown">

				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Information
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="#">All</a></li>
							      <li><a href="#">Class One</a></li>
							      <li><a href="#">Class Two</a></li>
							      <li><a href="#">Class Three</a></li>
							      <li><a href="#">Class Four</a></li>
							      <li><a href="#">Class Five</a></li>
							      <li><a href="#">Class Six</a></li>
							      <li><a href="#">Class Seven</a></li>
							      <li><a href="#">Class Eight</a></li>
							      <li><a href="#">Class Nine</a></li>
							      <li><a href="#">Class Ten</a></li>
							    </ul>
						 	
				        </li>
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Attendance
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="#">All</a></li>
							      <li><a href="#">Class One</a></li>
							      <li><a href="#">Class Two</a></li>
							      <li><a href="#">Class Three</a></li>
							      <li><a href="#">Class Four</a></li>
							      <li><a href="#">Class Five</a></li>
							      <li><a href="#">Class Six</a></li>
							      <li><a href="#">Class Seven</a></li>
							      <li><a href="#">Class Eight</a></li>
							      <li><a href="#">Class Nine</a></li>
							      <li><a href="#">Class Ten</a></li>
							    </ul>
						 	
				        </li>
				        
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Result Processing
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="insert_result.php">Insert Result</a></li>
							      <li><a href="#">Show Result</a></li>
							      <li><a href="#">Marksheet</a></li>
							      <li><a href="#">Tabulation Sheet</a></li>
							    </ul>
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Teacher Login
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Classified Bulk Sms</button>
							    <!-- <span class="caret"></span>
							    <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Academic Calender
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>

      				</ul><br>
				</div>
				</div>
				<br>
					
					<div class="col-sm-9 col-md-9" style=" height: 700px; margin-top: -480px; margin-left: 250px;">
							<div class="table-responsive">          
							  <table class="table">
								    <thead>
								      <tr>
								        <th>#</th>
								        <th>Firstname</th>
								        <th>Lastname</th>
								        <th>Subject Code</th>
								        <th>Subject Title</th>
								        <th>Marks</th>
								        <th>Grade</th>
								        <th>Percentage</th>
								        <th>Final Result</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td>1</td>
								        <td>Hasan</td>
								        <td>Mahmud</td>
								        <td>CSE 101</td>
								        <td>C Programming</td>
								        <td>85</td>
								        <td>A+</td>
								        <td>85%</td>
								        <td>Pass</td>
								      </tr>
								      <tr>
								        <td>2</td>
								        <td>Hasan</td>
								        <td>Mahmud</td>
								        <td>CSE 101</td>
								        <td>C Programming</td>
								        <td>85</td>
								        <td>A+</td>
								        <td>85%</td>
								        <td>Pass</td>
								      </tr>
								      <tr>
								        <td>1</td>
								        <td>Hasan</td>
								        <td>Mahmud</td>
								        <td>CSE 101</td>
								        <td>C Programming</td>
								        <td>85</td>
								        <td>A+</td>
								        <td>85%</td>
								        <td>Pass</td>
								      </tr>
								      <tr>
								        <td>1</td>
								        <td>Hasan</td>
								        <td>Mahmud</td>
								        <td>CSE 101</td>
								        <td>C Programming</td>
								        <td>85</td>
								        <td>A+</td>
								        <td>85%</td>
								        <td>Pass</td>
								      </tr>
								      <tr>
								        <td>1</td>
								        <td>Hasan</td>
								        <td>Mahmud</td>
								        <td>CSE 101</td>
								        <td>C Programming</td>
								        <td>85</td>
								        <td>A+</td>
								        <td>85%</td>
								        <td>Pass</td>
								      </tr>
								      <tr>
								        <td>1</td>
								        <td>Hasan</td>
								        <td>Mahmud</td>
								        <td>CSE 101</td>
								        <td>C Programming</td>
								        <td>85</td>
								        <td>A+</td>
								        <td>85%</td>
								        <td>Pass</td>
								      </tr>
								    </tbody>
							  </table>
							</div>
					</div>
				

				</div>
			</div>
		</div>
		
	
</body>
</html>