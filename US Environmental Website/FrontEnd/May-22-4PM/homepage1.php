<!DOCTYPE html>
<html>
<head>
<!--Home Page, created by Krishna Sirisha-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Home Page </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116671556-1"></script>
<!--Google reCaptcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>


<script>
    // !!! For the below code to work, please add onclick="myFunction()" to search button !!!
    function myFunction() {
        //Select the option value
        var x = document.getElementById('selectionType').value;
        //Select the search box value
        var text = document.getElementById('searchbox').value;
        //For All
        if(x === "Search by zip code or park name...") {
            if(typeof text !== 'string' || text.length > 50) {
                alert("Please enter text below 50 characters");
            }
        }
        //For Park Name
        if(x === "Search by Park Name..") {
            if(typeof text !== 'string' || text.length > 40) {
                alert("Please enter text below 40 characters");
            }
        }
        //For Zip Code
        if(x === "Search by Zip Code..") {
            if( isNaN(text) || (text.toString().length > 5 || text.toString().length < 5) ) {
                alert("Invalid zip code. Please enter a valid 5 digit zipcode");
            }
        }
        //For City Name
        if(x === "Search by City Name..") {
            if(typeof text !== 'string' || text.length > 40) {
                alert("Please enter text below 40 characters");
            }
        }
    }
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-116671556-1');


<!-- This function changes the placeholder text with respect to option selected in the category -->
function getOption() {
    var obj = document.getElementById("selectionType");
    document.getElementById("searchbox").placeholder = 
    obj.options[obj.selectedIndex].value;
}

function validatefunction() {
if (event.keyCode == 13)
                        document.getElementById('SearchButton').click()
}

</script>

<!-- Styling for the search box, select option menu and header -->
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 800px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 60px;
      background-color: #f1f1f1;
      height: 100%;
    }

/* Set image size for navigation brand */
img.navbar-brand  {
width:200px;
height:60px;
margin-top:1px;
}
.navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
    
    /* Set background color, black text and some padding for footer */
    footer {
      color: black;
      padding: 15px;
     text-align:center
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

* {box-sizing: border-box;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
h1 {
    text-align: center;
    font-weight: normal;
}

.nav bd-sidenav
{
max-width:160px;
margin: 0;
padding: 1em;
border-left: 1px solid gray;
}


/* Search input text box styling */

.input-group [type=text]
{
box-sizing: border-box;
width:450px;
padding:10px;
margin-top:10px;
margin-left:210px;
margin-right:auto;
border-radius:5px;
line-height: 1;
color:black;

}


/* Search icon button styling */
.input-group-btn{

margin-top:10px;
margin-left:auto;
margin-right:auto;
border-radius:5px;
line-height: 1;
color:black;
float:left;
}

/* Category Select box styling */
.selectWidth{
margin-top:10px;
margin-left:225px;
margin-right:auto;
border-radius:5px;
line-height: 1;
color:black;
float:left;

}
/* Set search icon size */
.icon-size{
font-size:12px;
}

/* US Environmental Heading */
.bd-pageheader h1
{

text-align:center;
font-size:3rem;
font-weight:400;
color:white;
margin-top:1px;

}


/* Main section styling */
.main {
    margin-left: 180px; 
}

/* Recent posting heading styling */
.main h1 {
float:left
}

/* Styling for the section below Navigation bar */
.bd-pageheader{
padding:5rem 15px;
margin-bottom:1.5rem;

background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img(20).jpg");
background-position: 35% 65%;
background-repeat: no-repeat;
background-size: cover;

}

.bd-pageheader p{
text-align:center;
color:white;
margin-top:5px;
}

.navbar-nav li a {
 line-height: 30px;
}



/* Styling for the section below Navigation bar */
.bd-pageheader .container
position:relative

}

<!-- @media (min-width:576px){.bd-pageheader{padding-top:4rem;padding-bottom:4rem;margin-bottom:3rem;text-align:left}
@media (min-width:768px){.bd-pageheader h1{font-size:4rem}.bd-pageheader p{font-size:1.5rem}}
@media (min-width:992px){.bd-pageheader h1,.bd-pageheader p{margin-right:380px}.bd-pageheader  -->

</style>

</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<div class="collapse navbar-collapse" id="myNavbar">
<!-- Left Navigation Header -->   
      <ul class="nav navbar-nav navbar-left">
<!-- Logo -->
<img class="navbar-brand" src="https://github.com/csc648-sp18/csc648-team09/blob/master/US%20Environmental%20Website/FrontEnd/Logo/newLogoWithTitle.png?raw=true"></img>       
        
        <li class="active"><a href="#">Home</a></li>
        <li><a href="../unregistereduserreportissue.php">Post an issue</a></li>
      </ul>
    </div>
</div>

<ul class="nav navbar-nav navbar-center">
            <li><a href="#">CSC 648 848 Software Engineering Class Section 02 Team 09 Spring 2018</a></li>
           
        </ul>

<!-- Right Navigation Header -->
    <div class="collapse navbar-collapse" id="myNavbar">
   
      <ul class="nav navbar-nav navbar-right">

        

        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#myModal2" data-toggle="modal" data-target="#myModal2">Register</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Help</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- Modal login-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!--<h4 class="modal-title">Login</h4>-->
        </div>
        <div class="modal-body">
          <form method="post" action="loginvalidate.php" name="loginform">
                <h1>Login</h1>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="loginemail" class="form-control" id="inputEmail" placeholder="Email" maxlength="30" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="loginpwd" class="form-control" id="inputPassword" placeholder="Password" maxlength="30" required>
                    </div>
                </div>
                    

                <br>
                    
                <button type="submit">Login</button>     
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>    
 <!-- Modal registration--->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!--h4 class="modal-title">Login</h4>-->
        </div>
        <div class="modal-body">
          <form name="registrationform" method="post" action="registartion.php">
                <h1>Registration</h1>
                <div class="form-group row" align="center">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" maxlength="30" required>
                    </div>
                </div>
                <div class="form-group row" align="center">
                    <label for="inputCity" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="inputCity" name="City" class="form-control" id="inputCity" placeholder="Name" maxlength="30" required>
                    </div>
                </div>
                <div class="form-group row" align="center">
                    <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="inputPhoneNumber" name="phonenum" class="form-control" id="inputPhoneNumber" placeholder="Phone (optional)" maxlength="11">
                    </div>
                </div>
                <div class="form-group row" align="center">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="inputPassword" name="password" class="form-control" id="inputPassword" placeholder="Password" maxlength="30" required>
                    </div>
                </div>
                <div class="form-group row" align="center">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Repeat Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="repeatpassword" class="form-control" id="inputPassword" placeholder="Repeat Password" maxlength="30" required>
                    </div>
                </div>
                    
                <br>
                <div class="g-recaptcha" data-sitekey="6Lf0CFEUAAAAABWkxWHS4x3UtoQcUFaHlYsZj9mK"></div>
                <button type="submit">Register</button>
          </form>
        </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>  
  </div>


<!-- Section below navigation bar containing search and categories -->
<div class="bd-pageheader">
      <div class="container">
  <h1> US Environmental </h1>
  
     <form method="post" name="searchResult" action="unregisteredusersearchresults.php" >  

<p >See an issue in park... Post it, Check the Status, Enjoy your park time</p> 
   <div class="input-group" >
 <div class="col-xs-2">
 <!-- Category Menu -->
 <select class="form-control selectWidth" name="selectcategory" id="selectionType" onchange="getOption()">
        <option value="Search by zip code or park name...">All</option>
        <option value="Search by Park Name..">Park Name</option>
        <option value="Search by Zip Code..">Zip Code</option>
        <option value="Search by City Name..">City</option>
       </select>
</div>
  <!-- Search bar -->
	      <input type="text" class="form-control" id="searchbox" name="searchbox" placeholder="Search by zip code or park name or city...">
 <!-- Search icon button -->
      <span class="input-group-btn">
        <button id = "SearchButton" type="submit" class="btn btn-secondary" type="button" onclick="myFunction()"><span class="glyphicon glyphicon-search icon-size"></span> </button>
      </span> 



    </div>
      </form> 
    </div>
      </div>   
 
<?php include 'homepage.php';?>
<!--
<div class="container">
    <h1 style="float:left">Recent Posts</h1>
        <table id="My Posts Table" class="table table-hover">
            <thead>
                <tr>
                    <th style width="10%">Issue ID</th>
                    <th style width="10%">Park Name</th>
                    <th style width="12%">Issue Category</th>
                    <th style width="35%">Issue Description</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1007569</td>
                    <td>Park 1
                        <h5>4425 Garrett Park Rd</h5>
                    </td>
                    <td>
                        Garbage
                    </td>
                    <td>
                        There is Garbage spill all over the kids play area. Please look into it. 
                    </td>
                   
                </tr>
                <tr>
                    <td>1007570</td>
                    <td>Park 2
                        <h5>3rd St & Armstrong Ave.</h5>
                    </td>
                      <td>
                        Oil Spill
                    </td>
                    <td>
                        There is Oil spill under the benches. Please look into it. 
                    </td>
                   
                </tr>
                <tr>
                    <td>1007571</td>
                    <td>Park 2
                        <h5>3rd St & Armstrong Ave.</h5>
                    </td>
                      <td>
                        Nuclear Waste
                    </td>
                    <td>
                        Park has a lot of Nuclear Waste. Please look into it. 
                    </td>
             
                    
                </tr>
                <tr>
                </tr>
                <tr>
                    <td>1007572</td>
                    <td>Park 2
                        <h5>3rd St & Armstrong Ave.</h5>
                    </td>
                      <td>
                        Nuclear Waste
                    </td>
                    <td>
                        Park has a lot of Nuclear Waste. Please look into it. 
                    </td>
                    
                    
                </tr>
                 <tr>
                    <td>1007573</td>
                    <td>Park 2
                        <h5>3rd St & Armstrong Ave.</h5>
                    </td>
                      <td>
                        Nuclear Waste
                    </td>
                    <td>
                        Park has a lot of Nuclear Waste. Please look into it. 
                    </td>
                    
                </tr>
                
            </tbody>
        </table>
        </div>
 -->
 <!-- Footer bar bottom -->
<footer class="navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <span>Â© Copyright: CSC 648 Software Engineering Class Section 02 Team 09</span>
  </div>
</footer>
</body>
</html>




