<!DOCTYPE HTML>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="sidebar.css">

</head>

<body>

<div id="test"><h1>Robmielis Antiquit&auml;ten Inc. Artikel</h1></div>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="cart.php">Warenkorb</a>
                </li>
                <li>
                    <a href="artikelliste.php">Artikel</a>
                </li>
                <li>		
				<li>Kategorie &raquo; 
	                    <ul>
	                        <li><a href="artikelliste.php?cat=1">Alte Waffen</a></li>
	                        <li><a href="artikelliste.php?cat=2">Alter Schmuck</a></li>
	                        <li><a href="artikelliste.php?cat=3">Alte M&ouml;bel</a></li>
	                    </ul>                    
	                </li>					
                </li>
            </ul>
        </div>
		<!-- /#sidebar-wrapper -->
		
		<div id="page-content-wrapper">
		<?php
			include_once('controller/antiquitaetcontroller.php');
			include_once('model/antiquitaet.php');

			echo '<table>';

			$Controller = new AntiquitaetController();
			if(isset($_GET['cat'])){
				$list = $Controller->List($_GET['cat']);
			}else{
				$list = $Controller->List();
			}

			$starter = '<tr class="article"><td><img class="smallpreview" src="images/';
			$middle = '" alt="Artikelbild"></td><td>';
			$end = '</td></tr>';

			foreach($list as $element){
				echo $starter . $element->getImage() . $middle . $element->getName() . ': ' . $element->getDescription() . '<br>' . $element->getPrice() . $end;
			}

			echo '</table>';
		?>
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