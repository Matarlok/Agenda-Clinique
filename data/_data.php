<?php
    /**Define variable
    ------------------------------------------------------------------------------------------------------------------------**/
    define( 'PARAM_EMP_ID'   , 'emp_id')   ;
    define( 'PARAM_EMP_NAME' , 'emp_name') ;
    define( 'PARAM_EMP_TYPE' , 'emp_type') ;


    /**Clinique name
    ------------------------------------------------------------------------------------------------------------------------**/
    define( 'NOM_CLINIQUE' , 'Clinique médicale Tremblay Zintohl Müller') ;


    /**Les activités de la clinique (les activités suivies de _MDC sont en lien avec les clients et leurs dossiers
    ------------------------------------------------------------------------------------------------------------------------**/
    define( 'EMPL_TYPE_MEDECIN'   , 'Médecin')                 ;
    define( 'EMPL_TYPE_INFIRMIER' , 'Infirmier')               ;
    define( 'EMPL_TYPE_ADMIN'     , 'Personnel administratif') ;


    /**Les activités de la clinique (les activités suivies de _MDC sont en lien avec les clients et leurs dossiers
    ------------------------------------------------------------------------------------------------------------------------**/
    define( 'ACT_CONSULT_MDC'  ,  'Consultation')         ;  // Consulation
    define( 'ACT_FORM_CONSEIL' ,  'Formation et conseil') ;  // Formation et conseil médical
    define( 'ACT_REUNION_MDC'  ,  'Réunion Médicale')     ;  // Réunion médicale
    define( 'ACT_PANNING'      ,  'Planification')        ;  // Planification clinique
    define( 'ACT_DOSSIERS_MDC' ,  'Dossiers médicaux')    ;  // Gestion des dossiers médicaux des clients
    define( 'ACT_GESTION'      ,  'Gestion clinique')     ;  // Gestion clinique et comptabilité
    define( 'ACT_HORS'         ,  'Hors')                 ;  // Hors clinique


    /**Return current employee list
    ------------------------------------------------------------------------------------------------------------------------**/
    function get_employes() {
            return array(
                    '102' => array( 'emp_name' => 'Bernard'   , 'emp_type' => EMPL_TYPE_INFIRMIER) ,
                    '136' => array( 'emp_name' => 'Tremblay'  , 'emp_type' => EMPL_TYPE_MEDECIN)   ,
                    '025' => array( 'emp_name' => 'Zintohl'   , 'emp_type' => EMPL_TYPE_MEDECIN)   ,
                    '082' => array( 'emp_name' => 'Müller'    , 'emp_type' => EMPL_TYPE_MEDECIN)   ,
                    '045' => array( 'emp_name' => 'Abenassis' , 'emp_type' => EMPL_TYPE_ADMIN)     ,
            );
    }


    /**Possible titles
    ------------------------------------------------------------------------------------------------------------------------**/
    function get_activites(){
            return array(
                    ACT_CONSULT_MDC  ,
                    ACT_FORM_CONSEIL ,
                    ACT_REUNION_MDC  ,
                    ACT_PANNING      ,
                    ACT_DOSSIERS_MDC ,
                    ACT_GESTION      ,
                    ACT_HORS         ,
            );
    }


    /**Employee morning schedule
    ------------------------------------------------------------------------------------------------------------------------**/
    function get_agenda($id) {
        switch ($id) {
            case '102':
                $result = array(
                        '8'  => ACT_CONSULT_MDC  ,
                        '9'  => ACT_CONSULT_MDC  ,
                        '10' => ACT_DOSSIERS_MDC ,
                        '11' => ACT_DOSSIERS_MDC ,
                        '12' => ACT_HORS         ,
                        '13' => ACT_FORM_CONSEIL ,
                        '14' => ACT_PANNING      ,
                        '15' => ACT_PANNING      ,
                );
            break;

            case '136':
                $result = array(
                        '8'  => ACT_DOSSIERS_MDC ,
                        '9'  => ACT_CONSULT_MDC  ,
                        '10' => ACT_CONSULT_MDC  ,
                        '11' => ACT_CONSULT_MDC  ,
                        '12' => ACT_HORS         ,
                        '13' => ACT_FORM_CONSEIL ,
                        '14' => ACT_CONSULT_MDC  ,
                        '15' => ACT_PANNING      ,
                );
            break;

            case '025':
                $result = array(
                        '8'  => ACT_DOSSIERS_MDC ,
                        '9'  => ACT_PANNING      ,
                        '10' => ACT_CONSULT_MDC  ,
                        '11' => ACT_CONSULT_MDC  ,
                        '12' => ACT_HORS         ,
                        '13' => ACT_FORM_CONSEIL ,
                        '14' => ACT_CONSULT_MDC  ,
                        '15' => ACT_CONSULT_MDC  ,
                );
            break;

            case '082':
                $result = array(
                        '8'  => ACT_DOSSIERS_MDC ,
                        '9'  => ACT_CONSULT_MDC  ,
                        '10' => ACT_CONSULT_MDC  ,
                        '11' => ACT_CONSULT_MDC  ,
                        '12' => ACT_HORS         ,
                        '13' => ACT_FORM_CONSEIL ,
                        '14' => ACT_CONSULT_MDC  ,
                        '15' => ACT_PANNING      ,
                );
            break;

            case '045':
                $result = array(
                        '8'  => ACT_PANNING      ,
                        '9'  => ACT_PANNING      ,
                        '10' => ACT_HORS         ,
                        '11' => ACT_HORS         ,
                        '12' => ACT_HORS         ,
                        '13' => ACT_FORM_CONSEIL ,
                        '14' => ACT_DOSSIERS_MDC ,
                        '15' => ACT_DOSSIERS_MDC ,
               );
            break;
        }return $result;
    }
?>