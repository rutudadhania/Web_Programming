<?php
$Username=$_REQUEST['username'];
$Password=$_REQUEST['password'];
$Name=$_REQUEST['name'];
$Address=$_REQUEST['address'];
$Country=$_REQUEST['country'];
$ZIP =$_REQUEST['zip'];
$Email=$_REQUEST['email'];
$Sex=$_REQUEST['sex'];
$Language=$_REQUEST['language'];
$About=$_REQUEST['about'];


echo "<table border=1><tr><td>Username:</td><td>$Username</td></tr>
                      <tr><td>Password:</td><td>$Password</td></tr>
					  <tr><td>Name:</td><td>$Name</td></tr>
					  <tr><td>Address:</td><td>$Address</td></tr>
					  <tr><td>Country:</td><td>$Country</td></tr>
					  <tr><td>ZIP:</td><td>$ZIP</td></tr>
					  <tr><td>Email:</td><td>$Email</td></tr>
					  <tr><td>Sex:</td><td>$Sex</td></tr>
					  <tr><td>Language:</td><td>$Language</td></tr>
					  <tr><td>About:</td><td>$About</td></tr></table>";
?>