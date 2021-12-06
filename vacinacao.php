<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title> Vacinas </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/estilo.css" type="text/css" />

</head>

<body>
    <header>
        <?php
        include 'nav.php';
        ?>
    </header>
    <article class="container">
        <h1 class="text-center">Vacinas</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Vacinas</th>
                    <th scope="col">Quem pode tomar</th>
                    <th scope="col">Contraindicação</th>
                    <th scope="col">Proteção</th>
                    <th scope="col">Efeitos colaterais</th>
                    <th scope="col">Após infecção</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Butantan</th>
                    <td>Pessoas com idade a partir de 18 anos e que pertençam aos grupos prioritários para vacinação. Em caso de dúvida sobre qualquer vacina, é fundamental consultar os serviços de saúde. É preciso respeitar o cronograma de vacinação indicado pelas autoridades de saúde.</td>
                    <td>A vacina está contraindicada para pessoas que possuem hipersensibilidade a algum componente da vacina ou para pessoas que já apresentaram reação grave (anafilática) confirmada a uma dose anterior da vacina. Como precaução, para pessoas com doenças febris moderadas ou graves, recomenda-se o adiamento da vacinação até a melhora clínica. Pacientes que fazem uso de imunoglobulina humana devem ser vacinados com pelo menos um mês de intervalo entre a administração da imunoglobulina e a vacina. Quanto aos pacientes oncológicos (com câncer), transplantados e demais pacientes imunossuprimidos, os estudos de eficácia e segurança da vacina não foram avaliadas nesta população. No entanto, considerando que a vacina é de vírus inativado, é improvável que exista risco maior de eventos adversos; ainda assim, a decisão referente à vacinação deverá ser realizada pelo paciente em conjunto com profissionais dos serviços de saúde ou seu médico. A segurança e eficácia da vacina não foram avaliadas em gestantes, puérperas e lactantes. Para as mulheres nestas condições e que fazem parte de um dos grupos prioritários, a vacinação poderá ser realizada após avaliação cautelosa dos riscos e benefícios, com decisão compartilhada entre a mulher e o serviço de saúde ou seu médico. Em caso de dúvida sobre a vacina, é fundamental consultar os serviços de saúde.</td>
                    <td>O esquema vacinal completo é composto por duas doses. Conforme os estudos clínicos e indicação na bula, o intervalo entre a primeira e a segunda deve ser de 14 a 28 dias para aplicação da segunda dose.</td>
                    <td>Não foram registrados eventos adversos graves e de interesse especial após aplicação. O evento adverso mais comum observado durante os estudos clínicos foi dor no local da aplicação. Algumas pessoas apresentaram febre, dor muscular, náusea e dor de cabeça. Ocorreram reações alérgicas em apenas 0,3% dos participantes do estudo alguns dias após a aplicação e não foi observada reação anafilática (reação alérgica grave).</td>
                    <td>A orientação é aguardar a melhora dos sintomas. Recomenda-se o adiamento da vacinação nas pessoas até a recuperação clínica total e pelo menos quatro semanas após o início dos sintomas ou quatro semanas a partir do primeiro resultado positivo do exame, mesmo que a pessoa estivesse assintomática (sem sintomas).</td>
                </tr>
                <tr>
                    <th scope="row">Fiocruz</th>
                    <td>Pessoas com idade a partir de 18 anos e que pertençam aos grupos prioritários para vacinação. Em caso de dúvida sobre qualquer vacina, é fundamental consultar os serviços de saúde. É preciso respeitar o cronograma de vacinação indicado pelas autoridades de saúde.</td>
                    <td>Como ocorre com outras vacinas, a administração desta vacina deve ser adiada em pessoas que estiverem com alguma enfermidade febril aguda grave. Porém, a presença de uma infecção menor, como um resfriado e/ou febre de baixo grau não deve retardar a vacinação. Não há indicação para aplicação em crianças e adolescentes, pois ainda não há dados disponíveis sobre segurança e eficácia para estes públicos. Pacientes que fazem uso de imunoglobulina humana devem ser vacinados com pelo menos um mês de intervalo entre a administração da imunoglobulina e a vacina. Quanto aos pacientes oncológicos (com câncer), transplantados e demais pacientes imunossuprimidos, os estudos de eficácia e segurança da vacina não foram avaliadas nesta população. No entanto, considerando que a vacina é de vírus inativado, é improvável que exista risco maior de eventos adversos; ainda assim, a decisão referente à vacinação deverá ser realizada pelo paciente em conjunto com profissionais dos serviços de saúde ou seu médico.

                        No Brasil, este imunizante não está indicado para gestantes e puérperas. Mulheres grávidas que receberam a primeira dose dessa vacina não devem tomar a segunda dose, sendo possível em SP fazer a intercambialidade de doses, ou seja, completar o esquema vacinal com o imunizante da Pfizer, conforme recomendações da SOGESP (Associação de Obstetrícia e Ginecologia do Estado de São Paulo). Em caso de dúvida, é fundamental consultar os serviços de saúde.</td>
                    <td>O esquema vacinal é composto por duas doses. A segunda dose deve ser administrada 12 semanas após a primeira.</td>
                    <td> As reações adversas mais frequentes reportadas nos estudos clínicos foram sensibilidade e/ou dor no local da injeção, dor de cabeça e/ou muscular e/ou na articulação, fadiga, mal estar, febre, calafrios e náusea. A maioria foi de intensidade leve a moderada e geralmente resolvida dentro de poucos dias após a vacinação. Em comparação com a primeira dose, as reações foram mais leves e menos frequentes após a segunda dose. Medicamentos analgésicos e/ou antitérmicos podem ser usados para proporcionar alívio das reações adversas após a vacinação.</td>
                    <td>A orientação é aguardar a melhora dos sintomas. Recomenda-se o adiamento da vacinação nas pessoas até a recuperação clínica total e pelo menos quatro semanas após o início dos sintomas ou quatro semanas a partir do primeiro resultado positivo do exame, mesmo que a pessoa estivesse assintomática (sem sintomas). </td>
                </tr>
                <tr>
                    <th scope="row">Pfizer</th>
                    <td>Esta vacina pode ser administrada em pessoas com idade a partir de 12 anos e que pertençam aos grupos prioritários para vacinação.</td>
                    <td>Como ocorre com outras vacinas, esta vacina não deve ser administrada em pessoas que tenham apresentado reação alérgica (hipersensibilidade) aos seus componentes.

                        Também deve ser adiada em pessoas que estiverem com alguma enfermidade febril aguda grave. Porém, a presença de um quadro leve de infecção (como um resfriado e/ou febre baixa) não deve retardar a vacinação.

                        Para as mulheres grávidas, puérperas e lactantes e que fazem parte de um dos grupos prioritários, a vacinação poderá ser realizada após avaliação cautelosa dos riscos e benefícios, com decisão compartilhada entre a mulher e o serviço de saúde ou seu médico. Em caso de dúvida sobre a vacina, é fundamental consultar os serviços de saúde.</td>
                    <td>O esquema vacinal é composto por duas doses.

                        O período indicado na bula do fabricante é de 21 dias, mas no Brasil foi inicialmente adotado o prazo de 12 semanas para ampliar a oferta da primeira dose na população.</td>
                    <td>As reações mais comuns que constam em bula são dor ou inchaço no local da injeção, dor de cabeça e/ou muscular e/ou na articulação, cansaço, diarreia, calafrios e febre. Reações menos comuns incluem vermelhidão no local de injeção, náusea e vômito.</td>
                    <td>A orientação é aguardar a melhora dos sintomas. Recomenda-se o adiamento da vacinação nas pessoas até a recuperação clínica total e pelo menos quatro semanas após o início dos sintomas ou quatro semanas a partir do primeiro resultado positivo do exame, mesmo que a pessoa estivesse assintomática (sem sintomas).</td>
                </tr>
                <tr>
                    <th scope="row">Janssen </th>
                    <td>A vacina de COVID-19 da Janssen pode ser administrada em pessoas com idade a partir de 18 anos e que pertençam aos grupos prioritários da campanha de vacinação.</td>
                    <td>Como ocorre com outras vacinas, esta vacina não deve ser administrada em pessoas que tenham apresentado reação alérgica (hipersensibilidade) aos seus componentes.

                        Também deve ser adiada em pessoas que estiverem com alguma enfermidade febril aguda grave. Porém, a presença de um quadro leve de infecção (como um resfriado e/ou febre baixa) não deve retardar a vacinação.

                        Não há indicação em bula para aplicação em crianças e adolescentes.

                        Em caso de dúvida sobre a vacina, é fundamental consultar os serviços de saúde.</td>
                    <td>Apenas uma dose. Esta é a única vacina contra COVID-19 disponível no Brasil com esquema vacinal por meio de dose única, até o momento.
                    </td>
                    <td>As reações mais comuns que constam em bula são dor no local da injeção, dor de cabeça e/ou muscular, cansaço e náusea. Reações menos comuns incluem vermelhidão ou inchaço no local de injeção, febre, arrepios, dor nas articulações e tosse.</td>
                    <td>A orientação é aguardar a melhora dos sintomas. Recomenda-se o adiamento da vacinação nas pessoas até a recuperação clínica total e pelo menos quatro semanas após o início dos sintomas ou quatro semanas a partir do primeiro resultado positivo do exame, mesmo que a pessoa estivesse assintomática (sem sintomas).</td>
                </tr>
            </tbody>
        </table>

    </article>


    <p class="fonte"> Fonte:https://www.vacinaja.sp.gov.br </p>

    <?php
    include 'footer.php';
    ?>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
></script>

</body>

</html>