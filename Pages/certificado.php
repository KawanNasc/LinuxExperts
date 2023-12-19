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

            <link rel="preconnect" 
                  href="https://fonts.googleapis.com">
            <link rel="preconnect" 
                  href="https://fonts.gstatic.com" 
                  crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" 
                  rel="stylesheet">

            <link rel="shortcut icon" 
                  href="../Imgs/Favicons/favicon.ico" 
                  type="image/x-icon">
            <link rel="apple-touch-icon" sizes="180x180" href="../Imgs/Favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="../Imgs/Favicons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="../Imgs/Favicons/favicon-16x16.png">
            <link rel="manifest" href="../Imgs/Favicons/site.webmanifest">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
                  rel="stylesheet" 
                  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
                  crossorigin="anonymous">

            <link rel="stylesheet" 
                  href="../CSS/estilos.css">

            <style>

                  h1 { display: flex; flex-wrap: wrap; margin-top: 20%; margin-left: 30%; }

                  .certificado { 
                        background-color: rgb(255, 255, 255); 
                        color: rgb(0, 0, 0); 
                        border-radius: 10%; 
                        border-style: groove; 
                        border-color: gold; 
                        border-width: 10px; 
                        width: 95%; 
                        margin-left: 3%; 
                        padding: 10%;
                  }

                  h3, h4, h5 { font-family: 'Libre Baskerville', serif; margin-top: 10%; margin-bottom: 0%; margin-right: 0%; }

                  @media screen and (min-width: 980px) {

                        h1 { margin-top: 10%; margin-left: 46% }

                        .certificado { 
                              border-width: 15px; width: 25%; margin-left: 37%; padding: 0%;
                        }

                  }

            </style>

            <title>Linux Experts</title>

        </head>

        <body>

            <header>
                        <h1>Certificado</h1>
                        <h2>de Conclusão de Curso</h2>
            </header>

            <main>

                  <div class="certificado">

                  <?php

                        $host = "localhost:3306";
                        $usuario = "root";
                        $senha = "";
                        $bd = "LinuxExperts";
                        $conexao = mysqli_connect($host, $usuario, $senha, $bd);

                        $selectAlunos = mysqli_query($conexao, "select * from aluno;");
                        $selectAvaliacao = mysqli_query($conexao, "select * from avaliacao;");
                        $selectFrequencia = mysqli_query($conexao, "select * from frequencia;");

                        $aluno = $_GET['aluno'];
                        $urlInt = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        $urlPadrao = 'http://localhost/LinuxExperts/Pages/certificado.php?aluno=';

                        $escreverAlunos = mysqli_fetch_array($selectAlunos);

                        if ( urldecode($urlInt) == $urlPadrao . $aluno ) { 
                              echo "<h3>Certificamos que o aluno " .  $aluno . " inscrito no CPF de N°"  . $escreverAlunos['cpf_alu'] . " concluiu o curso de Linux</h3>"; 
                        }

                        mysqli_close($conexao);

                  ?>

                  <h4>Ministrado pela Linux Experts, Prof°Israel Nuncio Dias Lucania</h4>
                  <h4>Realizada no perído: 1/3/2023-30/6/2024</h4>

                  <br>

                  <h5>Guarulhos, 1/7/2024</h5>

                  <img src="../Imgs/assinatura.png" alt="Assinatura do Prof°Israel" title="Assinatura do Prof°Israel">
                  <h5>Assinatura</h5>

                  </div>

                  <a href="../index.php"> <button type="button"> Página principal </button> </a>


            </main>

            <footer>

                

            </footer>

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