    <header>
        <!Title declaration
        ----------------------------------------------------------------------------------------------------------------->
        <div id="nom_clinique">
            <h1 style="text-align: center">Gestion agendas de la</h1>
        </div>


        <!Clinic logo
        ----------------------------------------------------------------------------------------------------------------->
        <div class="centered" id="logo">
            <img src="image/logo.jpg">
        </div>


        <!Clinic name
        ----------------------------------------------------------------------------------------------------------------->
        <div id="nom_clinique">
            <h1 style="text-align: center"><?php echo NOM_CLINIQUE; ?></h1>
        </div>


        <!Employee ID
        ----------------------------------------------------------------------------------------------------------------->
        <div id="menu">
            <ul>
                <?php
                echo "<li>" . "ID employé est " . "<strong>" . $emp_id . "</strong>" . "</li>";
                ?>
            </ul>
        </div>
    </header>