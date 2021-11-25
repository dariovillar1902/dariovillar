<?php
  print_r($_POST);
mail("dario_villar2001@hotmail.com", "asunto", "cuerpo", "from: pagina@hola.com");
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <link rel="apple-touch-icon" href="favicon.png" sizes="180x180">
    <link rel="icon" href="favicon.png" sizes="32x32" type="image/png">
    <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="favicon.png">
    <link rel="mask-icon" href="favicon.png" color="#0D0106">
    <link rel="icon" href="favicon.png">
    <meta name="theme-color" content="#0D0106">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contacto - Darío Villar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kanit:ital,wght@0,900;1,900&family=IBM+Plex+Serif&family=Source+Serif+Pro&family=Roboto+Slab:wght@400;700&family=Noto+Serif:wght@400,700&family=Lora:wght@700&family=Montserrat:ital,wght@0,500;0,900;1,900&family=Public+Sans:ital,wght@0,900;1,900&family=Roboto:ital,wght@0,900;1,900&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/1.37.4/tsparticles.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style type='text/css'>

    nav {
        background-color: #0D0106 !important;
        border-bottom: 2px solid #FBFBFF;
    }

    .nav-link {
        color: #FBFBFF !important;
    }

    .nav-link:hover {
        color: #FF331F !important;
    }

    .navbar-brand {
        padding-left: 1em;
    }

    .navbar-collapse {
        justify-content: flex-end;
        padding: 0px 1em;
    }

    body {
        background-color: #0D0106;
        color: #FBFBFF;
        margin: 0;
    }

    #tsparticles {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    canvas {
        display: block;
        position: relative !important;
        z-index: -1 !important;
    }

    .gradienteTexto {
        background: linear-gradient(90deg, #388697, #5948D5);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        font-family: 'Helvetica Neue', sans-serif;
        font-size: 60px;
        z-index: 2;
        font-weight: bolder;
        text-align: center;
        width: 6em;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 60%;
        left: 50%;
    }

    .foto {
        z-index: 2;
        width: 12em;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 40%;
        left: 50%;
        border-radius: 50%;
    }

    .linksContacto {
        background: linear-gradient(90deg, #388697, #5948D5);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        font-family: 'Helvetica Neue', sans-serif;
        font-size: 40px;
        z-index: 2;
        font-weight: bolder;
        text-align: center;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 70%;

    }

    @media (max-width: 992px) {
        #linkedin {
            left: 43%;
        }

        #github {
            left: 57%;
        }
    }

    @media (min-width: 992px) {
        #linkedin {
            left: 47%;
        }

        #github {
            left: 53%;
        }
    }

    @media (min-width: 1400px) {
        .vistaPrevia {
            height: 200px;
        }
    }

    .otroTexto {
        background: linear-gradient(90deg, #388697, #5948D5);
        color: white;
        font-family: 'Helvetica Neue', sans-serif;
        z-index: 2;
        text-align: center;
        font-weight: bold;
        padding: 10px 0;
        width: 15em;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 80%;
        left: 50%;
        border-radius: 10px;
    }


    h1 {
        background: linear-gradient(90deg, #388697, #5948D5);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        font-weight: bold;
        margin-bottom: 20px;
    }

    h3 {
        color: #FF331F;
    }

    .progress {
  background: rgba(255,255,255,0.1);
  justify-content: flex-start;
  border-radius: 100px;
  align-items: center;
  position: relative;
  padding: 0 5px;
  display: flex;
  height: 40px;
  width: 300px;
  margin: 40px auto;
}

.progress-value {
  box-shadow: 0 10px 40px -10px #fff;
  border-radius: 100px;
  background: #fff;
  height: 30px;
  width: 0;
}

#progress1 {
    animation: load1 5s normal forwards;
}

#progress2 {
    animation: load2 5s normal forwards;
}

@keyframes load1 {
  0% { width: 0; }
  100% { width: 30.43%; }
}

@keyframes load2 {
  0% { width: 0; }
  100% { width: 33%; }
}

.fotoSobreMi {
    width: 80% !important;
    margin: auto;
}

.row {
    margin: 50px auto;
}

.divFoto {
    text-align: center;
    align-items: center;
    vertical-align: middle;
    display: flex;
}

.divProgreso {
    text-align: center;
    align-items: center;
}

.vistaPrevia {
    width: 100%;
    border-radius: 10px;
}

.modal-title {
        background: linear-gradient(90deg, #388697, #5948D5);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        font-weight: bold;
    }

.modal-body {
    color: #0D0106;
}

.modal-dialog {
    max-width: 90% !important;
}

.screenshotModal {
    width: 100%;
}

.carousel, h4 {
    margin-bottom: 20px;
}

h4 {
    text-align: center;
    font-weight: bold;
}

.fas, .fab {
    color: #FF331F;
    margin: 0 10px;
}

.logo {
    height: 2em;
}

.fs-4 {
    vertical-align: middle;
}

#fila1Portfolio, #filaEnvio {
    margin-top: 0 !important;
}

    .verMas {
        background-color: #FF331F;
        color: white;
        font-weight: bold;
        font-family: 'Helvetica Neue', sans-serif;
        border-radius: 15px;
        padding: 10px 20px;
        margin: 10px auto !important;
    }

    .containerImagen {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        margin-bottom: 40px;
    }

    iframe {
      width: 100%;
      height: 600px;
    }

    #filaArchivos {
      margin-top: 0 !important;
      height: auto;
    }

    .divArchivo {
      align-items: flex-start;
      text-align: center;
    }

    label {
      color: #0D0106;
    }

    textarea {
      height: 200px !important;
    }

    .form-control {
      margin-bottom: 20px;
    }

    .divBoton {
      text-align: center;
    }

    .verMasLink {
    color: #FBFBFF !important;
    text-decoration: none;
    
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="home.html"> 
            <img src='favicon.png' class='logo'>
            <span class="fs-4">
                Darío Villar
            </span> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-0">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobremi.html">Sobre mi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>
          </ul>
        </div>
      </nav>
      <div class='container-fluid'>
        <div class='row'>
          <div class='col-md-1'></div>
          <div class='col-md-10'>
            <h1> Contacto </h1>
          </div>
          <div class='col-md-1'></div>
        </div>
        <div class='row' id='filaArchivos'>
            <div class='col-md-1'></div>
            <div class='col-md-5 divArchivo'>
                <h4> Curriculum Vitae </h4>
                <iframe src='cv.pdf'> </iframe>
                <button class="verMas"><a href="cv.html" class='verMasLink'> Vista Previa </a></button>
                <br>
                <button class="verMas"><a href="cv.pdf" class='verMasLink' download> Descargar </a></button>
              </div>
            <div class='col-md-5 divArchivo'>
              <h4> Carta de presentación </h4>
              <iframe src='cv.pdf'> </iframe>
              <button class="verMas"><a href="cv.html" class='verMasLink'> Vista Previa </a></button>
              <br>
              <button class="verMas"><a href="cv.pdf" class='verMasLink' download> Descargar </a></button>
            </div>
            <div class='col-md-1'></div>
        </div>
        <div class='row'>
            <div class='col-md-1'></div>
            <div class='col-md-10 container-fluid'>
            <form method='POST'>
              <h1 class="h3 mb-3 fw-normal"> Enviar un mensaje </h1>
              <div class='row'>
                <div class='col-md-3 mx-auto'>
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre">
                    <label for="floatingInput">Nombre</label>
                  </div>
                </div>
                <div class='col-md-1'></div>
                <div class='col-md-3 mx-auto'>
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput2" placeholder="Asunto">
                    <label for="floatingInput2">Asunto</label>
                  </div>
                </div>
                <div class='col-md-1'></div>
                <div class='col-md-3 mx-auto'>
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput3" placeholder="Mail">
                    <label for="floatingInput3">Mail</label>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-10 mx-auto'>
                  <div class="form-floating">
                    <textarea class="form-control" id="floatingInput4" placeholder="Mensaje"></textarea>
                    <label for="floatingInput4">Mensaje</label>
                  </div>
                </div>
                <div class='row' id='filaEnvio'>
                  <div class='col-md-1'></div>
                  <div class='col-md-10 mx-auto divBoton'>
                    <button class="verMas"> Enviar </button>
                  </div>
                  <div class='col-md-1'></div>
              </div>
              </div>
            </form>
            </div>
            <div class='col-md-1'></div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $('.containerImagen').hover(function(){
            if ($(this).children('img').css('filter') !== 'brightness(0.5)'){
                $(this).children('img').css('filter', 'brightness(0.5)');
            } else {
                $(this).children('img').css('filter', 'brightness(1)');
            }
            if ($(this).children('h6').css('visibility') !== 'hidden'){
                $(this).children('h6').css('visibility', 'hidden');
            } else {
                $(this).children('h6').css('visibility', 'visible');
            }
            if ($(this).children('button').css('visibility') !== 'hidden'){
                $(this).children('button').css('visibility', 'hidden');
            } else {
                $(this).children('button').css('visibility', 'visible');
            }
        });
    </script>
</body>
</html>