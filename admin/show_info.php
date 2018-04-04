<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="Font-Awesome-master/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
  	</script>

  	
  	<script type="text/javascript" src="bootstrap1/js/bootstrap.min.js"></script>
  	
  	<script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
  <!--   <script type="text/javascript">
    	function showTable2() {
   				document.getElementById('table2').style.display = "block";
   				
		}
    </script> -->
    <script type="text/javascript">
      	function showTable(one,second,three)
	    {
	      document.getElementById(one).style.display = 'block';
	      document.getElementById(second).style.display = 'none';
	      document.getElementById(three).style.display = 'none';
	      
	    }	
	    function showTable1(one)
	    {
	      document.getElementById(one).style.display = 'block';
	      
	      
	    }
	</script>
	
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	
  	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
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

	
		<div class="container-fluid" style="background-color: #fff;">
			<div class="row content" >
				<div class="col-sm-3 sidenav hidden-xs navbar-fixed-top">

					<ul class="nav nav-pills nav-stacked">
						
				        <li class="dropdown">

				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Information
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="stu_info_new.php">New Student</a></li>
							      <li><a href="show_info.php">Show information</a></li>
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
							      <li><a href="search_result.php">Show Result</a></li>
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
				<div class="row" id="row_form">
					<!-- <h1 class="title">Personal Information</h1> -->
					<div class="col-sm-12 col-md-12" id="row_1st_col_rId" style="">
							<form class="form-horizontal"   action="/action_page.php" >
								<!-- <div class=" wow slideInLeft" data-wow-duration="1s"  > -->
										<!-- <div class="pinformation">
						    					<h1>Personal Information</h1>
						        		</div> -->
						    			<div class="form-group, col-sm-6 col-md-6" >
											<label for="rId" id="label_rId" class="control-label">Enter Registration Number: </label>
											<input type="text" class="form-control" id="rId" placeholder="Registration Number" data-error="Enter Student's Registration Number" required>
												<div class="help-block with-errors"></div>
												<button type="button" class="btn btn-primary" id="btn_profile" data-toggle="modal" data-target="#myModal" onClick="showTable1('table1')">See Profile</button>
										</div>

										
							</form>
						</div>
					</div>

				

				</div>
			</div>
		</div>


		<div class="modal fade left modal1" id="myModal"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
							<div class="modal-header"> 
									<!-- <h3 class="pull-left no-margin">Contact Form</h3> -->
									<button type="submit" id="button1" name="submit" class="btn-lg btn-primary buttons" data-toggle="" data-target="" 
									onClick="showTable('table1','table2','table3')">Personal Information</button>
									<button type="submit"  id="button2" name="submit" class="btn-lg btn-primary buttons" data-toggle="" data-target=""  
									onClick="showTable('table2','table1','table3')">Education</button>
									<button type="submit"  id="button3" name="submit" class="btn-lg btn-primary buttons" onClick="showTable('table3','table1','table2')">Address</button>
										<button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
										</button> 

							</div> 
							<div class="modal-body">
									<div class="table-responsive" id="table1" style="display: none;">
									<div class="pinformation" id="pinformation">
						    	        <h1>Personal Information</h1>
						            </div>          
									  <table class="table" >
										    <thead>
										      <tr>
										        <th>#</th>
										        <th>Firstname</th>
										        <th>Lastname</th>
										        <th>Guardian's Name</th>
										        <th>Guardian's Occupation</th>
										        <th>Guardian's Phone Number</th>
										        <th>Student's Phone Number</th>
										        <th>Blood Group</th>
										        <th>Date of Birth</th>
										        <th>Edit</th>
										        
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
										        <td><a href="#">Edit</a></td>
										      </tr>
										      
										    </tbody>
									  </table>
									

																					
									</div>

										<div class="table-responsive" id="table2" style="display: none"> 	 <div class="pinformation" id="pinformation">
							    	       		<h1>Educational Information</h1>
							           		</div>     
									  <table class="table">
										    <thead>
										    <tr>
										        <th>#</th>
										        <th>Class</th>
										        <th>Section</th>
										        <th>Group</th>
										        <th>Shift</th>
										        <th>Edit</th>
										    </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>1</td>
										        <td>Six</td>
										        <td>A</td>
										        <td>Science</td>
										        <td>Morning</td>
										        <td><a href="#">Edit</a></td>
										      </tr>
										      
										    </tbody>
									  </table>
									

																					
									</div>
									<div class="table-responsive" id="table3" style="display: none">     	 <div class="pinformation" id="pinformation">
							    	       	<h1>Address</h1>
							           	</div>
									  <table class="table">
										    <thead>
										    <tr>
										        <th>#</th>
										        <th>Present Address</th>
										        <th>Permanent Address</th>
										        <th>Edit</th>
										        
										    </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>1</td>
										        <td>116 South Goran</td>
										        <td>Patuakhali</td>
										        <td><a href="#">Edit</a></td>
										        
										      </tr>
										      
										    </tbody>
									  </table>
									

																					
									</div>

							</div>
					</div>
				</div>
			</div>
		

								<!-- </div> -->
	
</body>
</html>