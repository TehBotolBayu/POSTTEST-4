<?php
session_start();
?>
<!DOCTYPE html>

<head>
	<title>Travel.ink</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="profile.css">
</head>

<body id="beranda">
	<header>
		<div id="head">
			<input type="checkbox" id="toggle">
			<label for="toggle" id="sidebutton">&#9776;</label>
			<p id="judul">Travel.ink</p>
			<nav id="sidebar">
				<ul>
					<li><a href="#" class="q">Profil</a></li>
					<li><a href="web_user.php#beranda" class="q">Beranda</a></li>
					<li><a href="web_user.php#Destination" class="q">Destinasi</a></li>
					<li><a class="q">Dark Theme
						<input type="checkbox" id="switch" />
						<label id="lbl" for="switch">Toggle</label>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>
    <h1 id="AboutMe" align="center">My Profile</h1>
    <div class="profile">
        <div class="profile-content">
            <div class="image">
                <img src="asset/akun.png">
            </div>
            <div class="icon">
            </div>
            <div class="identity">
                <table>
                    <tr>
                        <th>
                            Username 
                        </th>
                        <td>
                            : <?php echo $_SESSION['uname']; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Account
                        </th>
                        <td>
                            : <?php echo $_SESSION['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            : <?php echo $_SESSION['name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Date of Birth
                        </th>
                        <td>
                            : <?php echo $_SESSION['date']; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div id="n">
        <a href="edit.php" style="text-decoration: none">
        <div id="edit">
            Edit
        </div>
        </a>
</div>
    <footer>

    </footer>
    <script type="text/javascript" src="script.js">
    </script>
</body>
    
