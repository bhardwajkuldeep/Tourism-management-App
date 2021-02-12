<html>
<head>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="code.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="search-box.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<title>Comment Box</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>

	function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
		});
		
</script>
</head>
<body>
<div id="containers">
<header>

<h1>Mastanamusafir.com</h1>
<h2>Shimla Queen Of Hills</h2>
<div class="search-box-wrapper">
<a href="https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=1QC1WtHyCMWmX46erOAJ">
<button class="search-box-button">&#128269 </button></a>
</div>

</header>
<div id='cssmenu'>
<ul>
  <li class='active'><a href="index.html"><b>HOME</b> </a></li>
 
  <li><a href="http://wallpaperswide.com/travel-desktop-wallpapers"><b>IMAGES</b></a></li>
 
  <li><a href="http://www.india.com/travel/shimla/"><b>BLOG</b></a></li>
 
 <li> <a href="contact.html"><b>CONTACT US</b></a></li>
 
  <li><a href="about.html"><b>ABOUT US</b></a></li>
 
 <li> <a href="feedback.php"><b>FEEDBACK</b></a></li>
 

  </ul>
</div>

<div id="container">
	<div class="page_content">
    	<b>Please give your feedback here....</b>
    </div>
    <div class="comment_input">
        <form name="form1">
        	<input type="text" name="name" placeholder="Name..."/></br></br>
            <textarea name="comments" placeholder="Leave Comments Here..." style="width:600px; height:100px;"></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="button"><b>Post</b></a></br>
        </form>
    </div>
    <div id="comment_logs">
    	Loading comments...
    
</div>
</div>


<div class="footer">
<div id="txtsocially">
 <p style="text-align: left; padding-left: 450px; padding-top:0px; font-size:25px;">Connect socially with Mastanamusafir.com</p></div>
  <a href="https://www.facebook.com/chiragthakur212/"><img src="footericon/facebook.png" style="width: 70px; height: 70px; margin-left:70px; margin-top:30px;"></a>
  <div id="txtfacebook"><b>LIKE ON FACEBOOK</b></DIV>
  <a href="https://plus.google.com/"><img src="footericon/googleplus.png" style="width: 70px; height: 70px; margin-left:240px; margin-top:-95px"></a>
  <div id="txtgoogleplus"><b>FOLLOW ON GOOGLEPLUS</b></div>
  <a href="https://www.instagram.com/accounts/login/"><img src="footericon/instagram.png" style="width: 70px; height: 70px; margin-left:410px; margin-top:-95px"></a>
  <div id="txtinstagram"><b>FOLLOW ON INSTAGRAM</b></div>
  <a href="https://mobile.twitter.com/login?lang=en"><img src="footericon/twitter.png" style="width: 70px; height: 70px; margin-left:560px; margin-top:-95px"></a>
   <div id="txttwitter"><b>FOLLOW ON TWITTER</b></div>
  <a href="https://www.youtube.com/"><img src="footericon/youtube.png" style="width: 70px; height: 70px; margin-left:710px; margin-top:-95px"></a>
   <div id="txtyoutube"><b>WATCH ON YOUTUBE</b></div>

      <div id="footercontxt" ><a href="term.html" style="text-decoration:none"><c><b>Terms & Conditions </b></c> </div>
	  
</div>
<div class="copyright">
<div id="copytxt"><b>Copyright &copy 2018 Mastanamusafir.com All right reserved.</b></div>
</div>
</div>

</body>
</html>