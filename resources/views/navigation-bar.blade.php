<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
  </script>
  <style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
  }
    /* Add a black background color to the top navigation */
.topnav {
  position: absolute;
  background: linear-gradient(to left, #399C23, #12087E);
  overflow: hidden;
  border-radius: 25px;
  margin-left: 15%;
  width: 75%;
  z-index: 10000;
}

.logo {
    object-fit: contain;
    width: 100px;
    align-self: center;
    height: 50px;
    margin: -15px 0 0 0;
  }

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 0 16px 0 16px;
  text-decoration: none;
  font-size: 17px;
  margin: 15px 0 0 0;
}


/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 0 16px 0 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 15px 0 0 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Call-to-action Button */
.btn-get-started {
    text-decoration: none;
    border: 2px solid #fff;
    border-radius: 30px;
    transition: 0.3s;
    text-align: center;
    background: none;
    color: green;
  }
  
  .btn-get-started:hover {
    background: linear-gradient(90deg, #399C23, #12087E);
    color: white;
  }

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
    padding: 14px 16px;
  }
  .topnav a.icon {
    float: right;
    display: block;
    margin: 0 0 0 0;
  }
  .logo {
    margin: -15px 0 0 0;
  }
}
/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {
    position: relative;
    transition: 0.5s;
  }
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: center;
    padding: 14px 16px;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: center;
    padding: 14px 16px;
  }

  .btn-get-started {
    text-decoration: none;
    color: #0924ae;
    border: 0 solid #0924ae;
    padding: 13px 20px;
    border-radius: 30px;
    font-weight: normal;
    transition: 0.3s;
    text-align: center;
    margin: 5px;
  }
  .btn-get-started:hover {
    background: blue;
    color: #0924ae;
  }
}
  </style>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <a href="#home"><img src="images\logo2.png" alt="Company Logo" class="logo"></a>
    <a class="list" href="#home">Home</a>
  <div class="dropdown">
    <button class="dropbtn">About Us
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Who we are </a>
      <a href="#">Our Team</a>
      <a href="#">Jobs & Internships</a>
      <a href="#">Our Projects</a>
      <a href="#">Our Clients</a>
      <a href="#">Blog</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Software Dev
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">UI/UX Design</a>
      <a href="#">App Development</a>
      <a href="#">Web Design & Dev</a>
      <a href="#">API Intergrations</a>
      <a href="#">ERP&CMS Systems</a>
      <a href="#">Support</a>
      <a href="#">Domain & Hosting</a>
    </div>
  </div>
  <a class="list" href="#bulksms">Bulk SMS</a>
  <div class="dropdown">
    <button class="dropbtn">Our Brands
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">DarasaLink</a>
      <a href="#">Examparlour</a>
      <a href="#">Onfod SMS</a>
      <a href="#">Xiracom BTC</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Other Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Tech Consultancy</a>
      <a href="#">Shop</a>
      <a href="#">Skiza Tunes</a>
      <a href="#">Cybersecurity</a>
      <a href="#">Digital Marketing</a>
      <a href="#">Trainings & Bootcamps</a>
    </div>
  </div>
  <a class="list" href="#contactus">Contact Us</a>
  <a class="list" href="#blog">Blog</a>
      <a href="#get-started" class="btn-get-started">Get Started</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
</body>
</html>
