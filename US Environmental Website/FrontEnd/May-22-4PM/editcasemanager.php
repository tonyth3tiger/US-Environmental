<!DOCTYPE html>
<!--CityManagerDashboard, created by Patrick Wong Reviwed by Krishna Sirisha-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>City Manager Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116671556-1"></script>
<!--Google reCaptcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
.bd-pageheader .container h1
{

text-align:center;
font-size:3rem;
font-weight:400;
color:white;
margin-top:1px;
margin-right:40px;

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

.bd-pageheader .container p{
text-align:center;
color:white;
margin-top:5px;
margin-right:40px;

}





.navbar-nav li a {
 line-height: 30px;
}


    
    th{
    font-size:120%;
    }
    
    td{
    font-size:110%;
    }
    
    /*this keeps the footer from blocking content*/
    body {
    min-height: 200px;
    margin-bottom: 50px;
    clear: both;
    }
    
    /*prevents scroll bar from shifting the page*/
    html {
    overflow-y: scroll;
    }

<!-- @media (min-width:576px){.bd-pageheader{padding-top:4rem;padding-bottom:4rem;margin-bottom:3rem;text-align:left}
@media (min-width:768px){.bd-pageheader h1{font-size:4rem}.bd-pageheader p{font-size:1.5rem}}
@media (min-width:992px){.bd-pageheader h1,.bd-pageheader p{margin-right:380px}.bd-pageheader  -->

 /* Style Issue form */
    form.form-horizontal {
        margin-left: 25%;
        margin-right: auto;
        width: 50%;
    }
    form.form-horizontal .form-group {
        width: 25%;
        margin-left: 26%;
        margin-right: auto;
    }
    form.form-horizontal .form-group .form-control {
        margin-left: 20px;
        width: 205%;
    }
    /* Style the save/cancel button */
    form.form-horizontal button {
        width: 15%;
        padding: 10px;
        background: #000000;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        cursor: pointer;
    }
     #cancel {
        margin-left: 27%;
        background-color: red;
        border-color: red;
        width: 25%;
    }
    #save {
      background-color: rgb(4,169,123);
      border-color: rgb(4,169,123);
      width: 25%;
    }
    form.form-horizontal button:hover {
        background: #0b7dda;
    }
    #required {
      left: 70%;
    }
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
        <ul class="nav navbar-nav navbar-left">
        <!-- Logo -->
          <img class="navbar-brand" src="https://github.com/csc648-sp18/csc648-team09/blob/master/US%20Environmental%20Website/FrontEnd/Logo/newLogoWithTitle.png?raw=true"></img>
          <li class="active"><a href="casemanagerhomepage.php">Home</a></li>
          <li><a href="#">Post an issue</a></li>
        </ul>
      </div>
    </div>
      <ul class="nav navbar-nav navbar-center">
        <li><a href="#">CSC 648 848 Software Engineering Class Section 02 Team 09 Spring 2018</a></li>
           
      </ul>
    <div class="collapse navbar-collapse" id="myNavbar">
   
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Welcome City Manager</a></li>
        <li><a href="#">Logout</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Section below navigation bar containing search and categories -->
<div class="bd-pageheader">
      <div class="container">
  <h1> US Environmental </h1>
  
     <form method="get" name="searchResult" >  

<p >See an issue in park... Post it, Check the Status, Enjoy your park time</p> 
   <div class="input-group" >
 <div class="col-xs-2">
 <!-- Category Menu -->
 <select class="form-control selectWidth" id="selectionType" onchange="getOption()">
        <option value="Search by zip code or park name...">All</option>
        <option value="Search by Park Name..">Park Name</option>
        <option value="Search by Zip Code..">Zip Code</option>
        <option value="Search by City Name..">City</option>
       </select>
</div>
  <!-- Search bar -->
      <input type="text" class="form-control" id="searchbox" placeholder="Search by zip code or park name or city..." onkeydown = "validatefunction()">
 <!-- Search icon button -->
      <span class="input-group-btn">
        <button id = "SearchButton" class="btn btn-secondary" type="button" onclick="myFunction()"><span class="glyphicon glyphicon-search icon-size"></span> </button>
      </span> 



    </div>
      </form> 
    </div>
      </div>   

 <?php
$id=$_REQUEST['id'];
$value=$_REQUEST['value'];
?> 
      <!-- page title-->
      <h1>Assign an issue</h1>
<br>
<br>

      <!--Issue form -->
      <form class="form-horizontal" id="usrform" method="post" action="assignuser.php?id=<?php echo $id ?>" target="_blank">
        <!-- Park input field -->
        <div class="form-group">
          <label class="col-sm-2 control-label">Assign</label>
          <div class="col-sm-9">
              <input class="form-control" type="text" name="assignto" placeholder="<?php echo $value ?>" required>
          </div>
          <label id="required" class="col-sm-1 control-label" style="color: red">*Required</label>
        </div>
        <!-- Issue input field -->
        <div class="form-group">
          <label class="col-sm-2 control-label">Status</label>
          <div class="col-sm-9">
            <select class="form-control" id="dropDown" name="status" required>
                <option value="" disabled selected>Please select one</option>
                <option>New</option>
                <option>Assigned</option>
                <option>In Progress</option>
                <option>Resolved</option>
            </select>
          </div>
       <label id="required" class="col-sm-1 control-label" style="color: red">*Required</label>
        </div>
<br><br>        
 <div class="form-group">
        <!-- Submit and cancel button -->
        <button id="cancel" type="reset" class="btn btn-primary btn-lg">Cancel</button>
        <button id="save"  type="submit" class="btn btn-primary btn-lg">Save</button>
</div>
      </form>

</body>
 <!-- Footer bar bottom -->
<footer class="navbar-default navbar-fixed-bottom">
    <div class="container-fluid">
        <span>© Copyright: CSC 648 Software Engineering Class Section 02 Team 09</span>
    </div>
</footer>
</body>
</html>

