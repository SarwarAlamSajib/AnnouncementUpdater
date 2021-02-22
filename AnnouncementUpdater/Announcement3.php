<html>

<head><!--Head of this html page-->
<link href="style.css" rel="stylesheet"/><!--linking css file-->
<title>X Titan E-Comm</title> <!--Title of the page-->
</head>

<body >

<div class="header"><!--Header -->
<h1>X TITAN ANNOUNCEMENT BOARD</h1><!--Heading -->

<div>
<?php include 'menu.php';?><!--including menu-->
</div>

<h5 align="right" color="white"><a href="login.php">Log Out</a></h5><hr/>
<h3 align="center">ANNOUNCEMENT THREE</h3><hr/>

<center>
<p id="am" align="center"></br></br><!--announcement paragraph-->
&nbsp &nbsp --Season End Sale-- <br/>
Upto 70% discount on all the clothing products. Hurry up before it finishes. 
</p>
</center>
<br/>

<div class="up" style="text-align:center;">
<form><!--form to update announcement-->
<input type="text" id="a" placeholder="Write New Announcement Here.."/><br/>
<input type="button" id="up" value="Update Announcement" />
</form>

<script><!--java script to update announcement-->
var p = document.getElementById('am');
var btn = document.getElementById('up');
var txt = document.getElementById('a');
btn.onclick = function(){
p.textContent = txt.value;};
</script>

<div class="f" align="bottom">
<?php include 'footer.php';
?><!--including footer-->
</div>

</body>
</html>
