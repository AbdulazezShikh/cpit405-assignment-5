<html>
<head> 
<title>Imgur:The magic of the internet</title>
<link rel="stylesheet" type="text/css" href="indexcss.css">
</head>
<body>
 
<div id="bgg">

<div>

<label><a href="" id="hf">imgur</a><input type="submit" value="New post" class="lc"></label> 
<label class="mar2"><input type="text" id="search" class="searchclass" placeholder="Search for image"/></label>
<button class="btn" onclick="doClick()">Search</button>
<label class="mar">Sign in<input type="submit" value="Sign up" class="lc"></label>

</div>

<div> 
<h1 class="header">You're already awesome. </h1>
</div>
<div class="A1">
<strong>EXPLORE TAGS</strong><a href="" class="A2">MORE TAGS +</a>
</div>

 </div>
 <?php
   require_once('./db_connection.php'); 
   $stmt= $conn->prepare("SELECT image FROM ass5");
   $stmt->execute();
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<li><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" /></li>';
     
    }
    echo "</ul>";
 ?>
<form id = "footer-list"> 
<ul>
<span id="c">© 2018 Imgur, Inc</span> 
<li><a href="">About</a></li>
<li><a href="">Press</a></li>
<li><a href="">Blog</a></li>
<li><a href="">Privacy</a></li>
<li><a href="">Terms</a></li>
<li><a href="">Advertise</a></li>
<li><a href="">Ad Choices</a></li>
<li><a href="">Rules</a></li>
<li><a href="">Help</a></li>
<li><a href="">Careers</a></li>
<li><a href="">Store</a></li>
<li  class="slo"><a href="">Get the App</a></li>
</ul> 
</form>
</body>
</html> 