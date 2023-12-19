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

                table { margin-left: 30rem; }
                th, td { padding: 0.5rem; }

            </style>

            <title>Linux Experts</title>

        </head>

        <body>

            <header>

                  <h1>Sobre nosso Curso</h1>

            </header>

            <main>

            <table border=5px>

                  <tr style="background-color: white; color: black">
                        <th colspan=1>Alunos</th>
                        <th colspan=5>Avaliações realizadas</th>
                        <th colspan=2>Frequência</th>
                        <th colspan=1>Conclusão</th>
                  </tr>

                  <tr style="background-color: white; color: black">
                        <th>Nome</th>
                        <th>Montagem do sistema</th>
                        <th>Avaliação Teórica</th>
                        <th>Projetos</th>
                        <th>Domínio no terminal</th>
                        <th>Média</th>
                        <th>Carga horária</th>
                        <th>% Freqüencia</th>
                        <th>Certificado (Clique para acessar caso esteja promovido)</th>
                  </tr>

                <?php
            

                  $host = "localhost:3307";
                  $usuario = "root";
                  $senha = "";
                  $bd = "LinuxExperts";
                  $conexao = mysqli_connect($host, $usuario, $senha, $bd);

                  
                  $selectAlunos = mysqli_query($conexao, "select * from aluno;");
                  $selectAvaliacao = mysqli_query($conexao, "select * from avaliacao;");
                  $selectFrequencia = mysqli_query($conexao, "select * from frequencia;");

                  function certificado($media, $frequencia, $nm_alu) {

                        $hrefCertificado = "<a href='certificado.php?aluno=" . $nm_alu . "'>Promovido</a>";
                        
                        if ( $media >= 80 && $frequencia >= 75 ) { return "<td style='background-color: green'>" . $hrefCertificado . "</td>"; }
                        else { return "<td style='background-color: red'>Recuperação </td>"; }

                  }

                  while ( $escreverAlunos = mysqli_fetch_array($selectAlunos) ) {
                        $escreverAvaliacao = mysqli_fetch_array($selectAvaliacao);
                        $escreverFrequencia = mysqli_fetch_array($selectFrequencia);

                        $media = ($escreverAvaliacao['not_mont'] + $escreverAvaliacao['not_teo'] + $escreverAvaliacao['not_proj'] + $escreverAvaliacao['not_terminal']) / 4;
                        $frequencia = ($escreverFrequencia['frequencia'] / 200) * 100 ;

                        $nm_alu = $escreverAlunos['nm_alu'];

                        echo "<tr>
                                    <td>" . $escreverAlunos['nm_alu'] . "</td>
                                    <td>" . $escreverAvaliacao['not_mont'] . "</td>
                                    <td>" . $escreverAvaliacao['not_teo'] . "</td>
                                    <td>" . $escreverAvaliacao['not_proj'] . "</td>
                                    <td>" . $escreverAvaliacao['not_terminal'] . "</td>
                                    <td>" . $media . "</td>
                                    <td>" . $escreverFrequencia['frequencia'] . "</td>
                                    <td>" . $frequencia . "</td>" . 
                                    certificado($media, $frequencia, $nm_alu) .
                              "</tr>";

                  }

                  

                  mysqli_close($conexao);

                  ?>

                  </tr>

            </table>


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

