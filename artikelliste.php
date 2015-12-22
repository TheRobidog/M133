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
		
		<!-- This with PHP --> 
		
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

			echo '<table>';
		?>
		
		<!-- Test

		<table>
		<tr class="article">
		<td>
			<img class="smallpreview" src="katana.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Dieses antike Katana kommt aus Japan von der grossen Sengoku Zeit wo
			irgendein Samurai dieses Schwert in den Kampf geführt hat. Dieses Feine st&uuml;ck hat all diese Jahre wunderbar überstanden und hat unermesslichen wert<br>
			Preis: 38'500 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="zürcher kavallerie schwert.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Dieses antike Kavallerie Schwert wurde in der Schweiz gefunden und ist bereits sehr alt. Es wurde von einem Zürcher geführt und damit wurde Blut vergossen.
			Das alte Schwert hat unglaublichen Sammlerwert.<br>
			Preis: 8'750 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="säbel.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Dieser Alte Japanischer Marine Säbel wurde in der Besetzungszeit hergestellt und ist bereits sehr alt und hat unermesslichen Sammlerwert.
			Er wurde als vermutlich als Offizierss&auml;bel verwendet da er einige verzierungen an der Schwertscheide und der scheiben artigen "Guard".<br>
			Preis: 78'816 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="antikerRing.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Dieser Antike Ring wurde im Mittelalter hergestellt und ist bereits mehrere Jahrhunderte alt. Dieser Ring
			gehörte der Königsfamilie von Persien und ist unbezahlbar und ist das teuerste Schmuckstück auf der Welt.<br>
			Preis: 5'800'750'555 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="schmuck.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Alte Diademe und ketten mit Diamaten, Rubinen, Smaragden und Saphiren. Diese Ansammlung von Ketten hat einen unglaublichen Sammlerwert,
			weil diese Stücke von vielen Adelsfamilien einst Erbstücke/ Familienstücke waren. Sie sind alt und schön.<br>
			Preis: 1'580'750 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="schmuck2.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Die ganze Schatulle mitsamt den Ganzen goldenen Ketten und Armbänder welche noch mit Smaragden verziert sind haben einen hohenwert
			und wurden ihrer Zeit wahrscheinlich von Fürsten und Lehnsherren getragen bis diese Untergiengen.<br>
			Preis: 45'875 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="schrank.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Dieser alte Schrank welcher aus China stammt wurde von Leuten verwendet die der Obersten Personenschicht angehörten, zu vergleichen
			mit unserem ehemaligen Adel. Der Schrank hat einen Sammlerwert.<br>
			Preis: 5'450 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="eropäischerSchrank.png" alt="Bambus in den Wolken">
		</td>
		<td>
			Dieser Schrank welcher aus Europa stammt ist ein Zeichen der damaligen weit Fortgeschrittenen Handwerkskunst und wurde für irgend einen 
			Adeligen hergestellt.<br>
			Preis: 7'500 CHF
		</td>
		</tr>
		
		<tr class="article">
		<td>
			<img class="smallpreview" src="schrank2.jpg" alt="Bambus in den Wolken">
		</td>
		<td>
			Dieser alte Japanische Schrank wurde vermutlich in einer Burg eines Daymio verwendet und hat durch das einen erheblichen Sammlerwert.
			Dieser art Schrank war in der Sengoku Zeit üblich und das dieser Schrank immernoch in so guter vergassung ist, ist erstaunlich.<br>
			Preis: 8'800 CHF
		</td>
		</tr>
				
		</table>

		-->
		
		<!-- End PHP -->
		
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