<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/939fae6bc5.js" crossorigin="anonymous"></script>

    <?php include_once "others/connection.php"?>

    <title>SpeedDrive</title>
</head>
<body>
    <header>
        <h1 class="logo">SpeedDrive</h1>

        <form action="" method="post" class="barra-pesquisa" id="form-pesquisa">
            <input type="text" name="nome_do_carro" placeholder="Digite o Carro em busca" size="45" class="campo-pesquisa">
            <button type="submit" class="btn-pesquisa"><i class="fas fa-search"></i></button>
        </form>
        <script>
            // Impede o envio do formulário ao clicar no botão de pesquisa
            document.getElementById('form-pesquisa').addEventListener('submit', function(event) {
              event.preventDefault();  // Impede o comportamento padrão de envio
              console.log("A pesquisa foi clicada, mas o envio foi bloqueado.");
            });
          </script>

        <nav class="menu">
            <ul>
                <li class="dropdown"> <!--Classe para que o submenu deste item desça-->
                    <a href="#" class="drop-btn">Sobre Nós</a> 
                    <ul class="submenu">
                        <li class="submenu-item"><a href="#sobre">Sobre</a></li>
                        <li class="submenu-item"><a href="#historia">História</a></li>
                        <li class="submenu-item"><a href="#missao">Missão</a></li>
                        <li class="submenu-item"><a href="#diferenca">Diferença</a></li>
                        <li class="submenu-item"><a href="#valores">Valores</a></li>
                        <li class="submenu-item"><a href="#visao">Visão</a></li>
                        <li class="submenu-item"><a href="#porque">Porque?</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <!--Classe para que o submenu deste item desça-->
                    <a href="#" class="drop-btn">Marcas</a> 
                    <ul class="submenu"> <!--Classe para que este menu tenha um sub-->
                        <!--<li class="submenu-item"><a href="#">BMW</a></li> Classe de item do submenu-->

                        <?php
                            $sql = 'SELECT DISTINCT marca_carros FROM carros';
                            if ($res=mysqli_query($con, $sql)) {
                                $marcaCarro = array();
                                $i = 0;

                                while($registros = mysqli_fetch_assoc($res)) {
                                    $marcaCarro[$i] = $registros['marca_carros'];
                                    ?>

                                    <li class="submenu-item"><a href="/proj/catalogo/catalogo.php?marca=<?php echo $marcaCarro[$i] ?>"><?php echo $marcaCarro[$i]; ?></a></li>

                                    <?php
                                    $i++;
                                }
                            }
                        ?>
                    </ul>
                </li>
                <!--<li><a href="#">Contato</a></li>-->
            </ul>
        </nav>

    </header>

    <main>
        <video autoplay muted loop class="bg-video">
                <source src="videos/background_car.mp4" type="video/mp4">            
        </video>

        <div class="background">
            <section id="sobre">
                <div class="content">
                    <h2>Sobre</h2>
                    <p>A Speed Drive é mais do que apenas uma loja de carros: somos uma experiência no universo automotivo. Desde a nossa fundação, buscamos ser referência em qualidade, confiança e inovação no mercado de vendas e revendas de veículos. Localizada no coração da sua cidade, nossa missão é transformar o sonho do carro ideal em realidade, garantindo uma jornada de compra que combina excelência no atendimento, diversidade de opções e transparência em cada etapa.</p>
                </div>
            </section>
            <section id="historia">
                <div class="content">
                    <h2>Nossa História</h2>
                    <p>Com anos de experiência no setor automotivo, a Speed Drive nasceu de uma paixão incontrolável por carros e por conectar as pessoas ao veículo que realmente reflete suas necessidades e estilo de vida. Começamos como uma pequena loja, com um estoque limitado, mas com um propósito ambicioso: oferecer não apenas veículos, mas uma experiência de compra que encantasse e fidelizasse nossos clientes.</p>
                    <p>Ao longo dos anos, crescemos e conquistamos nosso espaço no mercado, sempre investindo em qualidade, inovação e em um atendimento próximo e personalizado. Hoje, somos reconhecidos como uma das melhores lojas de vendas e revendas de carros da região, com um portfólio de veículos diversificado que atende desde o público que busca modelos populares e econômicos até os apaixonados por automóveis premium e de luxo.</p>
                </div>
            </section>
            <section id="missao">
                <div class="content">
                    <h2>Nossa Missão</h2>
                    <p>Oferecer aos nossos clientes veículos de qualidade, com preços justos, condições acessíveis e um atendimento humanizado. Queremos que cada pessoa que entra na Speed Drive saia com a certeza de que fez um excelente negócio, seja adquirindo seu primeiro carro, trocando por um modelo mais moderno ou investindo em veículos de alta performance.</p>
                </div>
            </section>
            <section id="diferenca">
                <div class="content">
                    <h2>O que nos diferencia?</h2>
                    <ol>
                        <li>
                            <h3>Estoque Diversificado</h3>
                            <p>Na Speed Drive, você encontra veículos novos e seminovos de diversas marcas, modelos e categorias. Desde carros compactos e econômicos, ideais para o dia a dia, até SUVs, sedans e esportivos de tirar o fôlego. Trabalhamos apenas com veículos cuidadosamente inspecionados, garantindo que você adquira um carro em perfeito estado.</p>
                        </li>
                        <li>
                            <h3>Transparência Total</h3>
                            <p>Nosso compromisso com a transparência é um dos pilares da nossa atuação. Cada veículo vendido pela Speed Drive passa por uma inspeção rigorosa e tem seu histórico revisado. Além disso, oferecemos toda a documentação e informações necessárias para que o cliente compre com segurança e confiança.</p>
                        </li>
                        <li>
                            <h3>Atendimento Personalizado</h3>
                            <p>Sabemos que cada cliente é único, com sonhos, preferências e orçamentos diferentes. Por isso, nossos consultores automotivos estão prontos para oferecer um atendimento personalizado, ajudando você a encontrar o carro ideal para suas necessidades.</p>
                        </li>
                        <li>
                            <h3>Condições de Pagamento Facilitadas</h3>
                            <p>Na Speed Drive, entendemos que adquirir um carro é um investimento significativo. Por isso, trabalhamos com diversas opções de financiamento, planos flexíveis e parcerias com instituições financeiras renomadas. Nosso objetivo é tornar o processo de compra simples e acessível.</p>
                        </li>
                        <li>
                            <h3>Pós-Venda de Qualidade</h3>
                            <p>Nosso compromisso com o cliente não termina na entrega do veículo. Oferecemos um serviço de pós-venda completo, que inclui assistência técnica, suporte para manutenção, garantia estendida e muito mais. Queremos que você aproveite seu carro com tranquilidade e segurança.</p>
                        </li>
                    </ol>
                </div>
            </section>
            <section id="valores">
                <div class="content">
                    <ul>
                        <h2>Nossos Valores</h2>
                        <li>
                            <p><strong>Confiança:</strong> Somos comprometidos com a ética e a honestidade em todas as nossas negociações.</p>
                        </li>
                        <li>
                            <p><strong>Excelência:</strong> Trabalhamos continuamente para superar as expectativas dos nossos clientes.</p>
                        </li>
                        <li>
                            <p><strong>Paixão por carros:</strong> Cada veículo que entra na nossa loja é tratado com cuidado e dedicação.</p>
                        </li>
                        <li>
                            <p><strong>Inovação:</strong> Acompanhamos as tendências do mercado automotivo para oferecer sempre as melhores opções.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="visao">
                <div class="content">
                    <h2>Nossa Visão</h2>
                    <p>A Speed Drive quer ser reconhecida como a principal escolha dos consumidores que buscam veículos de qualidade e atendimento diferenciado. Nosso objetivo é expandir nossas operações, investir em tecnologia e fortalecer a relação de confiança com nossos clientes e parceiros.</p>
                </div>
            </section>
            <section id="porque">
                <div class="content">
                    <h2>Por que escolher a Speed Drive?</h2>
                    <p>Comprar ou trocar um carro é um momento especial, e a Speed Drive quer tornar essa experiência única e inesquecível. Seja pela nossa seleção criteriosa de veículos, pelas condições atrativas ou pelo nosso atendimento diferenciado, garantimos que você estará fazendo a escolha certa ao confiar em nós.</p>
                    <p>Na Speed Drive, seu próximo carro está esperando por você. Venha nos visitar e descubra por que somos a escolha preferida dos apaixonados por carros! 🚗✨</p>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div>
            <p class="logo">SpeedDrive</p>
            <a href="https://github.com/MuriloHsTorres/ProjetoCarros" target="_blank"><i class="fa-brands fa-github"></i></a>
            <p>Email: speeddrive&#64;motors.com</p>
            <p>Telefone: (55) +12 98562-2653</p>
            <p>Localização: Rua Motors Sports 111, São Paulo, Brasil</p>
            <p>&#169; SpeedDrive. Todos direitos reservados.</p>
        </div>
    </footer>

    <?php if(isset($con)){ mysqli_close($con); }?>
</body>
</html>