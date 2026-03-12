<!DOCTYPE HTML>
<html lang = "ro">
    <title> Feedback and evaluation </title>
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

            .socialIcon{
                width: 50px; 
                height: 50px; 
                vertical-align: middle; 
                margin-left: 15px;
                border-radius: 10px;
                transition: 0.2s;
            }

            .socialIcon:hover{
                box-shadow: 2px 2px 5px grey;
                transition: 0.2s;
            }

            /* contact */
            .info{
                color:#0A2F6F;
                font-family: Arial, sans-serif;
                font-weight: bolder;
                margin-left: auto;
                margin-right: auto;
                margin: 30px;
            }

            .contactSection{
                border: 1px solid rgba(162, 204, 255, 1);
                color: rgb(2, 26, 63);
                font-family: Verdana, sans-serif;
                text-align: center;
                border-radius: 12px;
                padding: 15px;
                background: white;
                margin-left: auto;
                margin-right: auto;
                width: 60%;
                transition: 0.2s;
            }

            .contactSection:hover{
                box-shadow: 5px 5px 20px grey;
                transition: 0.2s;
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
                transition: 0.2s;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
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
    <div class="semiTitle"><img src="../images/folder-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Important <b> feedback </b> documents </div>
    <br>

        <details>
            <summary><img src="../images/trend-svgrepo-com.svg" alt=" " class="semiTitleIcon"> Student evaluation of teachers </summary>
        <br>
            <ol>
                <?php include('../data/feed_evaluare.php'); ?>
            </ol>
        </details>
    <br>
    <br>

    <!-- contact -->
    <div class="semiTitle"> For more details, you can contact: </div>
<br>
    <div class="contactSection">
        <table>
            <tr><div class="info"> Telephone: +40-269-217.779 </div></tr>
            <tr><a href="https://mail.google.com/mail/?view=cm&to=dep.calitate@ulbsibiu.ro" target="_blank" class="info"> E-mail: dep.calitate@ulbsibiu.ro </a></tr>
            <tr><div class="info"> Address: Victoriei Blvd., No.10, Sibiu, 550024, Romania </div></tr>
            <tr><iframe style="border-radius: 20px; border-color: rgba(255, 255, 255, 0)" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d347.7541084850179!2d24.145170515094204!3d45.79056924652819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c678f1ee7b18f%3A0xbfc1a621bc6865bf!2sLucian%20Blaga%20University%20of%20Sibiu!5e0!3m2!1sen!2sro!4v1762106784088!5m2!1sen!2sro" width="90%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></tr>
        </table>
    </div>
<br>

    <div class="semiTitle"> Or access <b> the official social media channels of ULBS: </b> </div>
<br>

    <center>
        <a href="https://www.facebook.com/ulbsibiu" target="_blank"><img src="../images/facebook-square-icon.svg" alt="Facebook ULBS" class="socialIcon"></a>
        <a href="https://twitter.com/ulbsibiu" target="_blank"><img src="../images/x-social-media-black-icon.svg" alt="Facebook ULBS" class="socialIcon"></a>
        <a href="https://www.youtube.com/user/ULBSibiuTV" target="_blank"><img src="../images/youtube-app-icon.svg" alt="Facebook ULBS" class="socialIcon"></a>
        <a href="https://linkedin.com/school/ulbs/" target="_blank"><img src="../images/linkedin-app-icon.svg" alt="Facebook ULBS" class="socialIcon"></a>
        <a href="https://www.instagram.com/universitatealucianblaga/" target="_blank"><img src="../images/ig-instagram-icon.svg" alt="Facebook ULBS" class="socialIcon"></a>
    </center>
    
    <br>
    <?php include('footer.php'); ?>  
    </body>
</html>