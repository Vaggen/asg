<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Medlems sida | ASG ETS2</title>
	<link rel="icon" href="../favicon.png">
</head>
<body>
	<style>
		.nav-bar {
    background: none;
    width: 100%;
    height: 75px;

    position: absolute;
    left: -10px;
    top: 0px;
}

.nav-logo {
    background: url(../images/logo.png);
    width: 150px;
    height: 75px;

    position: relative;
    left: 50px;

    background-size: 150px;
}

.nav-home {
    background: none;
    width: 75px;
    height: 20px;

    position: absolute;
    top: 20px;
    left: 1275px;

    font-size: 1.2em;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: white;

    transition: ease-in-out 0.3s;
}

.nav-home:hover {
    color: #03A9F4;
    cursor: pointer;
}

.nav-rules {
    background: none;
    width: 150px;
    height: 20px;

    position: absolute;
    top: 20px;
    left: 1375px;

    font-size: 1.2em;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: white;

    transition: ease-in-out 0.3s;
}

.nav-rules:hover {
    color: #03A9F4;
    cursor: pointer;
    text-decoration: underline #03A9F4;
    text-underline-position: under;
    text-decoration-thickness: 4px;
}


.nav-about {
    background: none;
    width: 100px;
    height: 20px;

    position: absolute;
    top: 20px;
    left: 1550px;

    font-size: 1.2em;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: white;

    transition: ease-in-out 0.3s;
}

.nav-about:hover {
    color: #03A9F4;
    cursor: pointer;
    text-decoration: underline #03A9F4;
    text-underline-position: under;
    text-decoration-thickness: 4px;
}

.nav-media {
    background: none;
    width: 100px;
    height: 20px;

    position: absolute;
    top: 20px;
    left: 1675px;

    font-size: 1.2em;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: white;

    transition: ease-in-out 0.3s;
}

.nav-media:hover {
    color: #03A9F4;
    cursor: pointer;
    text-decoration: underline #03A9F4;
    text-underline-position: under;
    text-decoration-thickness: 4px;
}

.nav-login {
    background: none;
    width: 120px;
    height: 20px;

    position: absolute;
    top: 20px;
    left: 1790px;

    font-size: 1.2em;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: white;

    transition: ease-in-out 0.3s;
}

.nav-login:hover {
    color: #03A9F4;
    cursor: pointer;
    text-decoration: underline #03A9F4;
    text-underline-position: under;
    text-decoration-thickness: 4px;
}

.site {
    background: #03A9F4;
    width: 110px;
    height: 4px;

    border-radius: 20px;

    position: absolute;
    left: 1795px;
    top: 45px;
}

button {
    background: none;
    width: 100%;
    height: 100%;

    border: none;

    transition: ease-in-out 0.3s;
}

/* Dropdown Button */
.dropbtn {
  background-color: none;
  color: white;
  padding: 16px;
  font-size: 1.2em;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  left: 1540px;
  top: -70px;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.179);
  border-radius: 10px;
  border: 2px solid white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #00000066;
    border-radius: 10px;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: none;

    color: #03A9F4;
    cursor: pointer;
    text-decoration: underline #03A9F4;
    text-underline-position: under;
    text-decoration-thickness: 4px;
}

body,html{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
}
.Section_top{
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    background-image: url(../images/image.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    justify-content: center;
    animation: change 10s infinite ease-in-out;
}
.content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-transform: uppercase;

}
.content h1{
    color: #fff;
    font-size: 60px;
    letter-spacing: 15px;
}
.content h1 span{
    color: #fff;
}
.content a{
    background: #85c1ee;
    padding: 10px 24px;
    text-decoration: none;
    font-size: 18px;
    border-radius: 20px;
    color: black;

    transition: ease-in-out 0.2s;
}
.content a:hover{
    background: #034e88;
    color: #fff;
}
@keyframes change{
    0%, 20%
    {
        background-image: url(../images/img1.jpg);
    }
    25%, 45%
    {
        background-image: url(../images/img2.jpg);
    }
    50%, 70%
    {
        background-image: url(../images/image.jpg);
    }
    75%, 95%
    {
        background-image: url(../images/img4.jpg);
    }
    100%
    {
        background-image: url(../images/img1.jpg);
    }
}

.container {
	background: rgba(0, 0, 0, 0.681);
	width: 90%;
	height: 850px;

	position: absolute;
	left: 85px;
	top: 100px;

	border-radius: 10px;
	border: 2px solid white;
}

.header {
	background: none;
	width: 450px;
	height: 50px;

	position: absolute;
	left: 0;
	top: 0;
}

.header p {
	color: white;
	font-size: 35px;

	position: absolute;
	left: 50px;
	top: 10px;

	text-decoration: underline;
	text-underline-position: under;
}

.content {
	background: none;
	width: 80%;
	height: 80%;

	border: 2px solid white;
	border-radius: 10px;

	position: absolute;
	top: 500px;
	left: 1025px;
}

.content-header {
	background: none;
	width: 350px;
	height: 50px;

	color: white;
	font-size: 20px;

	position: absolute;
	left: 10px;
	top: -5px;
}

.tutorial {
	background: none;
	width: 1225px;
	height: 550px;

	position: absolute;
	top: 75px;
	left: 75px;
}

.stage1 {
	background: none;
	width: 350px;
	height: 500px;

	position: absolute;
	top: 25px;
	left: 25px;

	border-radius: 10px;
	border: 2px solid white;
}

.stage2 {
	background: none;
	width: 350px;
	height: 500px;

	position: absolute;
	top: 25px;
	left: 440px;

	border-radius: 10px;
	border: 2px solid white;
}

.stage3 {
	background: none;
	width: 350px;
	height: 500px;

	position: absolute;
	top: 25px;
	left: 850px;

	border-radius: 10px;
	border: 2px solid white;
}

.stage1-header {
	background: none;
	width: 100%;
	height: 50px;

	position: absolute;
	left: 0;
	top: 0;
}

.stage1-header p {
	font-size: 25px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

	position: absolute;
	left: 140px;
	top: -15px;

	color: white;
}

.stage1-text {
	background: none;
	width: 100%;
	height: 100px;

	position: absolute;
	left: 0;
	top: 50px;

	text-align: center;
}

.stage1-text p {
	font-size: 15px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

	position: absolute;
	left: 0px;
	top: -15px;

	color: white;
}

.stage1-img {
	background: url(../images/stage1.png);
	background-size: 350px;
	background-repeat: no-repeat;
	background-position-y: 50px;
	width: 100%;
	height: 275px;

	position: absolute;
	top: 200px;
	left: 0;
}

.stage2-header {
	background: none;
	width: 100%;
	height: 50px;

	position: absolute;
	left: 0;
	top: 0;
}

.stage2-header p {
	font-size: 25px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

	position: absolute;
	left: 140px;
	top: -15px;

	color: white;
}

.stage2-text {
	background: none;
	width: 100%;
	height: 200px;

	position: absolute;
	left: 0;
	top: 50px;
}

.stage2-text p {
	font-size: 15px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

	position: absolute;
	left: 10px;
	top: -15px;

	color: white;
}

.stage2-img {
	background: url(../images/stage2.png);
	background-size: 315px;
	background-repeat: no-repeat;
	background-position-x: 15px;
	width: 100%;
	height: 250px;

	position: absolute;
	top: 250px;
	left: 0;
}

.stage3-header {
	background: none;
	width: 100%;
	height: 50px;

	position: absolute;
	left: 0;
	top: 0;
}

.stage3-header p {
	font-size: 25px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

	position: absolute;
	left: 140px;
	top: -15px;

	color: white;
}

.stage3-text {
	background: none;
	width: 100%;
	height: 50px;

	position: absolute;
	left: 0;
	top: 50px;
}

.stage3-text p {
	font-size: 15px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

	position: absolute;
	left: 10px;
	top: -15px;

	color: white;
}

.stage3-img {
	background: url(../images/stage3.png);
	background-size: 350px;
	background-repeat: no-repeat;
	background-position-y: 50px;
	width: 100%;
	height: 250px;

	position: absolute;
	top: 200px;
	left: 0;
}

.footer {
    background: #F5FAFD;
    width: 100%;
    height: 100px;

    position: absolute;
    top: 1000px;

    color: gray;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 20px;
    text-align: center;
}

.footer p {
    position: absolute;
    top: 20px;
    left: 40%;
}
	</style>

<div class="Section_top">
    </div>
    <div class="nav-bar">
        <div class="nav-logo"></div>
        <a href="../index.html">
        <button class="nav-home">
            <b>HEM</b>
        </button>
    </a>
        <a href="html/rules.html">
        <button class="nav-rules">
            <b>REGELVERK</b>
        </button>
    </a>
    <div class="dropdown">
        <button class="dropbtn"><b>OM OSS</b></button>
        <div class="dropdown-content">
          <a href="html/contact.html">Kontakt</a>
          <a href="html/administrator.html">Administrationen</a>
        </div>
      </div>
      <a href="html/media.html">
    <button class="nav-media">
        <b>MEDIA</b>
    </button>
</a>
    <a href="http://localhost/asg/login/logout.php">
    <button class="nav-login">
        <b>LOGGA UT</b>
    </button>
</a>
        <div class="site"></div>
    </div>

	<div class="container">
		<div class="header">
			<p> Välkommen, <?php echo $user_data['user_name']; ?></p>
		</div>
		<div class="content">
			<div class="content-header">
				<p>Teamspeak Uppsättning</p>
			</div>
			<div class="tutorial">
				<div class="stage1">
					<div class="stage1-header">
						<p>Steg 1</p>
					</div>
					<div class="stage1-text"><p>Installera Teamspeak 3 från "teamspeak.com", sedan skapar du ett bokmärke för vårat community</p></div>
					<div class="stage1-img"></div>
				</div>
				<div class="stage2">
					<div class="stage2-header">
						<p>
							Steg 2
						</p>
					</div>
					<div class="stage2-text">
						<p>
							1. Döp servern till ASG. <br>
							2. Använd helst ditt ingame namn som användarn namn för enklare lära känna varandra. <br>
							3. Adress är "redice.no-ip.com" utan hartassarna. <br>
							4. Inget lösen (än iaf). <br>
							5. Spara genom att klicka på "ok".
						</p>
					</div>
					<div class="stage2-img"></div>
				</div>
				<div class="stage3">
					<div class="stage3-header">
						<p>
							Steg 3
						</p>
					</div>
					<div class="stage3-text">
						<p>
						Logga in genom att klicka på "ASG".
						</p>
					</div>
					<div class="stage3-img"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
        <p>©  2023 AB Svenska Godbilcentraler ETS2 och ATS2</p>
    </div>

</body>
</html>