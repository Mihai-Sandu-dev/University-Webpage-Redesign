<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<head>
    <style>
        /* menu */
            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                display: flex;
                justify-content: space-evenly;
                flex-wrap: nowrap;
                overflow-x: auto;
                background-color: #001c4d;
                border-radius: 10px 10px 0px 0px;
                position: sticky;
                bottom: 0;
            }

            ul li{
                float: center;
            }

            ul li a{
                display: block;
                color: white;
                font-family: Tahoma, sans-serif;
                text-align: center;
                padding: 25px;
                text-decoration: none;
                padding: clamp(10px, 10px, 25px);
                font-size: clamp(12px, 15px, 18px);
            }

            ul li a:hover{
                color: #000000;
                background-color: white;
                border-radius: 10px 10px 10px 10px;
                box-shadow: 0 1px 20px white;
                transition: 0.2s;                 
            }

                /* menu icons */
                ul li a img {
                    width: 20px;
                    height: 20px;
                    vertical-align: middle;
                    margin-right: 8px;
                    filter: invert(1);
                    transition: filter 0.3s;
                }

                ul li a:hover img {
                    filter: invert(0);
                }

                
                /* highlight */
                .currentButton{
                    background-color: #0047c2; 
                    box-shadow: 0 1px 20px rgb(0, 110, 255); 
                    border-radius: 10px 10px 10px 10px;
                }
    </style>
</head>

<body>
    
    <!-- MENU -->
<ul>
  <li class="<?php if ($currentPage == 'index.php') echo 'currentButton'; ?>">
    <a href="index.php"><img src="../images/home-svgrepo-com.svg" alt=""> Acasă</a>
  </li>
  <li class="<?php if ($currentPage == 'managementulCalitatii.php') echo 'currentButton'; ?>">
    <a href="managementulCalitatii.php"><img src="../images/pie-chart-svgrepo-com.svg" alt=""> Management calitate </a>
  </li>
  <li class="<?php if ($currentPage == 'controlManagerial.php') echo 'currentButton'; ?>">
    <a href="controlManagerial.php"><img src="../images/slider-h-lg-svgrepo-com.svg" alt=""> Control managerial și documente </a>
  </li>
  <li class="<?php if ($currentPage == 'feedback.php') echo 'currentButton'; ?>">
    <a href="feedback.php"><img src="../images/like-svgrepo-com.svg" alt=""> Feedback</a>
  </li>
</ul>

</body>

<footer style="text-align: center;">
        <table style="background-color: #0A2F6F; position: bottom" width="100%">
        <tr>
            <td width="20%"><p style="color: white"> © 2025 Direcția de Informatizare și Comunicații de date </p></td>
        </tr>
        <tr>
            <td> <a href="https://www.ulbsibiu.ro/ro/" style="color: white"> Universitatea "Lucian Blaga" din Sibiu</a> </td>
        </tr>
        <tr>
            <td><p style="color: white"> <b> Adresa: </b> Bd-ul. Victoriei, Nr.10, Sibiu, 550024, Romania </p></td>
        </tr>
        <tr>
            <td><p style="color: white"> <b> Telefon: </b> +40-269-217.779 </p></td>
        </tr>
        <tr>
            <td><p style="color: white"> <b> E-mail: </b> dep.calitate@ulbsibiu.ro </p></td>
        </tr>
    </table>
</footer>
