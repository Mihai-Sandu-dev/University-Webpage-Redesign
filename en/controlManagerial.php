<!DOCTYPE HTML>
<html lang = "ro">
    <title> Management control </title>
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
        <div class="semiTitle"><img src="../images/folder-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Important documents for <b> internal managerial control </b> </div>
    <br>

        <details>
            <summary><img src="../images/educate-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Internal regulations </summary>
    <br>
            <ol>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/300125/16_Programul%20de%20dezv%20a%20sistemului%20de%20control%20intern%20managerial_Senat_ian2025.pdf"> Program for the development of the internal managerial control system of the “Lucian Blaga” University of Sibiu for the year 2024 </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/300125/14_Regulament%20org%20si%20functionare%20al%20comisiei%20de%20monitorizare_Senat_ian2025.pdf"> Regulation of organization and functioning of the Monitoring Commission of the “Lucian Blaga” University of Sibiu </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/060624/4_PO%20Elaborarea%20procedurilor_Senat_iunie2024.pdf"> PS on the development of procedures </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/300125/15_PO%20Managementul%20riscurilor_Senat_ian2025.pdf"> PS Risk Management </a></li> 
            </ol> 
        </details>
    <br>
        
        <!-- -->
        <div class="semiTitle"><img src="../images/setting-svgrepo-com.svg" alt=" " class="semiTitleIcon"> <b> Operational Procedures </b> </div>
    <br>

        <details>
            <summary><img src="../images/subscribed-svgrepo-com.svg" alt=" " class="semiTitleIcon"> AUTOMATIC RECOGNITION Procedures </summary>
    <br>
            <ol>
                <li><a href="http://calitate.ulbsibiu.ro/pag/PCUe/Doctor/Doctor.php"> Automatic recognition procedure for doctoral degrees </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/pag/PCUe/Func%C8%9Bie/Functie.php"> Automatic recognition procedure for university teaching positions obtained in accredited higher education institutions abroad </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/pag/PCUe/Abilitare/Abilitare.php"> Procedure for automatic recognition of the doctoral supervisor qualification obtained in accredited higher education institutions abroad. </a></li>
            </ol>
        </details>
    <br>

            <!-- -->
        <div class="semiTitle"><img src="../images/library-svgrepo-com.svg" alt=" " class="semiTitleIcon"> <b> General documents </b> of ULBS </div> 
    <br> 

        <details> 
            <summary><img src="../images/locationmarker-svgrepo-com.svg" alt=" " class="semiTitleIcon"> The "Map" of the ULBS </summary> 
    <br> 
            <ol> 
                <li><a href="http://calitate.ulbsibiu.ro/documents/Organigrama%20ULBS%202020_05.pdf"> ULBS organizational chart </a></li> 
                <li><a href="http://calitate.ulbsibiu.ro/documents/STRATEGIE%20ULBS%202020-2024.pdf"> ULBS Strategy - 2020-2024 </a></li> 
                <li><a href="http://calitate.ulbsibiu.ro/documents/Politica%20%C3%AEn%20domeniul%20calit%C4%83%C8%9Bii%20a%20ULBS.pdf"> Quality Policy of the "Lucian Blaga" University of Sibiu </a></li>
            </ol>
        </details>
    <br>
        <details>
            <summary><img src="../images/book-opened-svgrepo-com.svg" alt=" " class="semiTitleIcon"> The Guidelines and Codes of the ULBS </summary>
    <br>
            <ol>
                <li><a href="http://calitate.ulbsibiu.ro/documents/GHID%20privind%20ini%C8%9Bierea_aprobarea_monitorizarea%20%C8%99i%20evaluarea%20periodic%C4%83%20a%20programelor%20de%studii.pdf"> Guide for initiating study programs 2020 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/GHID%20privind%20plagiatul.pdf"> Guide for plagiarism 2020 </a></li>
                <li><a href="http://senat.ulbsibiu.ro/wp-content/uploads/CARTA-ULBS_2015.pdf"> ULBS University Charter 2018 </a></li>
                <li><a href="http://senat.ulbsibiu.ro/wp-content/uploads/CARTA-ULBS_2015.pdf#page=35"> University Code of Ethics and Deontology 2018 </a></li>
            </ol>
        </details>
    <br> 
        <details> 
        <summary><img src="../images/file-2-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Important forms </summary> 
    <br> 
            <ol> 
                <li><a href="http://calitate.ulbsibiu.ro/documents/D-ULBS-DAC-03_Matritaprocedura_FINAL_rev2_03_2014.doc"> Framework model - ULBS procedure - Code D-ULBS-DAC-03 </a></li> 
                <li><a href="http://calitate.ulbsibiu.ro/documents/D-ULBS-DAC-04_Matritainstructiune_FINAL_rev1.doc"> Framework model - ULBS work instruction - Code D-ULBS-DAC-04 </a></li> 
            </ol> 
        </details>
    <br>   


    <!-- extra documents -->
    <div class="semiTitle">
        <img src="../images/caret-bottom-svgrepo-com.svg" alt=" " class="semiTitleIcon">
        <button class="tablinks" onclick="openCategory(event, 'Regulamente')" id="defaultOpen"><b> Regulations </b></button> 
        <button class="tablinks" onclick="openCategory(event, 'Metodologii')"><b> Methodologies </b></button> 
        <button class="tablinks" onclick="openCategory(event, 'Proceduri')"><b> Procedures </b></button>
    </div>

            <!-- content -->
            <div id="Regulamente" class="tabcontent">
                <div class="semiTitle"><b> Regulations </b> of the ULBS </div>
                <div class="extraDoc">
                    <ol>
                        <?php include('../data/manag_regulamente.php'); ?>
                    </ol>
                </div>
            </div>

            <div id="Metodologii" class="tabcontent">
                <div class="semiTitle"><b> Methodologies </b> of the ULBS </div>                
                <div class="extraDoc">
                    <ol>
                        <?php include('../data/manag_metodologii.php'); ?>
                    </ol>
                </div>
            </div>

            <div id="Proceduri" class="tabcontent">
                <div class="semiTitle"><b> Procedures </b> of the ULBS </div>                
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