<?php
include "header.html"
?>
<head>
  
  <script>
    
    
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function proveriKolacic() {
    var user=getCookie("username");
     var mail=getCookie("email");
    if (user != "") {
       document.getElementById("NameUser").innerHTML = "Ime : " + user ; 
       
    } else {
       user = prompt("Unesite vaše ime :","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
    
    
    if (mail != "") {
         document.getElementById("NameMail").innerHTML = "Email : " + mail ;
       
    } else {
       mail = prompt("Unesite vaš email :","");
       if (mail != "" && mail != null) {
           setCookie("email", mail, 30);
       }
    }
}


  </script>

	
	
	<style>
	#ChangeLogwindow{
		
		width:75%;
		height:75%;
		background-color:#ffffff;
		border-radius:3px;
			box-shadow:0px 5px 15px rgba(0, 0, 0, 0.3);

		
	}
	#Changelog{
background-color:rgba(0, 125, 152, 0.3);
height:100%;
width:100%;
position:fixed;
left:0px;
right:0px;

bottom:-100%;
z-index:9999999999;
transition:0.3s ease;
		
	}
#changeLogActivator{
	margin-top:25px;
		width:75%;
	height:25px;
	border-radius:3px;
	border:none;
	background-image:url("http://belgradecat.com/wp-content/uploads/2015/04/IMG_3156.jpg");
	color:#ffffff;
	
	box-shadow:0px 5px 15px rgba(0, 0, 0, 0.3);
		transition:0.2s ease;
	position:relative;
	margin-bottom:0px;
	
}
	
	
	
		#banner_user{
			background-image:url("http://belgradecat.com/wp-content/uploads/2015/04/IMG_3156.jpg");
			width:100%;
			height:200px;
			background-size:100% 100%;
			
			
		}
		#NameUser{
			
			font-size:16px;
padding-left:20px;			
		}
		#NameMail{
			
			font-size:16px;
padding-left:20px;
			
		}
		
		#meniuseropcije{
			
			width:100%;
			height:115px;
			position:fixed;
			bottom:0px;
			background-color:rgba(0, 0, 0, 0.1);
			padding:25px;
			
		}
#menuuserkontaktbtn1{
	
	width:auto;
	height:25px;
	border-radius:3px;
	border:none;
	background-image:url("http://belgradecat.com/wp-content/uploads/2015/04/IMG_3156.jpg");
	color:#ffffff;
	
	box-shadow:0px 5px 15px rgba(0, 0, 0, 0.3);
		transition:0.2s ease;

}

#menuuserkontaktbtn2{
	
	width:auto;
	height:25px;
	border-radius:3px;
	border:none;
	background-image:url("http://belgradecat.com/wp-content/uploads/2015/04/IMG_3156.jpg");
	
	color:#ffffff;
	
	box-shadow:0px 5px 15px rgba(0, 0, 0, 0.3);
	transition:0.2s ease;
}
#menuuserkontaktbtn2chl{
	
	width:auto;
	height:25px;
	margin-bottom:15px;
	border-radius:3px;
	border:none;
	background-image:url("http://belgradecat.com/wp-content/uploads/2015/04/IMG_3156.jpg");
	
	color:#ffffff;
	
	box-shadow:0px 5px 15px rgba(0, 0, 0, 0.3);
	transition:0.2s ease;
}


#menuuserkontaktbtn1:active{
	
	
	height:25px;
	border-radius:3px;
	border:none;
	background-image:url("http://belgradecat.com/wp-content/uploads/2015/04/IMG_3156.jpg");
	color:#ffffff;
	
	box-shadow:0px 7px 15px rgba(0, 0, 0, 0.4);
	
}

#menuuserkontaktbtn2:active{
	

	height:25px;
	border-radius:3px;
	border:none;
	background-image:url("http://belgradecat.com/wp-content/uploads/2015/04/IMG_3156.jpg");
	
	color:#ffffff;
	
	box-shadow:0px 7px 15px rgba(0, 0, 0, 0.4);
	
}

	</style>
	
		
	
	
</div>

<center>

  
<title>Kontakt</title>
<link rel="stylesheet" href="cssmain.css">
</head>
<body onload="proveriKolacic()">
    <div class="container">
        <div class="jumbotron">
        <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Vaš email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="message" class="col-sm-2 control-label">Poruka</label>
    <div class="col-sm-6">
        <textarea name="message" rows = "4" class ="form-control" id="msgfield1"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="btn1btn-default"><img src="https://preview.c9users.io/lukaratic/systemproproj1/images/ico/Material%20Icons_e163(0)_512.png?_c9_id=livepreview0&_c9_host=https://ide.c9.io" width="40"></button>
    </div>
  </div>
</form>
       
	</div>
    </div>
<<<<<<< 5861949549783829c3591f858ebc72931a3e7caf
    <footer id="foteraja">
        &copy; Copyright 2016, Created by our team. All rights reserved.
    </footer>
=======
    
>>>>>>> sve i svasta
    </div>

<style>
  
 .form-control{
   
   border:none;
   border-bottom:solid 2.5px #008a8a;
   
 }
 #btn1btn-default{
   
    border:none;
    position:relative;
   
    background-color:#008a8a;
  
    
    border-radius:100px;
   
    width:56px;
    height:56px;
  box-shadow:0px 7.5px 10px rgba(0, 0, 0, 0.2);
   
   transition:0.3s ease;
 }
 #btn1btn-default:hover{
   background-color:#007c7c;
   border-bottom:0px;
   
 }
 #btn1btn-default:active{
   background-color:#006060;
   border-bottom:0px;
     box-shadow:0px 9px 15px rgba(0, 0, 0, 0.3);

 }
  
</style>

</body>
</html>

