<!DOCTYPE HTML>

<html>

<head>
	<title>Robmielis Antiquit&auml;ten Inc.</title>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="sidebar.css">

</head>


<body>

	<div id="test"><h1>Robmielis Antiquit&auml;ten Incorporation Login</h1></div>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="register.php">Registrieren</a>
                </li>
                <li>
                    <a href="cart.php">Warenkorb</a>
                </li>
                <li>
                    <a href="article.php">Artikel</a>
                </li>
                <li>
                    Kategorie &raquo;
                    <ul>
                        <li><a href="articles.php?cat=1">Alte Waffen</a></li>
                        <li><a href="articles.php?cat=2">Alter Schmuck</a></li>
                        <li><a href="articles.php?cat=3">Alte M&ouml;bel</a></li>
                    </ul>                       
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
		<!-- <section> -->
        <div id="page-content-wrapper">
		
			<!-- HIE CHUNTS DS VERDAMMTE LOGIN INDE WUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU -->

			<h1>Login</h1>
		<form action="verify.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" required><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required><br>
			<input type="submit" value="Login">
		</form>
		<a href="register.php">Register</a>
		<?php
			session_start();
            echo $_SESSION['name'];
			if(isset($_SESSION['name'])){
				header("Location: index.php");
			}
			if(isset($_GET['createdacc'])){
				echo "Account has been created";
			}
		?>

        </div>
		
		
		
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>


</html>
