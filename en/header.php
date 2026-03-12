<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body { margin: 0; }

    .parallax-container {
      position: relative;
      overflow: hidden;
    }

    .parallax {
      min-height: 500px;
      background-image: url("../images/fatadaHeader_small.jpg");
      background-position: center center;
      background-size: cover;
      background-color: white;
      border-radius: 0 0 20px 20px;
      transition: opacity 1s ease-in-out, transform 0.3s ease-out;
      will-change: transform, opacity;
      opacity: 1;
    }

    .parallax.fade-out {
      opacity: 0;
    }

    .parallax::after {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.2);
      border-radius: 0 0 20px 20px;
      pointer-events: none;
    }

    .toStick {
      position: sticky;
      top: 0;
      z-index: 10;
    }

    table.toStick {
      background-color: #0A2F6F;
      width: 100%;
      border-collapse: collapse;
    }

    table.toStick img.logo { 
      width: 22%; 
      height: auto; 
    }

    table.toStick h2 { 
      color: white; 
    }

    table.toStick img.flag {
      width: 20px;
      height: auto;
      margin: 5px;
    }

    @media screen and (max-width: 1000px) {
      .parallax { 
        height: 200px; 
        min-height: unset; 
      }

      table.toStick img.logo { 
        width: 180px; 
      }

      table.toStick h2 { 
        font-size: 18px; 
        text-align: center; 
      }

      table.toStick tr { 
        display: flex; 
        flex-direction: column; 
        align-items: center; 
      }
    }
  </style>
</head>

<body>
  <table class="toStick">
    <tr>
      <td><a href="https://www.ulbsibiu.ro/ro/"><img src="../images/logo_head.png" alt="Logo ULBS" class="logo"></a></td>
      <td><h2> The "Quality Assurance" Service (Q.A.S.) </h2></td>
      <td>
        <a href="../ro/index.php"><img src="../images/ro.png" alt="RO" class="flag"></a>
        <a href="../en/index.php"><img src="../images/en.png" alt="EN" class="flag"></a>
      </td>
    </tr>
  </table>

  <div class="parallax-container">
    <div class="parallax"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const images = [
        '../images/fatadaHeaderLit.png',
        '../images/fatadaHeaderIng.png',
        '../images/fatadaHeaderDpt.png',
        '../images/fatadaHeaderEco.png',
        '../images/fatadaHeaderMed.png',
        '../images/fatadaHeaderULBS.png'
      ];

      const parallax = document.querySelector('.parallax');
      let index = 0;

      const cache = [];
      images.forEach(src => {
        const img = new Image();
        img.src = src;
        cache.push(img);
      });

      // load first
      setTimeout(() => {
        if (cache[0].complete) {
          parallax.classList.add('fade-out');
          setTimeout(() => {
            parallax.style.backgroundImage = `url("${images[0]}")`;
            parallax.classList.remove('fade-out');
          }, 500);
        }
      }, 1000);

      // transition
      setTimeout(() => {
        setInterval(() => {
          index = (index + 1) % images.length;
          parallax.classList.add('fade-out');
          setTimeout(() => {
            parallax.style.backgroundImage = `url("${images[index]}")`;
            parallax.classList.remove('fade-out');
          }, 500);
        }, 7000);
      }, 3000);

      // parallax
      window.addEventListener('scroll', function () {
        const offset = window.pageYOffset;
        parallax.style.transform = `translateY(${offset * 0.5}px)`;
      });
    });
  </script>
</body>
