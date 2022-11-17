<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}
body {
	background: #1690A7;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}
*, *:before, *:after {
  box-sizing: inherit;
}
.p{
    color: white;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
.container1 {
        display: flex;
        align-items: center;
        justify-content: center
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.card {
    padding: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    background-color: white;
    transition: 0.3s;
 }
.button:hover {
  background-color: #555;
}
.header {
  padding: 60px;
  text-align: center;
  color: white;
  font-size: 30px;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h1>Corporate Employee Attrition Analytics</h1>
</div>
<div class="row">
  <div class="container1">
      <img src="images\person.jpeg" style="width: 20%; padding-bottom: 20px;padding-right: 30px;">
    
      <div class="row">
        <h1>Hello <?php echo $_SESSION['name']; ?> </h1>
        <a href="logout.php" class="fa fa-sign-out">Logout</a>
      </div>
      
  </div>

  <div class="row">
    <div class="column" >
      <div class="card">
        <img src="images\dashboard.jpeg" alt="DashBoard" style="width:70%; display: block;
        margin-left: auto;
        margin-right: auto;">
        <div class="container">
          <h2>DashBoard</h2>
          <a class="button" href="dashboard.html">Click here</a>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="images\report.jpeg" alt="Report" style="width:70% ;display: block;
        margin-left: auto;
        margin-right: auto;" class="center">
        <div class="container">
          <h2>Report</h2>
          <a class="button" href="report.html">Click here</a>
        </a>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img src="images\story.jpeg" alt="Report" 
        style="width:70%; display: block;
        margin-left: auto;
        margin-right: auto;">
        <div class="container">
          <h2>Story</h2>
          <a class="button" href="story.html">Click here</a>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>