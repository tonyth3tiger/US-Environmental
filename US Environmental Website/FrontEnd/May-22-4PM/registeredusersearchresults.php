<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search Results</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116671556-1"></script>
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
            else     
                ./php/test.php
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
line-height: 100px;
width:50px;
height:50px;
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
margin-top:3px;
margin-left:210px;
margin-right:auto;
border-radius:5px;
line-height: 1;
color:black;

}


/* Search icon button styling */
.input-group-btn{

margin-top:3px;
margin-left:auto;
margin-right:auto;
border-radius:5px;
line-height: 1;
color:black;
float:left;
}

/* Category Select box styling */
.selectWidth{
margin-top:3px;
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
margin-top:1px;
margin-left: 350px;
font-size:1rem;font-weight:400;color:white;

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
padding:2rem 15px;

margin-bottom:1.5rem;

background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img(20).jpg");
background-position: 35% 65%;
background-repeat: no-repeat;
background-size: cover;
}


/* Styling for the section below Navigation bar */
.bd-pageheader .container{
position:relative
}


/* Park image thumbnail styling */
.park{

border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 160px;
    float:left;
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
   
      <ul class="nav navbar-nav navbar-left">
<!-- Logo -->
<img class="navbar-brand" src="https://github.com/csc648-sp18/csc648-team09/blob/master/US%20Environmental%20Website/FrontEnd/Logo/NewLogo.png?raw=true"></img>

        <li class="active"><a href="registereduserhomepage.php">Home</a></li>
        <li><a href="#">Post an issue</a></li>
        
        
      </ul>
    </div>
</div>
<ul class="nav navbar-nav navbar-center">
            <li><a href="#">CSC 648 848 Software Engineering Class Section 02 Team 09 Spring 2018</a></li>
           
        </ul>
    <div class="collapse navbar-collapse" id="myNavbar">
   
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#">Welcome <?php echo $_SESSION['loggeduser'] ?></a></li>
        <li><a href="logout.php">Logout</a></li>
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

     <form method="get" name="searchResult">  
<p >See an issue in park... Post it, Check the Status, Enjoy your park time</p> 
   <div class="input-group" >
 <div class="col-md-2">
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

<?php include 'searchresult.php'; ?>
<!--
<h1 >Search Results</h1>
<p style="margin-left:190px" > Showing 1 - 5 results out of 10</p>

<div class="container">



<div class="row">
 
<div class="col-md-1.5">
<img class="park"  src="C:\Users\Sirivamsi\Desktop\Gilbert-Open-Space_2-1024x768.jpg" alt = "park image"></div>

<div class="col-md-7 ">
<u><b><a href="#" >Park Name: Gilbert Park</b></u></a> <p> </p>
<p align="justify">Gilbert Park provides a peaceful park setting with rolling hills, expansive grassy area, and mature shade trees.  A labyrinth near the parking lot provides the only one of its kind in the city.</p>
<strong>Status of the Park: </strong>To be Cleaned &nbsp;&nbsp;&nbsp;&nbsp
<strong>Category: </strong> Oil Spill &nbsp;&nbsp;&nbsp;&nbsp
<strong>Location: </strong> 5000 West Lincoln Avenue    

</div>

</div>
<br>
<div class="row">

<div class="col-md-1.5">

<img class="park"  src="C:\Users\Sirivamsi\Desktop\Kissel-Basketball-1024x768.jpg" alt = "park image"></div>

<div class="col-md-7 ">
<u><b><a href="#" >Park Name: Emil Kissel Park</b></u></a><p></p>
<p>Emil Kissel Park is a multi-use park that attracts citizens from throughout the city for its 12 tennis courts, and also caters to the surrounding neighborhood with its walking path, basketball court, playground, and green space.</p>
<strong>Status of the Park: </strong>Work in Progress &nbsp;&nbsp;&nbsp;&nbsp
<strong>Category: </strong> Trash &nbsp;&nbsp;&nbsp;&nbsp
<strong>Location: </strong> 5000 West Lincoln Avenue    
 </div>
</div>
-->
 <!-- Footer bar bottom -->
<footer class="navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <span>© Copyright: CSC 648 Software Engineering Class Section 02 Team 09</span>
  </div>
</footer>
</body>
</html>


