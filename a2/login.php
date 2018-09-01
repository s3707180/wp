<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ALZA</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div style="background: #FFFFFF;">
<a href="index.php"><img src="images/logo.png" height="132px" width="438px" >  </a>
</div>


<div class="Header">
  <header style="background: #e4d5d7;">
	<nav class="PrimaryNavigation">
	<form method="get" action="/search" id="search1">
      <a href="index.php">Home</a> 
      <a href="products.php">Products</a>
	   <a href="login.php">Log-in</a>
      <a href="aboutus.php">About Us</a>
      <input id="search" type="text" placeholder="search"/>
	 </form>
	</nav>
   </header> 
</div>

<div class="mainContainer">
<div class="fullLightGreyBox">
 <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post">
  <div class="container">
    <label for="email"><b>Username</b></label>
    <input type="email" placeholder="Enter Username" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>
</form>

<hr />


<div class="clear"></div>

</div>
</div>

<div class="footer">
	<footer style="background: #fffffF;">
	<table align="center">
	<tr><td>
		<img src="images/logo.png" height="131px" width="149px" >	
	</td>
	<td>
		<ul>
		<li> <h3 > Contact</h3></li>
		<li> PO Box 445, St Kilda, VIC 3182</li>
		<li> 0425 784 482</li>
		<li> johnleonardpress@gmail.com </li>
		<li> Copyright 2013</li>
		</ul>
	</td></tr>
	</table>
	</footer> 
</div>

</body>
</html>
