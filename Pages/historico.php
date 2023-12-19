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

                  h1 { padding: 20%; margin-top: 0rem; }

                  button { margin: 0px; }

                  .tabela { display: flex; flex-wrap: wrap; }

                  @media screen and (min-width: 980px) {
                        h1 { padding: 5%; margin-left: 37%; }
                        table { margin-left: 27%; }
                        th, td { padding: 1%; }
                  }

            </style>

            <title>Linux Experts</title>

        </head>

        <body>

            <main>

                  <h2>Avaliamos os nossos alunos das seguintes competências desenvolvidas ao longo do curso: </h3>
                  <ul>
                        <li>Montagem do Linux</li>
                        <li>História e Compreensão sobre o Linux (Teórico)</li>
                        <li>Projetos de programas de Linux</li>
                        <li>Manejo do terminal CMD</li>
                        <li>Promovido aluno ao concluir o curso com média >= 80% e freqüecia >= 75%</li>
                  </ul>

                  <a href="../index.php"> <button type="button"> Página principal </button> </a>
                  
                  <div class="tabela">
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

                              $host = "localhost:3306";
                              $usuario = "root";
                              $senha = "";
                              $bd = "LinuxExperts";
                              $conexao = mysqli_connect($host, $usuario, $senha, $bd);

                              $inputNm = $_POST['nome'];
                              $inputEMail = $_POST['email'];
                              $inputCPF = $_POST['cpf'];
                              $input_atuacaoEscolhida = $_POST['atuacao'];

                              $randomizarMontagem = rand(0, 100);
                              $randomizarTeorica = rand(0, 100);
                              $randomizarProjetos = rand(0, 100);
                              $randomizarTerminal = rand(0, 100);
                              $randomizarFrequencia = rand(0, 200);
                                    
                              $media = ($randomizarMontagem + $randomizarTeorica + $randomizarProjetos + $randomizarTerminal) / 4;
                              $frequencia = ($randomizarFrequencia / 200) * 100;

                              if ( $inputNm != " " && $inputEMail != " " && $inputCPF != "" ) {      

                                    if ( $input_atuacaoEscolhida == "aluno" ) {
                                          $cadastro = mysqli_query($conexao, "insert into aluno(nm_alu, email_alu, cpf_alu) values('$inputNm', '$inputEMail', '$inputCPF');");
                                          $cadastro = mysqli_query($conexao, "insert into avaliacao(alu_not, not_mont, not_teo, not_proj, not_terminal) values('$inputNm', '$randomizarMontagem', '$randomizarTeorica', '$randomizarProjetos', '$randomizarTerminal');");
                                          $cadastro = mysqli_query($conexao, "insert into frequencia(alu_freq, frequencia) values('$inputNm', '$frequencia');");
                                          
                                    }
                                    else if ( $input_atuacaoEscolhida == "prof" ) {
                                          $cadastro = mysqli_query($conexao, "insert into prof(nm_prof, email_prof, cpf_prof) values('$inputNm', '$inputEMail', '$inputCPF');");
                                    }

                              }

                        
                              if ( $input_atuacaoEscolhida == "prof" ) {

                                    echo "<h1>👨‍🎓Histórico dos nossos alunos👨‍🎓</h1>";
                                    /*
                                    echo "<h4>Deseja digitar as notas dos alunos ou randomizar-las?</h4>";
                                    echo "<form action='historico.php' method='post'>";
                                    $digitacao = "<p>Digitar: <input type='radio' name='notas' value='digitacao'> Randomizar: <input type='radio' name='notas' value='random'>";
                                    echo "<input type='submit' name='registrar' value='registrar'></form>";
                                    */
                                    $selectAlunos = mysqli_query($conexao, "select * from aluno;");
                                    $selectAvaliacao = mysqli_query($conexao, "select * from avaliacao;");
                                    $selectFrequencia = mysqli_query($conexao, "select * from frequencia;");

                              }

                              
                              
                              else if ( $input_atuacaoEscolhida == "aluno" ) {
                                    
                                    echo "<h1>👨‍🎓Seu histórico👨‍🎓</h1>";
                                    $selectAlunos = mysqli_query($conexao, "select * from aluno where nm_alu='$inputNm';");
                                    $selectAvaliacao = mysqli_query($conexao, "select * from avaliacao where alu_not='$inputNm';");
                                    $selectFrequencia = mysqli_query($conexao, "select * from frequencia where alu_freq='$inputNm';");
                              }
                              // echo $digitacao;
                              
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