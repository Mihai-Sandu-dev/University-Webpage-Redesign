<!DOCTYPE HTML>
<html lang = "ro">
    <title> Controlul managerial </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">

    <head>

        <!-- CSS -->
        <style>
            .semiTitle{
                background-color: rgb(174, 201, 233);
                color: rgb(2, 26, 63);
                font-family: 'Poppins', sans-serif;
                text-align: left;
                box-shadow: 3px 3px 5px;
                margin: 10px;
                margin-left: auto;
                margin-right: auto;
                padding: 12px;
                border-radius: 6px;
                width: 90%;
            }

            .semiTitleIcon{
                width: 20px;
                height: 20px;
                vertical-align: middle;
                margin-right: 8px;
                color: rgb(2, 26, 63);
            }

            /* scrollable */
            .extraDoc{
                border: 1px solid #0052afff;
                color: rgb(2, 26, 63);
                font-family: 'Inter', sans-serif;
                text-align: left;
                box-shadow: 3px 3px 5px;
                border-radius: 8px;
                padding: 15px;
                background: rgba(116, 171, 238, 1);
                transition: 0.2s;

                margin: 5px;
                width: 90%;
                height: 200px;
                margin-left: auto;
                margin-right: auto;
                overflow: auto;
            }

            button{
                color: rgb(2, 26, 63);
                margin-bottom: 6px;
                line-height: 1.4;
                background-color: rgba(116, 171, 238, 1);
                padding: 15px;
                border-radius: 6px;
                border: 1px solid #005ac0ff; 
                font-family: Verdana, sans-serif;
                text-align: left;
                transition: 0.2s;
            }

            button:hover{
                border: 1px solid #0052afff; 
                border-radius: 20px;
                color: rgba(255, 255, 255, 1);
                background-color: rgba(0, 69, 172, 1);
                transition: 0.2s;
                box-shadow: 5px 5px 5px gray;
            }

                /* scrollBar fix */
                .extraDoc::-webkit-scrollbar {
                    width: 10px;
                }

                .extraDoc::-webkit-scrollbar-track {
                    background: rgba(255, 255, 255, 0.59);
                    border-radius: 6px;
                }

                .extraDoc::-webkit-scrollbar-thumb {
                    background-color: rgba(100, 100, 100, 0.8);
                    border-radius: 6px;
                }

            body{
                height: 100%;
            }

            /* documents lists */
            details{
                border: 1px solid #0052afff;
                color: rgb(2, 26, 63);
                font-family: Verdana, sans-serif;
                text-align: left;
                box-shadow: 3px 3px 5px;
                border-radius: 8px;
                padding: 15px;
                background: rgba(116, 171, 238, 1);
                margin-left: auto;
                margin-right: auto;
                width: 80%;
                transition: 0.2s;
            }

            summary{
                font-weight: 600;
                cursor: pointer;
            }

            details[open]{
                background: #eef4ff;
                border-color: #8eaef2;
                transition: 0.2s;            
            }

            ol{
                padding-left: 25px;
                margin: 0;
                color: rgba(0, 67, 168, 1);
            }

            ol li {
                margin-bottom: 6px;
                line-height: 1.4;
                background-color: rgb(2, 26, 63);
                padding: 15px;
                border-radius: 6px;
                border: 1px solid #005ac0ff; 
                font-family: Verdana, sans-serif;
                text-align: left;
                transition: 0.2s;
            }

            ol li:hover{
                border: 1px solid #0052afff; 
                border-radius: 20px;
                color: rgba(143, 188, 255, 1);
                background-color: rgba(0, 69, 172, 1);
                transition: 0.2s;
                box-shadow: 5px 5px 5px gray;
            }

            details:hover{
                background-color: white;
                box-shadow: 10px 10px 5px;
                transition: 0.2s; 
            }

            ol a{
                color: white;
                text-decoration: none;
            }

            ol a:hover{
                text-decoration: underline;
            }

        </style>
    </head>

<body style = "background-repeat: no repeat; background-size: 100% 100%">

    <?php include('header.php'); ?>

    <!-- INFO -->
    <div class="semiTitle"><img src="../images/folder-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Documente importante pentru <b> controlul intern managerial </b> </div>
    <br>

        <details>
            <summary><img src="../images/educate-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Reglementări interne </summary>
        <br>
            <ol>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/300125/16_Programul%20de%20dezv%20a%20sistemului%20de%20control%20intern%20managerial_Senat_ian2025.pdf"> Programul de dezvoltare a sistemului de control intern managerial al Universității “Lucian Blaga” din Sibiu pentru anul 2024 </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/300125/14_Regulament%20org%20si%20functionare%20al%20comisiei%20de%20monitorizare_Senat_ian2025.pdf"> Regulamentul de organizare și funcționare al Comisiei de Minitorizare din Universitatea “Lucian Blaga” din Sibiu </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/060624/4_PO%20Elaborarea%20procedurilor_Senat_iunie2024.pdf"> PS privind elaborarea procedurilor </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/300125/15_PO%20Managementul%20riscurilor_Senat_ian2025.pdf"> PS Managementul riscurilor </a></li>
            </ol>
        </details>
    <br>
        
        <!-- -->
        <div class="semiTitle"><img src="../images/setting-svgrepo-com.svg" alt=" " class="semiTitleIcon"> <b> Proceduri operaționale </b> </div>
    <br>

        <details>
            <summary><img src="../images/subscribed-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Proceduri de RECUNOAȘTERE AUTOMATĂ </summary>
        <br>
            <ol>
                <li><a href="http://calitate.ulbsibiu.ro/pag/PCUe/Doctor/Doctor.php"> Procedura de recunoaștere automată a titlului de doctor </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/pag/PCUe/Func%C8%9Bie/Functie.php"> Procedura de recunoaștere automată a funcțiilor didactice universitare obținute în instituțiile de învățământ superior acreditate din străinătate </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/pag/PCUe/Abilitare/Abilitare.php"> Procedura de recunoaștere automată a calității de conducător de doctorat obținută în instituții de învățământ universitar acreditate din străinătate. </a></li>
            </ol>
        </details>
    <br>

            <!-- -->
        <div class="semiTitle"><img src="../images/library-svgrepo-com.svg" alt=" " class="semiTitleIcon"> <b> Documente generale </b> ale ULBS </div>
    <br>

        <details>
            <summary><img src="../images/locationmarker-svgrepo-com.svg" alt=" " class="semiTitleIcon"> "Harta" ULBS </summary>
        <br>
            <ol>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Organigrama%20ULBS%202020_05.pdf"> Organigrama ULBS </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/STRATEGIE%20ULBS%202020-2024.pdf"> Strategia ULBS - 2020-2024 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Politica%20%C3%AEn%20domeniul%20calit%C4%83%C8%9Bii%20a%20ULBS.pdf"> Politica în domeniul calității a Universității ”Lucian Blaga” din Sibiu </a></li>
            </ol>
        </details>
    <br>
        <details>
            <summary><img src="../images/book-opened-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Ghiduri și Coduri ULBS </summary>
        <br>
            <ol>
                <li><a href="http://calitate.ulbsibiu.ro/documents/GHID%20privind%20ini%C8%9Bierea_aprobarea_monitorizarea%20%C8%99i%20evaluarea%20periodic%C4%83%20a%20programelor%20de%20studii.pdf"> Ghid inițiere programe de studii 2020 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/GHID%20privind%20plagiatul.pdf"> Ghid privind plagiatul 2020 </a></li>
                <li><a href="http://senat.ulbsibiu.ro/wp-content/uploads/CARTA-ULBS_2015.pdf"> Carta universitară ULBS	2018 </a></li>
                <li><a href="http://senat.ulbsibiu.ro/wp-content/uploads/CARTA-ULBS_2015.pdf#page=35"> Codul de etică și deontologie universitară 2018 </a></li>           
            </ol>
        </details>
    <br> 
        <details>
            <summary><img src="../images/file-2-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Formulare importante </summary>
        <br>
            <ol>
                <li><a href="http://calitate.ulbsibiu.ro/documents/D-ULBS-DAC-03_Matritaprocedura_FINAL_rev2_03_2014.doc"> Model cadru - procedură ULBS - Cod D-ULBS-DAC-03 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/D-ULBS-DAC-04_Matritainstructiune_FINAL_rev1.doc"> Model cadru - instrucțiune de lucru ULBS - Cod D-ULBS-DAC-04 </a></li>           
            </ol>
        </details>
    <br>   


    <!-- extra documents -->
    <div class="semiTitle">
        <img src="../images/caret-bottom-svgrepo-com.svg" alt=" " class="semiTitleIcon">
        <button class="tablinks" onclick="openCategory(event, 'Regulamente')" id="defaultOpen"><b> Regulamente </b></button>
        <button class="tablinks" onclick="openCategory(event, 'Metodologii')"><b> Metodologii </b></button>
        <button class="tablinks" onclick="openCategory(event, 'Proceduri')"><b> Proceduri </b></button>
    </div>

            <!-- content -->
            <div id="Regulamente" class="tabcontent">
                <div class="semiTitle"><b> Regulamente </b> ULBS </div>
                <div class="extraDoc">
                    <ol>
                        <?php include('../data/manag_regulamente.php'); ?>
                    </ol>
                </div>
            </div>

            <div id="Metodologii" class="tabcontent">
                <div class="semiTitle"><b> Metodologii </b> ULBS </div>                
                <div class="extraDoc">
                    <ol>
                        <?php include('../data/manag_metodologii.php'); ?>
                    </ol>
                </div>
            </div>

            <div id="Proceduri" class="tabcontent">
                <div class="semiTitle"><b> Proceduri </b> ULBS </div>                
                <div class="extraDoc">
                    <ol>
                        <?php include('../data/manag_proceduri.php'); ?>
                    </ol>
                </div>
            </div>

        <!-- java -->
        <script>
            function openCategory(evt, categName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");

                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                tablinks = document.getElementsByClassName("tablinks");

                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                document.getElementById(categName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            document.getElementById("defaultOpen").click();
        </script>

    <br>
    <?php include('footer.php'); ?>  
    </body>
</html>