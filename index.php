<?php
    require_once 'data/_data.php';

    // TODO: Lire et mettre à jour l'id de l'employé en Query string
    //Get id from $_GET (url parameters). If no id in url, get employer id 102
    //---------------------------------------------------------------------------------------------------------------------
    $emp_id = $_GET['id'];

    if($emp_id == ""){
        $emp_id = 102;
    }

    $liste_employes = get_employes(); // Liste des noms de tous les employés
    $emp_data = $liste_employes[$emp_id];
    $agenda = get_agenda($emp_id);
?>
<html>
	<head>
        <meta charset = "UTF-8" /><!--- HTML charset declaration--- !-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/><!--- Guaranty UI responsiveness--- !-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--- Edge browse compatibility--- !-->
        <title>Agenda Cabinet Médical</title><!--- Document title--- !-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!--- BootStrap CSS online library--- !-->
        <link href="style/main.css" rel="stylesheet"/><!--- CSS local library--- !-->
	</head>


	<body>
        <!PHP request _view_header.php file
        ----------------------------------------------------------------------------------------------------------------->
		<?php require_once('view_bloc/_view_header.php') ?>
        <div class="spacer">
            <div>


                <!Employee activity
                --------------------------------------------------------------------------------------------------------->
                <h2>Activité de l'employé <?php echo $emp_data['emp_name']  . " = " . $emp_data['emp_type']?></h2>


                <!Employee menu
                --------------------------------------------------------------------------------------------------------->
                <div>
                    <?php
                        foreach($liste_employes as $key => $employe){
                            echo "<li><a href='index.php?id=" . $key . "'>" . $employe["emp_name"] . "</a></li> ";
                        }
                    ?>
                </div>
            </div>


            <!Employee morning schedule
            ------------------------------------------------------------------------------------------------------------->
            <div id="agenda">
                <table>
                    <tr><th class="text">Heure</th><th class="text">Activité</th></tr>
                    <tr><th class="text">--------</th><th class="text">-----------</th></tr>
                    <?php
                        // TODO: Afficher l'agenda de l'employé
                        foreach($agenda as $key => $value){
                            echo "<tr><th class='text'>" . $key . " H</th><th>"  . $value . "</th></tr>";
                        }
                    ?>
                </table>
            </div>


            <!PHP request _view_footer.php file
            ------------------------------------------------------------------------------------------------------------->
            <?php require_once('view_bloc/_view_footer.php') ?>
        </div>


        <!Script declaration
        ----------------------------------------------------------------------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!--- Jquery online library--- !-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!--- BootStrap online JS library--- !-->
        <script src="js/functions.js"></script><!--- Locl js library--- !-->
	</body>
</html>