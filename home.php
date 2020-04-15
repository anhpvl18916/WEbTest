<!--Develop by AnhPVL 20/3/2000-->
<?php
 session_start();
  $count = 0;
  // connecto database

  $title = "Index";
  require_once "./functions/connectDB.php";
  $conn = connectDB();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="shortcut icon" type="img/logo.png" href="img/logo.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | PAVOLAN OnlineBookstore</title>
<style>
body {
  background-color: #D9F9EA;
}

/* Style to create a fluid image */
img {
  max-width: 60%;
}
header{
	text-align:center;
	
}
#navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ffb05c;
  display:
}


#navbar li a {
  display: block;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

#navbar li a:hover:not(.active) {background-color: #f9eee7;}

footer  {
  background-color: #777;
  padding: 5px;;
  color: white;
  text-align: center;
  di
}
#copyright{
	margin-right:0.5em;
	text-align:left;
}
#social{
	margin-right:0.5em;
	text-align:right;
}
/* Style specifies padding and margins for unordered list */
@media screen and (max-width: 600px) {
	#navbar li {float: none;}
}

</style>
</head>
<body>
<header>
	<!-- Logo -->
	  <a href="home.php"> <img src=" img/logo.png" alt="PAVOLAN online Bookstore logo"></a>
    <!-- Use the nav area to add hyperlinks to other pages within the website -->
</header>
 <div id="navbar">
          <ul>
            <li class="category"> <a href="select_category.php">Category</a> </li>
            <li> <a href="select_product.php">Books</a> </li>
            <li> <a href="contact.php">Order</a> </li>
            <li> <a href="contact.php">Customer</a> </li>
          </ul>
        </div>
<footer>
 <div id="copyright">
        <p>&copy; Copyright 2020. All Rights Reserved. <br>
      <a href="mailto:websitedevelopment.consulting@gmail.com">pavolancompany@gmail.com</a>
        </p>
     </div>
     <div id="social">
       <P> Connect with us:</p>
         <p><a href="https://www.facebook.com/web"><img src="img/fblogo.png" alt="Facebook logo"></a> </p>
       </div>
</footer>
</body>

</html>
<?php
mysql_close($conn);
?>
