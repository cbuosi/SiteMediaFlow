<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="icon" type="image/png" href="./img/favicon.ico">
    <title>MediaFlow - Painel Digital Inteligente</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="./css/site.css">
    <script src="./js/site.js?v=1"></script>


</head>

<body>

    <header>

        <div class="container header-content">

            <div class="logo">
                <img src="./img/mf1.png" alt="MediaFlow Logo" style="max-width: 100%; height: auto;">
            </div>


            <!-- <div class="logo">
                <img src="./img/mf2.png" alt="MediaFlow Logo" style="max-width: 100%; height: auto;">
            </div>
            <div class="logo">
                <img src="./img/mf3.png" alt="MediaFlow Logo" style="max-width: 100%; height: auto;">
            </div>
            <div class="logo">
                <img src="./img/mf4.png" alt="MediaFlow Logo" style="max-width: 100%; height: auto;">
            </div> -->

            <nav>
                <a href="#vantagens"><i class="fa-solid fa-star"></i> Vantagens</a>
                <a href="#equipamentos"><i class="fa-solid fa-tv"></i> Equipamentos</a>
                <a href="#planos"><i class="fa-solid fa-tags"></i> Planos</a>
                <a href="#contato"><i class="fa-solid fa-envelope"></i> Contato</a>
            </nav>

            <a href="#contato" class="btn-primary">
                Solicitar Demo
            </a>

        </div>

    </header>

    <br />

    <section class="hero">

        <div class="container hero-grid">

            <div class="hero-left">

                <div style="padding: 20px">
                    <img src="./img/media_logo.png" style="max-width: 100%; height: auto;">                
                </div>


                <h1>
                    Painel Digital
                    <span class="gradient-text">
                        Inteligente
                    </span>
                    e Automatizado
                </h1>

                <p>
                    Plataforma moderna para reprodução sincronizada de vídeos,
                    imagens e campanhas multimídia em telas, TVs e painéis digitais.
                    Controle remoto, estabilidade operacional e gerenciamento centralizado.
                </p>

                <div class="hero-actions">
                    <a href="#contato" class="btn-primary">
                        <i class="fa-solid fa-envelope"></i> Entrar em Contato
                    </a>
                    <a href="#vantagens" class="btn-secondary">
                        <i class="fa-solid fa-circle-info"></i> Conhecer Recursos
                    </a>
                </div>

            </div>

            <div class="hero-right">

                <div class="hero-card">

                    <h3>Status do Sistema</h3>

                    <div class="status">

                        <div class="status-item">
                            <span><i class="fa-solid fa-rotate"></i> - Sincronização Remota</span>
                            <div class="dot"></div>
                        </div>

                        <div class="status-item">
                            <span><i class="fa-solid fa-calendar-days"></i> - Agendamento de Playlist e Mídias</span>
                            <div class="dot"></div>
                        </div>

                        <div class="status-item">
                            <span><i class="fa-solid fa-download"></i> - Download Automático</span>
                            <div class="dot"></div>
                        </div>

                        <div class="status-item">
                            <span><i class="fa-solid fa-expand"></i> - Reprodução Fullscreen</span>
                            <div class="dot"></div>
                        </div>

                        <div class="status-item">
                            <span><i class="fa-solid fa-chart-line"></i> - Monitoramento do Player</span>
                            <div class="dot"></div>
                        </div>

                        <div class="status-item">
                            <span><i class="fa-solid fa-clock"></i> - Execução 24/7</span>
                            <div class="dot"></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="config1">

        <div class="container">

            <div class="placeholder">

                <h3>
                    <i class="fa-solid fa-gears"></i> Fácil configuração
                </h3>

                <div class="carousel">
                    <img id="carousel-image" src="./img/config1_800.png" style="max-width: 100%; height: auto;">
                </div>

                <p style="margin-top:20px;">
                    A solução foi desenvolvida para oferecer uma configuração simples e rápida, permitindo colocar o player em funcionamento em poucos minutos. Todo o processo é automatizado e pensado para facilitar a instalação, atualização e gerenciamento do conteúdo, mesmo em ambientes com múltiplos dispositivos.
                </p>
                <p style="margin-top:20px;">
                    <i class="fa-solid fa-bolt"></i>
                    Instalação rápida e simplificada
                </p>

                <p>
                    <i class="fa-solid fa-gears"></i>
                    Configuração automatizada
                </p>

                <p>
                    <i class="fa-solid fa-cloud-arrow-down"></i>
                    Atualização remota de conteúdo
                </p>

                <p>
                    <i class="fa-brands fa-raspberry-pi"></i>
                    Compatível com Raspberry Pi e Linux
                </p>

                <p>
                    <i class="fa-solid fa-desktop"></i>
                    Interface simples e intuitiva
                </p>

                <p>
                    <i class="fa-solid fa-power-off"></i>
                    Inicialização automática do player
                </p>

                <p>
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    Fácil manutenção e suporte técnico
                </p>

            </div>

        </div>

    </section>

    <section id="config2">

        <div class="container">

            <div class="placeholder">

                <h3><i class="fa-solid fa-circle-play"></i> Player moderno</h3>

                <div class="carousel2">
                    <img id="carousel2-image" src="./img/video1.png" style="max-width: 100%; height: auto;">
                </div>


                <p>
                    O sistema utiliza o <strong>mpv media player</strong> como mecanismo de reprodução de mídia, um player moderno, leve e extremamente estável, amplamente utilizado em soluções de automação e Digital Signage. O MPV oferece reprodução fluida, baixo consumo de recursos e excelente compatibilidade com diferentes formatos de vídeo e imagem, sendo ideal para operação contínua em Raspberry Pi, Linux e Windows.
                </p>

                <p style="margin-top:20px;">
                    <i class="fa-solid fa-play"></i>
                    Reprodução fluida e otimizada
                </p>

                <p>
                    <i class="fa-solid fa-microchip"></i>
                    Baixo consumo de CPU e memória
                </p>

                <p>
                    <i class="fa-solid fa-gauge-high"></i>
                    Suporte a aceleração de hardware
                </p>

                <p>
                    <i class="fa-solid fa-expand"></i>
                    Execução automática em tela cheia
                </p>

                <p>
                    <i class="fa-solid fa-clock"></i>
                    Operação estável para uso 24/7
                </p>

                <p>
                    <i class="fa-solid fa-photo-film"></i>
                    Compatível com vídeos, imagens e playlists
                </p>

                <p>
                    <i class="fa-solid fa-terminal"></i>
                    Controle automatizado via linha de comando
                </p>

            </div>

        </div>

    </section>


    <section id="dependencia">

        <div class="container">

            <div class="placeholder">

                <h3>
                    <i class="fa-solid fa-ban"></i> Pare de depender de pendrives e atualizações manuais
                </h3>

                <div class="">
                    <img src="./img/flash3.png" style="max-width: 100%; height: auto;">
                </div>

                <p style="margin-top:20px;">
                    Pare de depender de pendrives e atualizações manuais, um processo trabalhoso, sujeito a erros e sem controle eficiente de horários e campanhas. Centralize todo o gerenciamento das suas propagandas com atualização online, playlists agendadas por horário, conteúdos segmentados e letreiros digitais configuráveis exibidos sobre vídeos e mídias em tempo real.
                </p>

            </div>

        </div>

    </section>

    <section id="vantagens">

        <div class="container">

            <div class="section-title">
                <h2><i class="fa-solid fa-star"></i> Vantagens da Plataforma</h2>

                <p>
                    Estrutura robusta desenvolvida para ambientes corporativos,
                    publicidade digital, painéis informativos e automação de mídia.
                </p>
            </div>

            <div class="features-grid">

                <div class="feature-card">
                    <div> <img src="./img/sinc1.png" style="max-width: 100%; height: auto;"/> </div>
                    <h3>Sincronização Inteligente</h3>
                    <p>
                        Atualização automática de playlists e conteúdos diretamente do servidor central.
                    </p>
                </div>

                <div class="feature-card">
                    <div> <img src="./img/play1.png" style="max-width: 100%; height: auto;"/> </div>
                    <h3>Playback em Tela Cheia</h3>
                    <p>
                        Reprodução contínua de vídeos e imagens utilizando MPV com alta estabilidade.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">☁️</div>
                    <h3>Gerenciamento Remoto</h3>
                    <p>
                        Controle centralizado de dispositivos, campanhas e mídias distribuídas.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Alta Robustez</h3>
                    <p>
                        Sistema preparado para recuperação automática em caso de falhas operacionais.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📢</div>
                    <h3>Campanhas Inteligentes</h3>
                    <p>
                        Configure propagandas específicas por horário,
                        organize playlists automáticas e exiba letreiros digitais personalizados.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <section id="arquitetura">

        <div class="container">

            <div class="section-title">

                <h2><i class="fa-solid fa-server"></i> Arquitetura e Tecnologia</h2>

                <p>
                    Plataforma desenvolvida para operação contínua,
                    sincronização remota e reprodução automatizada de mídia.
                </p>

            </div>

            <div class="features-grid">

                <div class="feature-card">

                    <div class="feature-icon">🔄</div>

                    <h3>Sincronização Inteligente</h3>

                    <p>
                        O MediaFlow conecta-se automaticamente ao servidor central
                        para obter playlists, campanhas e atualizações de mídia em tempo real.
                    </p>

                </div>

                <div class="feature-card">

                    <div class="feature-icon">🎬</div>

                    <h3>Reprodução Automatizada</h3>

                    <p>
                        Vídeos e imagens são executados automaticamente em tela cheia
                        utilizando o player MPV com alta estabilidade operacional.
                    </p>

                </div>

                <div class="feature-card">

                    <div class="feature-icon">⏰</div>

                    <h3>Agendamento de Conteúdo</h3>

                    <p>
                        O sistema exibe apenas os conteúdos programados
                        para o horário atual, permitindo campanhas segmentadas.
                    </p>

                </div>

                <div class="feature-card">

                    <div class="feature-icon">⚙️</div>

                    <h3>Tecnologia Moderna</h3>

                    <p>
                        Desenvolvido em C# com .NET 8,
                        utilizando arquitetura robusta,
                        logging com Serilog e sincronização segura via HTTP.
                    </p>

                </div>

                <div class="feature-card">

                    <div class="feature-icon">🛡️</div>

                    <h3>Recuperação Automática</h3>

                    <p>
                        O sistema monitora continuamente o player de mídia
                        e realiza reinicializações automáticas em caso de falhas.
                    </p>

                </div>

                <div class="feature-card">

                    <div class="feature-icon">☁️</div>

                    <h3>Gerenciamento Centralizado</h3>

                    <p>
                        Controle remoto de campanhas, dispositivos,
                        volume, playlists e atualizações de conteúdo.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!--
    <section id="videos">

        <div class="container">

            <div class="placeholder">
                <h3>Vídeos Promocionais</h3>

                <p>
                    Espaço reservado para vídeos demonstrativos, apresentações comerciais,
                    showcases da plataforma e materiais institucionais.
                </p>
            </div>

        </div>

    </section>
    -->

    <section id="equipamentos">

        <div class="container">

            <div class="section-title">

                <h2><i class="fa-solid fa-tv"></i> Equipamentos Necessários</h2>

                <p>
                    Estrutura simples, econômica e fácil de instalar.
                </p>

            </div>

            <div class="features-grid">

                <div class="feature-card">

                    <div style="position:relative; width:400px; margin:0 auto;">

                        <button onclick="troca(-1)" style="position:absolute; left:10px; top:50%;"> ❮ </button>

                        <img id="imgTV" src="./img/tv11.png" style="max-width: 100%; height: auto;">

                        <button onclick="troca(1)" style="position:absolute; right:10px; top:50%;"> ❯ </button>

                    </div>

                    <div class="feature-icon">📺</div>

                    <h3>TV ou Painel</h3>

                    <p>
                        Utilize a própria TV do estabelecimento
                        para exibir campanhas, vídeos e comunicados digitais.
                    </p>

                </div>

                <div class="feature-card">

                    <div style="position:relative; width:400px; margin:0 auto;">

                        <button onclick="troca2(-1)" style="position:absolute; left:10px; top:50%;"> ❮ </button>

                        <img id="imgRasp" src="./img/rasp1.png" style="max-width: 100%; height: auto;">

                        <button onclick="troca2(1)" style="position:absolute; right:10px; top:50%;"> ❯ </button>

                    </div>

                    <div class="feature-icon">🖥️</div>
                    <h3>Raspberry Pi</h3>

                    <p>
                        Compatível com Raspberry Pi 3, 4 ou 5. O Raspberry Pi é um equipamento compacto, de baixo custo e fácil instalação, podendo ser fixado discretamente atrás da TV ou painel. O dispositivo pode ser fornecido pelo cliente ou disponibilizado por nós.
                    </p>

                </div>

            </div>

        </div>

    </section>

   <!-- ===== PRICING SECTION ===== -->
    <section id="planos">
 
        <div class="container">
 
            <div class="pricing-header">
                <h2><i class="fa-solid fa-tags"></i> Planos e Preços</h2>
                <p>
                    Escolha o plano ideal para o seu negócio. Compatível com seu próprio equipamento ou com o nosso dispositivo em comodato ou venda.
                </p>
            </div>
 
            <div class="pricing-table-wrap">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th><i class="fa-solid fa-layer-group"></i>&nbsp; Plano</th>
                            <th>
                                <i class="fa-solid fa-wifi"></i>&nbsp; Só Serviço
                                <span style="display:block; font-weight:400; font-size:0.75rem; opacity:0.7; margin-top:2px;">* Equipamento próprio</span>
                            </th>
                            <th>
                                <i class="fa-brands fa-raspberry-pi"></i>&nbsp; Serviço + Comodato
                                <span style="display:block; font-weight:400; font-size:0.75rem; opacity:0.7; margin-top:2px;">** Fidelidade 12 meses</span>
                            </th>
                            <th>
                                <i class="fa-solid fa-cart-shopping"></i>&nbsp; Serviço + Compra
                                <span style="display:block; font-weight:400; font-size:0.75rem; opacity:0.7; margin-top:2px;">*** Equipamento é seu</span>
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td class="plan-name">
                                Starter
                                <br>
                                <span class="plan-badge badge-starter">1 tela</span>
                            </td>
                            <td>
                                <span class="price-main">R$ 49<small>/mês</small></span>
                            </td>
                            <td>
                                <span class="price-main" style="color:#ff9f40;">R$ 89<small>/mês</small></span>
                            </td>
                            <td>
                                <div class="price-combo">
                                    <span class="price-main">R$ 499</span>
                                    <span class="price-plus">+ R$ 49/mês</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="plan-name">
                                Business
                                <br>
                                <span class="plan-badge badge-business">até 5 telas</span>
                            </td>
                            <td>
                                <span class="price-main">R$ 159<small>/mês</small></span>
                            </td>
                            <td>
                                <span class="price-main" style="color:#ff9f40;">R$ 229<small>/mês</small></span>
                            </td>
                            <td>
                                <div class="price-combo">
                                    <span class="price-main">R$ 499<small>/un</small></span>
                                    <span class="price-plus">+ R$ 159/mês</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="plan-name">
                                Pro / Enterprise
                                <br>
                                <span class="plan-badge badge-business" style="color:#c084fc; border-color:rgba(192,132,252,0.3); background:rgba(192,132,252,0.1);">telas ilimitadas</span>
                            </td>
                            <td colspan="2" style="color:#8a9bb5; font-style:italic; vertical-align:middle;">
                                <i class="fa-solid fa-phone"></i>&nbsp; Sob consulta — redes, franquias e revendedores &nbsp;
                                <a href="#contato" style="color:#4da3ff; text-decoration:none; font-style:normal; font-weight:600;">
                                    Falar conosco <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
 
            <!-- Notes -->
            <div class="pricing-notes">
                <div class="pricing-note">
                    <span class="note-marker">ATENÇÃO</span>
                    <span>O cliente já deve ter uma TV / suporte instalado em local apropriado no seu estabelecimento. Ajudamos na escolha/instalação caso necessário.</span>
                </div>
                <div class="pricing-note">
                    <span class="note-marker">*</span>
                    <span>O cliente já possui Raspberry Pi 3 ou superior, Mini PC ou outro dispositivo compatível com Linux. Apenas a mensalidade do serviço é cobrada.</span>
                </div>
                <div class="pricing-note">
                    <span class="note-marker">**</span>
                    <span>O cliente recebe o equipamento (Raspberry Pi completo com case, cartão SD e fonte) por comodato. Em caso de encerramento do contrato, o equipamento <strong style="color:#cdd8ea;">é devolvido</strong> à MediaFlow.</span>
                </div>
                <div class="pricing-note">
                    <span class="note-marker">***</span>
                    <span>O cliente compra o equipamento (Raspberry Pi completo com case, cartão SD e fonte), que passa a ser <strong style="color:#cdd8ea;">de sua propriedade.</strong></span>
                </div>
            </div>
 
            <!-- CTA -->
            <div class="pricing-cta">
                <p>Dúvidas sobre qual plano escolher? Nossa equipe te ajuda.</p>
                <a href="#contato" class="btn-primary">
                    <i class="fa-solid fa-envelope"></i> Solicitar Orçamento
                </a>
            </div>
 
        </div>
 
    </section>

    <section id="campanhas">

        <div class="container">

            <div class="placeholder">

                <div>
                    <img src="./img/ads2.png" style="max-width: 100%; height: auto;">
                </div>


                <h3>
                    Também criamos e mantemos suas campanhas publicitárias
                </h3>

                <p style="margin-top:20px;">
                    Desenvolvendo conteúdos modernos e profissionais para TVs corporativas, painéis digitais e comunicação visual. Produzimos campanhas com logotipos, imagens promocionais, tabelas de preços, vídeos, chamadas visuais e animações que ajudam a destacar produtos, serviços e promoções de forma clara e atrativa.
                </p>
                <p style="margin-top:20px;">
                    Contamos com profissionais capacitados e parceria com empresas consolidadas nas áreas de marketing e publicidade, garantindo materiais de alta qualidade visual e excelente impacto comercial. Tudo isso com atendimento próximo, atualização contínua das campanhas e preços acessíveis para empresas de todos os portes.
                </p>

            </div>

        </div>

    </section>

    <section id="contato">

        <div class="container">

            <?php if (isset($_GET['enviado'])): ?>
                <p style="color:green; text-align:center;">
                    ✅ Mensagem enviada com sucesso!
                </p>
            <?php endif; ?>                

            <div class="contact-box">


                <div class="contact-info">

                    <h3><i class="fa-solid fa-envelope"></i> Entre em Contato</h3>

                    <p>
                        Preencha os dados ao lado para solicitar uma demonstração, orçamento ou maiores informações sobre a plataforma.
                    </p>

                    <p><i class="fa-solid fa-envelope"></i> buosi@bbsinfo.com.br</p>
                    <p><i class="fa-solid fa-mobile-screen"></i> (11) 95390-7232</p>
                    <p><i class="fa-solid fa-link"></i> www.bbsinfo.com.br</p>
                    <p><i class="fa-solid fa-paper-plane"></i> <a href="mailto:buosi@bbsinfo.com.br?subject=Contato pelo site&body=Olá, gostaria de mais informações.">    Enviar e-mail</a></p>

                </div>

                <form class="contact-form" id="contactForm" action="contato.php" method="POST">

                    <input type="text" name="nome" placeholder="Seu nome">
                    <input type="email" name="email" placeholder="Seu e-mail">
                    <input type="text" name="empresa" placeholder="Empresa">
                    <textarea name="mensagem" placeholder="Mensagem"></textarea>

                    <button class="btn-primary" type="submit">
                        <i class="fa-solid fa-paper-plane"></i> Enviar Mensagem
                    </button>

                </form>

            </div>

        </div>

    </section>

    <footer>

        <div class="container footer-content">

            <div class="footer-left">

                <img src="./img/logo-bbs.png" alt="BBS Informática" style="max-width: 100%; height: auto;">

                <div class="footer-text">
                    ❤️ Desenvolvido com amor por <strong>BBS Informática</strong> 🚀
                </div>

            </div>

            <div class="footer-text">
                <p>
                    <i class="fa-regular fa-copyright"></i>
                    2026 <strong>MediaFlow</strong> - Todos os direitos reservados
                </p>
            </div>

        </div>

    </footer>


</body>

</html>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-73KYQ0FRZT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-73KYQ0FRZT');
</script>