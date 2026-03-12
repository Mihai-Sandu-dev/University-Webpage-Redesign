<!DOCTYPE HTML>
<html lang = "ro">
    <title> Quality management </title>
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
                width: 90%;
                padding: 12px;
                border-radius: 6px;
            }

            .semiTitleIcon{
                width: 20px;
                height: 20px;
                vertical-align: middle;
                margin-right: 8px;
                color: rgb(2, 26, 63);
            }

            body{
                height: 100%;
            }

            h4{
                color:#0A2F6F;
                font-family: 'Inter', sans-serif;
                font-weight: lighter;
                margin-left: auto;
                margin-right: auto;
                margin: 30px;
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
    <div class="semiTitle"><img src="../images/folder-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Important documents for <b> the Quality Assurance </b> </div>
    <br>

        <details>
            <summary><img src="../images/business-svgrepo-com.svg" alt=" " class="semiTitleIcon"> European and national documents </summary>
        <br>
            <ol>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Declaratia_de_la_Sorbona_25.05.98.pdf"> Sorbonne Declaration, May 25, 1998 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Declaratia_de_la_Bologna_19.06.99.pdf"> Bologna Declaration, June 19, 1999 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Comunicatul_de_la_Praga_19.05.01.pdf"> Prague Communiqué, May 19, 2001 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Comunicatul_de_la_Berlin_19.09.03.pdf"> Berlin Communiqué, 19 September 2003 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Comunicatul_de_la_Bergen_19.05.05.pdf"> Bergen Communiqué, 19-20 May 2005 </a></li>
            </ol>
        </details>
    <br>
        <details>
            <summary><img src="../images/judicial-svgrepo-com.svg" alt=" " class="semiTitleIcon"> ARACIS and ANC documents </summary>
        <br>
            <ol>
                <li><a href="https://www.aracis.ro/metodologie-generala/"> Methodology for external evaluation of the quality of education in higher education </a></li>
                <li><a href="https://www.aracis.ro/ghiduri/"> ARACIS Guidelines 2025 - bachelor's degree </a></li>
                <li><a href="https://www.aracis.ro/ghiduri-si-standarde-masterat/"> ARACIS Guidelines 2025 - master's degree </a></li>
                <li><a href="https://www.aracis.ro/ghiduri-si-standarde-doctorat/"> ARACIS Guidelines 2025 - doctorate </a></li>
                <li><a href="https://www.anc.edu.ro/registrul-national-al-calificarilor-din-invatamantul-superior-rncis/"> Status of registration in RNCIS </a></li>
                <li><a href="https://www.anc.edu.ro/wp-content/uploads/2024/04/Ghid-privind-scrieția-rezultatelor-%C3%AEnv%C4%83%C8%9B%C4%83rii.pdf"> Methodological Guide on Writing Learning Outcomes 2024 </a></li>
                <li><a href="https://www.anc.edu.ro/wp-content/uploads/2019/11/Ghid_Metodologic_privind_scrieția_rezultatelor_invatari.pdf"> Methodological Guide on Writing Learning Outcomes 2019 </a></li>
                <li><a href="https://www.aracis.ro/hg-nomenclator-programe-de-studii/"> HG Nomenclator programe de studii/</a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/MetodologiedeevaluareexternaARACIS.pdf"> ARACIS: External evaluation methodology, standards, benchmarks and list of performance indicators </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/Partea_I_-_Ghid_evaluare__-_licenta_si_master.pdf"> Guide to quality assessment activities of university study programs and higher education institutions </a></li>
                <li><a href="http://www.aracis.ro/proceduri/"> Procedures of the Romanian Agency for Quality Assurance in Higher Education - ARACIS </a></li>
            </ol>
        </details>
    <br>
        <details>
            <summary><img src="../images/educate-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Documents of the ULBS </summary>
        <br>
            <ol>
                <li><a href="https://www.ulbsibiu.ro/ro/despre/organizare/structura/rec/comisia-de-evaluare-si-asigurare-a-calitatii/"> CEAC ULBS Commission </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/pag/documente.php#"> Regulation on the initiation, approval, monitoring and periodic evaluation of study programs </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/260625/7_Regulamentul%20de%20org%20si%20functionare%20a%20serv%20asigurarea%20calitatii_Senat_iunie2025.pdf"> Regulation on the organization and functioning of the Quality Assurance and Internal Managerial Control Service </a></li>
                <li><a href="https://senat.ulbsibiu.ro/wp-content/uploads/260625/6_Metodologia%20de%20incadrare%20intr-un%20domeniu%20de%20studii_Senat_iunie2025.pdf"> Methodology for the classification of a new master's degree program within ULBS into an accredited field of study </a></li>
                <li><a href="https://senat.ulbsibiu.ro/activitate/hotarari-sedinte/"> Senate Decisions </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/PoliticaindomcalitatiiULBS.pdf"> Quality Policy of the "Lucian Blaga" University of Sibiu - 2013 </a></li>
                <li><a href="http://calitate.ulbsibiu.ro/documents/ROFcomisieEACULBS_2013_FINAL.pdf"> Regulation on the organization and functioning of the Commission for the evaluation and quality assurance of the "Lucian Blaga" University of Sibiu </a></li>          
            </ol>
        </details>


    <br>
    <?php include('footer.php'); ?>  
    </body>
</html>