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
					<li><a href="#" class="q">Admin Menu</a></li>
					<li><a href="web_admin.php#beranda" class="q">Beranda</a></li>
					<li><a href="web_admin.php#Destination" class="q">Destinasi</a></li>
					<li><a href="web_admin.php#AboutMe" class="q">About Me</a></li>
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

	<form method="POST" action="upload.php" enctype="multipart/form-data">	
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="url">News URL:</label>
                </div>
                <div class="col-90">
                    <input type="url" id="url" name="url" placeholder="www.example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="date">Date:</label>
                </div>
                <div class="col-90">
                    <input type="date" id="date" name="date">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="num">News Number:</label>
                </div>
                <div class="col-90">
                    <input type="number" id="num" name="num">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="title">News Title:</label>
                </div>
                <div class="col-90">
                    <textarea name="title" id="title" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="city">Image:</label>
                </div>
                <div class="col-90">
                    <input type="file" name="fileToUpload" id="fileToUpload">
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
</div>
</body>


