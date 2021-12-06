<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title> Testes </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;700;900&display=swap" rel="stylesheet">
<<<<<<< HEAD
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css" type="text/css" />

>>>>>>> c90733fbe999db8249c469546477650fb041294d
</head>

<body>
    <?php
    include 'nav.php';
    ?>

<<<<<<< HEAD
<h1 class="text-center">Testes de Covid-19</h1>

<div class="container">
    <div class="row align-items-center">
        
        
        <section class=" col-md-3 col-lg-3 ">
            <img src="images/test.png" alt="foto preto e branca de teste de covid-19" width="200" height="200" />
        </section>
        
        
        <article class="col-sm-12 col-md-9 col-lg-9 ">
            <div class="accordion" id="myAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Diagnóstico clínico</button>
                    </h2>
                    <section id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <p> O quadro clínico inicial da doença é caracterizado como Síndrome Gripal (SG). O diagnóstico pode ser feito por investigação clínico-epidemiológica, anamnese e exame físico adequado do paciente, caso este apresente sinais e sintomas característicos da covid-19. Deve-se considerar o histórico de contato próximo ou domiciliar nos 14 dias anteriores ao aparecimento dos sinais e sintomas com pessoas já confirmadas para covid-19.
                                
                                Também se deve suspeitar de casos clínicos típicos sem vínculo epidemiológico claramente identificável.
                                
                                Essas informações devem ser registradas no prontuário do paciente para eventual investigação epidemiológica. As características clínicas não são específicas e podem ser similares àquelas causadas por outros vírus respiratórios, que também ocorrem sob a forma de surtos e, eventualmente, circulam ao mesmo tempo, tais como influenza, parainfluenza, rinovírus, vírus sincicial respiratório, adenovírus, outros coronavírus, entre outros. </p>
                            </div>
                            </section>
                    </div>
               
                <div class="accordion-item">
=======
<header> 
    <?php
    include 'nav.php';
    ?>
 </header> 
    <h1 class="text-center">Testes de Covid-19</h1>

    <div class="container">
        <div class="row align-items-center">


            <section class=" col-md-3 col-lg-3 ">
                <img src="images/test.png" alt="foto preto e branca de teste de covid-19" width="200" height="200" />
            </section>


            <article class="col-sm-12 col-md-9 col-lg-9 ">
                <div class="accordion" id="myAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Diagnóstico clínico</button>
                        </h2>
                        <section id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p> O quadro clínico inicial da doença é caracterizado como Síndrome Gripal (SG). O diagnóstico pode ser feito por investigação clínico-epidemiológica, anamnese e exame físico adequado do paciente, caso este apresente sinais e sintomas característicos da covid-19. Deve-se considerar o histórico de contato próximo ou domiciliar nos 14 dias anteriores ao aparecimento dos sinais e sintomas com pessoas já confirmadas para covid-19.

                                    Também se deve suspeitar de casos clínicos típicos sem vínculo epidemiológico claramente identificável.

                                    Essas informações devem ser registradas no prontuário do paciente para eventual investigação epidemiológica. As características clínicas não são específicas e podem ser similares àquelas causadas por outros vírus respiratórios, que também ocorrem sob a forma de surtos e, eventualmente, circulam ao mesmo tempo, tais como influenza, parainfluenza, rinovírus, vírus sincicial respiratório, adenovírus, outros coronavírus, entre outros. </p>
                            </div>
                    </div>
                    </section>
                    <div class="accordion-item">
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                        <h2 class="accordion-header" id="headingTwo">
                            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Diagnóstico laboratorial</button>
                        </h2>
                        <section id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>O diagnóstico laboratorial pode ser realizado tanto por testes de biologia molecular, sorologia ou testes rápidos.</p>

                                <h5>Biologia molecular:</h5>
                                <p> permite identificar a presença do material genético (RNA) do material genético (RNA) do vírus SARS-CoV-2 em amostras de secreção respiratória, por meio das metodologias de RT-PCR em tempo real (RT-qPCR) e amplificação isotérmica mediada por loop com transcriptase reversa (reverse transcriptase loop-mediated isothermal amplification, RT-LAMP).</p>
<<<<<<< HEAD
                                
                                <h5>Sorologia:</h5>
                                <p>detecta anticorpos IgM, IgA e/ou IgG produzidos pela resposta imunológica do indivíduo em relação ao vírus SARS-CoV-2, podendo diagnosticar doença ativa ou pregressa. As principais metodologias são: Ensaio Imunoenzimático (Enzyme-Linked Immunosorbent Assay – Elisa), Imunoensaio por Quimioluminescência (Clia) e Imunoensaio por Eletroquimioluminescência (Eclia).</p>
                                
=======

                                <h5>Sorologia:</h5>
                                <p>detecta anticorpos IgM, IgA e/ou IgG produzidos pela resposta imunológica do indivíduo em relação ao vírus SARS-CoV-2, podendo diagnosticar doença ativa ou pregressa. As principais metodologias são: Ensaio Imunoenzimático (Enzyme-Linked Immunosorbent Assay – Elisa), Imunoensaio por Quimioluminescência (Clia) e Imunoensaio por Eletroquimioluminescência (Eclia).</p>

>>>>>>> c90733fbe999db8249c469546477650fb041294d
                                <h5>Testes rápidos:</h5>
                                <p> Estão disponíveis dois tipos de testes rápidos, de antígeno e de anticorpo, por meio da metodologia de imunocromatografia. O teste rápido de antígeno detecta proteína do vírus em amostras coletadas de naso/orofaringe, devendo ser realizado na infecção ativa (fase aguda) e o teste rápido de anticorpos detecta IgM e IgG (fase convalescente), em amostras de sangue total, soro ou plasma.</p>
                            </div>
                        </section>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Diagnóstico de Imagem</button>
                        </h2>
                        <section id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>Imagem (tomografia computadorizada de alta resolução – TCAR): As seguintes alterações tomográficas são compatíveis com caso da covid-19:
                                <ul>
                                    <li>OPACIDADE EM VIDRO FOSCO periférico, bilateral, com ou sem consolidação ou linhas intralobulares visíveis (“pavimentação”).</li>
                                    <li>OPACIDADE EM VIDRO FOSCO multifocal de morfologia arredondada com ou sem consolidação ou linhas intralobulares visíveis (“pavimentação”).</li>
                                    <li>SINAL DE HALO REVERSO ou outros achados de pneumonia em organização (observados posteriormente na doença).</li>
                                </ul>
<<<<<<< HEAD
                                
                                Observações
                                

                              <p>  Segundo o Colégio Brasileiro de Radiologia e Diagnóstico por Imagem (CBR), quando indicada, o protocolo é de uma TC de alta resolução (TCAR), se possível com protocolo de baixa dose. O uso de meio de contraste endovenoso, em geral, não está indicado, sendo reservado para situações específicas a serem determinadas pelo radiologista.</p>
                                <p> Fonte:https://www.gov.br/saude/pt-br/coronavirus/diagnostico </p>
=======

                                Observações

                                
                                Segundo o Colégio Brasileiro de Radiologia e Diagnóstico por Imagem (CBR), quando indicada, o protocolo é de uma TC de alta resolução (TCAR), se possível com protocolo de baixa dose. O uso de meio de contraste endovenoso, em geral, não está indicado, sendo reservado para situações específicas a serem determinadas pelo radiologista.</p>
                                <p > Fonte:https://www.gov.br/saude/pt-br/coronavirus/diagnostico </p>
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                            </div>
                        </section>
                    </div>
                </div>
            </article>

<<<<<<< HEAD
            
            
=======


>>>>>>> c90733fbe999db8249c469546477650fb041294d
        </div>
    </div>

    
    
    <?php
    include 'footer.php';
    ?>
<<<<<<< HEAD
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
></script>
=======
>>>>>>> c90733fbe999db8249c469546477650fb041294d

</body>

</html>