<?php

    require_once 'data/_data.php';

    // TODO: Lire et mettre à jour l'id de l'employé en Query string
    // Get id from $_GET (url parameters). If no id in url, get employer id 102
    //------------------------------------------------------------------------------------------------------------------->
    $emp_id = (isset($_GET['id'])) ? $_GET['id'] : '102';

    $liste_employes = get_employes(); // Liste des noms de tous les employés
    $emp_data = $liste_employes[$emp_id];
    $agenda = get_agenda($emp_id);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Agenda-Clinique</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css" >
    </head>
    <body>


<! FRONTPAGE SECTION
------------------------------------------------------------------------------------------------------------------------------------------------------>
        <div class="wrapper">
            <header>
                <div>
                    <div id="nom_clinique">
                        <h1 style="text-align: center"><?php echo NOM_CLINIQUE; ?></h1>
                    </div>
                    <div>
                        <img src="images/logo.jpg">
                    </div>
                </div>
            </header>


            <div>
                <h3>Activité de l'employé <?php echo $emp_data['emp_name']  . " = " . $emp_data['emp_type']?></h3>
                <div class="container marketing">
                    <div class="col-lg-6">
                        <?php
                        foreach($liste_employes as $key => $employe){
                            echo "<li><a href='index.php?id=" . $key . "'>" . "(" . $key . ") " . $employe["emp_name"] .  "</a></li> ";
                        }
                        ?>
                    </div>


                    <div class="col-lg-6 text-center">
                        <table class="col-lg-7">
                            <tr> <th>Heure   </th><th>Activité   </th> </tr>
                            <tr> <th>--------</th><th>-----------</th> </tr>
                            <?php
                            foreach($agenda as $key => $value){
                                echo "<tr><th class='text'>" . $key . " H</th><th>"  . $value . "</th></tr>";
                            }
                            ?>
                        </table>
                    </div>


                    <div class="button">
                        <input id="pop_newUser" type="button" value="Nouvelle employé">
                    </div>
                </div>
            </div>


            <!Disclaimer block
            ------------------------------------------------------------------------------------------------------------->
            <div>
                <br>
                <p class="text-center">&copy; 2015 iSi-productions &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </div>
        </div>


<! FORM SECTION
------------------------------------------------------------------------------------------------------------------------------------------------------>
        <div>
            <div class="modal fade" id="newUser">
                <div class="modal-dialog">
                    <div class="modal-content">


                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title text-center">Nouvelle horraire</h1>
                        </div>


                        <div class="modal-body">
                            <form>

                                <! Error messages
                                ----------------------------------------------------------------------------------------->
                                <div id="errorMessage" class="col-lg-12 alert alert-danger hidden text-center" role="alert">
                                    Vous devez completer TOUS les champs du formulaire
                                </div>


                                <! Success message
                                ----------------------------------------------------------------------------------------->
                                <div id="success" class="col-lg-12 alert alert-success hidden text-center" role="alert">
                                    Merci d'avoir tout remplie!
                                </div>


                                <! Name field
                                ----------------------------------------------------------------------------------------->
                                <div class="col-lg-12">

                                    <div class="col-lg-12">
                                        <h3><span class="label label-danger text-center">Nom</span></h3>
                                    </div>

                                    <div class="form-group" id="nameField">
                                        <input type="text" class="form-control" id="inputName" placeholder="Nom">
                                    </div>
                                </div>


                                <! ID field
                                ----------------------------------------------------------------------------------------->
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">

                                    <div class="col-lg-12">
                                        <h3><span class="label label-danger text-center">ID</span></h3>
                                    </div>

                                    <div class="form-group" id="idField">
                                        <input type="text" class="form-control" id="inputID" placeholder="ID" maxlength="3">
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>


                                <! Title field
                                ----------------------------------------------------------------------------------------->
                                <div class="col-lg-12">

                                    <div class="col-lg-12">
                                        <h3><span class="label label-danger text-center">Titre</span></h3>
                                    </div>

                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8" id="titleField">
                                        <select class='form-control' id="inputTitle">
                                            <?php
                                                foreach($totalTitles as $title) {
                                                    echo "<option value='" . $title . "'>" . $title . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>


                                <! Hour field
                                ----------------------------------------------------------------------------------------->
                                <div class="col-lg-6">

                                    <div class="col-lg-12">
                                        <h3><span class="label label-danger text-center">Heure</span></h3>
                                    </div>

                                    <div class="col-lg-12">
                                        <table>
                                            <tr> <th>--------</th></tr>
                                            <?php
                                                foreach($totalHours as $hour) {
                                                    echo "<tr><th>" . $hour . "</th></tr>";
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>


                                <! Activity fields
                                ----------------------------------------------------------------------------------------->
                                <div class="col-lg-6">

                                    <div class="col-lg-12">
                                        <h3><span class="label label-danger text-center">Activité</span></h3>
                                    </div>

                                    <div class="col-lg-12">
                                        <table>
                                            <tr><th>--------</th></tr>
                                            <?php
                                                for($i=1; $i <= count($totalHours); $i++) {
                                                    echo "<tr><th><select style='width:100%;'>";

                                                        $activities = get_activites();
                                                        echo "<option value='Hors'>Hors</option>";

                                                        foreach($activities as $activity) {
                                                            if ($activity != "Hors"){
                                                                echo "<option value='" . $activity . "'>" . $activity . "</option>";
                                                            }
                                                        }
                                                    echo "</select></th></tr>";
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>


                                <! Submit button
                                ----------------------------------------------------------------------------------------->
                                <div class="col-lg-12">
                                    <div class="col-lg-12 text-right">
                                        <br/>
                                        <button id="formSubmit" type="button" class="btn btn-info">Ajouter horraire</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <! Closing form block
                        ----------------------------------------------------------------------------------------->
                        <div class="modal-footer" style="border-top: 0"></div>
                    </div>
                </div>
            </div>
        </div>



<! LINKED SCRIPTS
------------------------------------------------------------------------------------------------------------------------------------------------------>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/functions.js"></script>
    </body>
</html>