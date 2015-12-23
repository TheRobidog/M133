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
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">Login</a>
                </li>
                <li>
                    <a href="#">Warenkorb</a>
                </li>
                <li>
                    <a href="#">Artikel</a>
                </li>
                <li>
                <!--    <a href="#">Kategorie</a>
					<label>Kategorie</label>
						<select id = "myList">
						   <option value = "1">Antike waffen</option>
						   <option value = "2">Alter Schmuck</option>
						   <option value = "3">Alte M&ouml;bel</option>
						</select>-->
					<li><a href="#">Kategorie &raquo;</a>
	                    <ul>
	                        <li><a href="#">Alte Waffen</a></li>
	                        <li><a href="#">Alter Schmuck</a></li>
	                        <li><a href="#">Alte M&ouml;bel</a></li>
	                    </ul>                    
	                </li>	
						
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
		<!-- <section> -->
        <div id="page-content-wrapper">
		
			<!-- HIE CHUNTS DS VERDAMMTE LOGIN INDE WUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU -->

		<?php
            session_start();
			include_once('controller/warenkorbcontroller.php');
			include_once('model/warenkorb.php');
			include_once('controller/antiquitaetcontroller.php');
			include_once('model/antiquitaet.php');
			include_once('controller/accountcontroller.php');
			include_once('model/account.php');

			$accocont = new AccountController();
			$acco = $accocont->LoadAcc($_SESSION['id']);

			$cartcont = new WarenkorbController();
			$cart = $cartcont->GetByAccount($acco);

			echo $cart->getPrice();
			echo '<table>';

			foreach($cart->getAntiquitaet() as $anti){
				$starter = '<tr class="article"><td><img class="smallpreview" width="200" height="200" alt="Artikelbild" src="';
				$middle = '" alt="Artikelbild"></td><td>';
				$end = '</td></tr>';

				foreach($list as $element){
				echo $starter . $anti->getImage() . $middle . $anti->getName() . ': ' . $anti->getDescription() . '<br>' . $anti->getPrice() . $end;
                }
            }

            exit;
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