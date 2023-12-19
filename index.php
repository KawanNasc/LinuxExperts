<!DOCTYPE html>

    <html lang="pt-br">

        <head>

            <meta charset="UTF-8">
            <meta name="viewport" 
                  content="width=device-width, 
                           initial-scale=1.0">

            <link rel="preconnect" 
                  href="https://fonts.googleapis.com">
            <link rel="preconnect" 
                  href="https://fonts.gstatic.com" 
                  crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" 
                  rel="stylesheet">

            <link rel="shortcut icon" 
                  href="Imgs/Favicons/favicon.ico" 
                  type="image/x-icon">
            <link rel="apple-touch-icon" sizes="180x180" href="Imgs/Favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="Imgs/Favicons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="Imgs/Favicons/favicon-16x16.png">
            <link rel="manifest" href="Imgs/Favicons/site.webmanifest">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
                  rel="stylesheet" 
                  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
                  crossorigin="anonymous">

            <link rel="stylesheet" 
                  href="CSS/estilos.css">

            <style>

                  h1 { margin-top: 7%; }
                  img { width: 80%; height: 60%; }

                  @media screen and (min-width: 980px) {
                        img { width: 20%; height: 10%; }
                  }

            </style>

            <title>Linux Experts</title>

        </head>

        <body>

            <header>

                  <h1>🐧Bem-Vindo ao nosso curso profissionalizante Linux Experts!🐧</h1>
                  <img src="Imgs/introducao.png" 
                       alt="Nosso animal de estimação da Linux Experts" 
                       title="Nosso animal de estimação da Linux Experts">

            </header>

            <main>

                  
                  <a href="Pages/curso.php"> <button type="button"> Sobre a Linux Experts </button> </a>
                  

                  <div class="btn-group">

                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Cadastre-se no Curso
                        </button>

                        <form action="Pages/historico.php" method="post">
                              
                              <ul class="dropdown-menu">
                                    <li class="dropdown-item">Nome completo: <input type="text" name="nome" size="30" maxlength="30" autofocus></li>
                                    <li class="dropdown-item">E-Mail: <input type="text" name="email" size="30" maxlength="30"></li>
                                    <li class="dropdown-item">CPF: <input type="text" name="cpf" size="14" maxlength="14"></li>
                                    <li class="dropdown-item">Aluno: <input type="radio" name="atuacao" value="aluno"> Professor: <input type="radio" name="atuacao" value="prof"></li> 
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item"><input type="submit" name="cadastrar" value="Cadastrar e acompanhar o resultado"></a></li>
                              </ul>
                              

                        </form>
                        
                  </div>

            </main>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
                    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
                    crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" 
                    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" 
                    crossorigin="anonymous">
            </script>

        </body>

    </html>