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

	<div id="test"><h1>Robmielis Antiquit&auml;ten Inc.</h1></div>
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
		
			<table>
  <tr>
    <th><h1>Willkommen bei Robmielis</h1></th>
	<th></th>
  </tr>
  <tr>
    <td rowspan="3" valign="top"><p>On small screens, the page content will be pushed off canvasdfadfdfs.</p>
                        <p>Make sure to keep all page content within theöaksdjfölksdjfaösldkfja</p>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy<br>
						eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
						At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,<br>
						no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,<br>
						consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et<br>
						dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo<br>
						dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem<br> 
						ipsum dolor sit amet.</p></td>
						
	<!--			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>		-->
						
    <td><img class="preview" src="images/saebel.jpg" width="200" height="200" alt="Bambus in den Wolken"><br>
	Antike Waffen aus Alten Zeiten</td>
  </tr>
  <tr>
    <td><img class="preview" src="images/schmuck.jpg" width="200" height="200" alt="Bambus in den Wolken"><br>
	Alter Schmuck und antike Reliquien</td>
  </tr>
  <tr>
	<td><img class="preview" src="images/schrank.jpg" width="200" height="200" alt="Bambus in den Wolken"><br>
	Alte M&ouml;bel</td>
  </tr>
</table>
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
