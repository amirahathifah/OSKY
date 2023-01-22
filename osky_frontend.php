<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		<script src="https://kit.fontawesome.com/b177d68332.js" crossorigin="anonymous"></script>
		<style>
			body {
				margin: 0;
				font-family: 'Montserrat', sans-serif;
				background-color: #00AEEF;
			}

			.topnav {
				position: relative;
				background-color: #fff;
				text-align: center;
				padding-top: 20px;
				padding-bottom: 30px;
			}

			.topnav a {
				color: black;
				padding: 14px;
				font-size: 18px;
				text-decoration: none;
				margin-right:20px;
			}

			.topnav a:hover {
				border-bottom: 4px solid #00AEEF;
			}

			.nav_icon {
				padding-left: 660px;
			}

			.nav_icon a{
				color: #00AEEF;
				font-size: 15px;
				border-bottom: 0 !important;
			}

			.nav_icon a:hover {
				color: #096f95;
			}
			
			img {
				width: 150px;
				padding-right: 20px;
				margin-left: auto;
				margin-right: auto;
			}

			.dropdown {
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				margin-left: -620px; 
				margin-top:50px;
				min-width: 700px;
				background-color: #fff;
			}

			.show {
				display: inline-block;
			}

			.grid-container {
				display: grid;
				justify-content: space-evenly;
				text-align: center;
				grid-template-columns: 170px 170px 170px 170px;
				padding-top:10px !important;
			}

			.grid-container a{
				color: black;
				font-size: 15px;
				display: inline-block;
			}

			.grid-container > div:nth-child(n+1):nth-child(-n+3)  {
				border-right: 1px solid black;
			}

			.btn{
				position: relative;
				bottom: -25px; 
				border-radius: 60px; 
				padding: 0.25em; 
				background-color:#fff;
			}
			
			/* Responsive navigation menu (for mobile devices) */
			@media screen and (max-width: 600px) {
				.topnav a{
					float: none;
					display: block;
					text-align: center;
				}
				img{
					float: none;
					display: block;
				}
				.nav_icon{
					display: inline;
				}
				.nav_icon a {  
					display: inline;
				}

				.dropdown-content {
					position: relative;
					margin: 0px; 
					min-width:20px;
					background-color:#d0f2ff;
				}
				.grid-container{
					position: relative; 
					display: block;
				}
				.grid-container > div:nth-child(n+1):nth-child(-n+3){
					border: 0;
				}
				.btn{
					display:none;
				}
			}
		</style>
	</head>
	<body>
		<!-- Top navigation -->
		<div style="padding-left:16px"></div>
		<div class="topnav">
			<div class="nav_icon">
				<a onclick="youtube()"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				<a onclick="twitter()"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a onclick="linkedin()"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="#logout">Logout</a>
				<a href="#dashboard">My Dashboard</a>
			</div>
            <img href="#default" src="https://i.imgur.com/9fx89Br.png">
			<a href="#product">Product</a>
			<a href="#safetytools">Safety Tools</a>
			<a href="#training">Training</a>
			<a href="#engagemnet">Engagement</a>
			<div class="dropdown">
				<a href="#membership" class="dropbtn" onclick="membership()">Membership</a>
				<div id="myDropdown" class="dropdown-content">
					<div class="grid-container">
						<div><a href="#news">Latest News</a></div>
						<div><a href="#newsletters">Subscribe to Newletters</a></div>
						<div><a href="#videos">Videos</a></div>  
						<div><a href="#publications" >Publications</a></div>
					</div>
					<i class="fa fa-times-circle fa-2x btn" aria-hidden="true"></i>
				</div>
			</div>
			<a href="#news">News</a>
			<a href="#about">About</a>
		</div>
	</body>
</html>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function membership() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function youtube() {
    let text;
	if (confirm("Are you sure you want to navigate away from this page?") == true) {
		text = "navigate to another page!";

	} else {
		text = "cancel";
	}
}
function twitter() {
    let text;
	if (confirm("Are you sure you want to navigate away from this page?") == true) {
		text = "navigate to another page!";

	} else {
		text = "cancel";
	}
}
function linkedin() {
    let text;
	if (confirm("Are you sure you want to navigate away from this page?") == true) {
		text = "navigate to another page!";

	} else {
		text = "cancel";
	}
}
</script>
