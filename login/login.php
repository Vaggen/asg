<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "Felaktigt användarnamn eller lösenord!";
		}else
		{
			echo "Felaktigt användarnamn eller lösenord!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Logga in | ASG ETS2</title>
	<link rel="icon" href="../favicon.png">
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: 2px solid #fff;
		width: 290px;
		background: none;
		color: white;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background: none;
		border: 2px solid white;

		position: absolute;
		top: 172.5px;
		left: 117.5px;

		border-radius: 10px;

		cursor: pointer;

		transition: ease-in-out 0.3s;
	}

	#button:hover {
		background: rgba(255, 255, 255, 0.595);
	}

	#box{

		background-color: #0000009a;
		border: 2px solid white;
		border-radius: 10px;
		width: 300px;
		padding: 20px;

		position: absolute;
		left: 780px;
		top: 375px;
	}

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
    width: 110px;
    height: 20px;

    position: absolute;
    top: 20px;
    left: 1800px;

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
    left: 1800px;
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
        <a href="../html/rules.html">
        <button class="nav-rules">
            <b>REGELVERK</b>
        </button>
    </a>
    <div class="dropdown">
        <button class="dropbtn"><b>OM OSS</b></button>
        <div class="dropdown-content">
          <a href="../html/contact.html">Kontakt</a>
          <a href="../html/administrator.html">Administrationen</a>
        </div>
      </div>
      <a href="../html/media.html">
    <button class="nav-media">
        <b>MEDIA</b>
    </button>
</a>
    <a href="http://localhost/asg/login/login.php">
    <button class="nav-login">
        <b>LOGGA IN</b>
    </button>
</a>
        <div class="site"></div>
    </div>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Logga in</div>

			<input id="text" type="text" name="user_name" placeholder="Användarnamn"><br><br>
			<input id="text" type="password" name="password" placeholder="Lösenord"><br><br>

			<input id="button" type="submit" value="Logga in"><br><br>
		</form>
	</div>

	<div class="footer">
        <p>©  2023 AB Svenska Godbilcentraler ETS2 och ATS2</p>
    </div>
</body>
</html>