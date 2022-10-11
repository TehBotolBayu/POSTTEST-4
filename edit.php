<?php
error_reporting(E_ERROR);
?>
<!DOCTYPE html>

<head>
	<title>Travel.ink</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="adminstyle.css">
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

<body id="beranda">
	<header>
		<div id="head">
			<input type="checkbox" id="toggle">
			<label for="toggle" id="sidebutton">&#9776;</label>
			<p id="judul">Travel.ink</p>
			<nav id="sidebar">
				<ul>
					<li><a href="profile.php" class="q">Profile</a></li>
					<li><a href="web_user.php#beranda" class="q">Beranda</a></li>
					<li><a href="web_user.php#Destination" class="q">Destinasi</a></li>
					<li><a href="web_user.php#AboutMe" class="q">About Me</a></li>
					<li><a class="q">Dark Theme
						<input type="checkbox" id="switch" />
						<label id="lbl" for="switch">Toggle</label>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>

<div class="fom">
    <h1>Add News</h1>

	<form method="POST" action="" enctype="multipart/form-data">	
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="url">User Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="uname" name="uname">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="url">Real Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="date">Date of Birth:</label>
                </div>
                <div class="col-90">
                    <input type="date" id="date" name="date">
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Upload" name="submit">
            </div>
        </div>
	</form>
    <script type="text/javascript" src="script.js">     
    </script>
    <script>

    //    alert(a[1]);
        // function f(){
        //     var a = document.getElementById("url").value;
        //     sessionStorage.setItem("url", a);
        // }

    </script>
    <?php
        session_start();
        $_SESSION['uname'] = $_POST['uname'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['date'] = $_POST['date'];
    ?>

</div>
</body>


