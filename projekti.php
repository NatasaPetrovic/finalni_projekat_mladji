<?php
include "header.html";
?>

<img src="/images/ico/Material%20Icons_e87c(6)_256.png" id="UserAvatar1"  onclick="showinfouserua();proveriKolacic()" class="imgavfavse"> 
<div id="notifier_UA1">1</div>

<div id="help-drawer-right">
	<div id="banner_user">
	<button id="closeHelpUAmenu" onclick="closeHelpUAmenu()"><img src="https://preview.c9users.io/lukaratic/systemproproj1/images/ico/Material%20Icons_e5c4(0)_256.png?_c9_id=livepreview0&_c9_host=https://ide.c9.io" width="42" style="transform:rotate(180deg);">Zatvori</button></div>
	<br></br>
	<p id="NameUser">Ime nije uneto</p>
	<p id="NameMail">Email adresa nije uneta</p>
	

	
	<div id="meniuseropcije">

		<button id="menuuserkontaktbtn2chl" onclick="ChangeLogVisible()">Change Log</button><br/>
	<a href="https://systemproproj1-lukaratic.c9users.io/contact.php">	<button id="menuuserkontaktbtn1">Kontakt</button></a>
	<a href="https://systemproproj1-lukaratic.c9users.io/projekti.php">	<button id="menuuserkontaktbtn2">Projekti</button></a>
	<a href="https://systemproproj1-lukaratic.c9users.io/sablon.html">	<button id="menuuserkontaktbtn1">Naš tim</button></a>
	<a href="https://systemproproj1-lukaratic.c9users.io/index.php">			<button id="menuuserkontaktbtn2">Home</button></a>


		
	</div>
	
	
	
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
	<script>
			
			function closeLog(){
			
			document.getElementById("closeChlogw").style.top="-100%";
						document.getElementById("Changelog").style.bottom="-100%";

			}
				function ChangeLogVisible(){
						document.getElementById("closeChlogw").style.top="56px";

			document.getElementById("Changelog").style.bottom="0px";
			
			}
		</script>
			
  	<div id="Changelog">
		
		
		<center>
			
			<div id="ChangeLogwindow" style="overflow-y:scroll;">
				
				<p id="desc-Chlog" style="text-align:left;height:auto;width:75%;">
					
					- Verzija 1.0<br/>
					> Kreirana stranica i potrebni elementi<br/>
					<br></br>
					- Verzija 1.2<br/>
					> Dopunjene informacije o učenicima i kreirana traka sa prečicama ka svakom od učenika.<br/>
					<br></br>
					- Verzija 2.0<br/>
					
					> Dodata funkcija traki sa učenicima<br/>
					> Kreiran prozorčić za portfolio svakog od učenika.<br/>
					> Kreirana stranica "kontakt.php"<br/>
					<br></br>
					- Verzija 3.0<br/>
					> Poboljšan dizajn<br/>
					> Dodana potpuna responzivnost<br/>
					> Preuređen prozor za portfolio<br/>
					> Dodate nove slike i opisi učenika<br/>
					<br></br>
					- Verzija 3.1<br/>
					> Dodana slika na elementu za portfolio<br/>
					> Poboljšani efekti<br/>
					<br></br>
					- Verzija 3.1.5<br/>
					> Dodana traka za korisnika<br/>
					> "Kolačići" pušteni u rad<br/>
					> Sitne izmene<br/>
					<br></br>
					- Verzija 4<br/>
					> Poboljšanje responzivnosti<br/>
					<br></br>
					
				</p>
				
				<style>
					
					#closeChlogw{
						top:-100%;position:fixed;
						width:56px;
						border:none;
						height:56px;
						border-radius:100px;
							box-shadow:0px 5px 15px rgba(0, 0, 0, 0.3);
background-color:#007D98;
position:fixed;
transition:0.3s ease;
						right:56px;
						
						
					}
					
				</style>
				<button id="closeChlogw" onclick="closeLog()">
					<img src="https://preview.c9users.io/lukaratic/systemproproj1/images/ico/Material%20Icons_e14c(0)_512.png?_c9_id=livepreview0&_c9_host=https://ide.c9.io" width="40px">
					</button>
			</div>
			
		</center>
		
	
	</div>	
</div>
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



function showinfouserua(){
	
	document.getElementById("help-drawer-right").style.right="0px";
		document.getElementById("notifier_UA1").style.visibility="hidden";
		
}
function closeHelpUAmenu(){
	
	document.getElementById("help-drawer-right").style.right="-100%";

		
}

</script>

<center>
  
  
    <div id="main-content-window-nem" style="text-align:left;">
	</div>
	</center>