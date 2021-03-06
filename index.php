<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './lib/vendor/autoload.php';

$mail = new PHPMailer(true);


    try 
    {
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '4c16e9d9822f31';
        $mail->Password = '97f70ad43a6ca5';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525;

        if (isset($_POST['nome'])) {
            # PEGANDO OS DADOS DOS INPUT PARA EDITAR
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $tema = addslashes($_POST['tema']);
            $mensagem = addslashes($_POST['mensagem']);
    

            $mail->setFrom('emmanuel.j.francisco@gmail.com', 'Atendimento');
            $mail->addAddress($email, $nome);
            
            $mail->isHTML(true);
            $mail->Subject = $tema;
            $mail->Body = $mensagem;
            $mail->send();
        }
    } catch (Exception $e) {
        echo "Message erro: {$mail->ErroInfo}";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Willy Wonkas - Personal Portfolio Website Template" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="willy wonka" />
    <title>Ponto & Vírgula</title>
  <!--favicon-img--> 
   <link rel="icon" type="image/png" href="images/New/7-06.png">
   <!--favicon-img-->
   <!--main css file should not be removed -->
    <link rel="stylesheet" href="css/index.css">
    <!--main css file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>
    
    <!--contains all the div-->
    <div id="all">
    <!--mouse  follower-->
        <div class="cursor"></div>
    <!--mouse  follower-->
    <!--loader-->
        <div id="loader">
            <span class="color">O Artilheiro </span>Mental
        </div>
    <!--loader-end-->


<!--Start of Tawk.to Script-->
<!--
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61519ea825797d7a8901015b/1fgjd7hr2';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script> -->
<!--End of Tawk.to Script-->

    <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
    <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="logo">
                <a href="index.php"><img src="images/New/6-06.png" alt="logo"></a>
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#" data-text="HOME" id="home-link" >HOME</a>
                <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
                <a href="#" data-text="BLOG" id="blog-link" >BLOG</a>
                <a href="#" data-text="PORTFOLIO" id="portfolio-link" >PORTFOLIO</a>
                <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
            </div>
        </div>
        <!--Navigator-Fullscreen END-->
          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <a href="index.php"><img src="images/New/6-06.png" alt="logo"></a>
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
        <div id="header">
            <div id="particles"></div>
              <!--Social Media Links-->
            <div class="social-media-links">
                <a href="https://www.instagram.com/pontoevirgula.ao/" target=" _blank"><img src="images/instagram logo.png" class="social-media" alt="instagram-logo"></a><!--Your instagram homepage link inser in place of "#"-->
                <a href="https://www.facebook.com/pontoevirgula.ao/" target=" _blank"><img src="images/facebook logo.png" class="social-media" alt="facebook-logo"></a>
                <a href="https://www.linkedin.com/company/ponto-e-virgula-branding-e-comunica%C3%A7%C3%A3o/?viewAsMember=true" target=" _blank"><img src="images/linkedin logo.png" class="social-media" alt="linkedin-logo"></a>
                <a href="https://twitter.com/pontoevirgula24" target=" _blank"><img src="images/twitter logo.png" class="social-media" alt="twitter-logo" target=" _blank"></a>
            </div>
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                <div class="firstline"> <center><span class="color">O Artilheiro </span>Mental </center></div>
                <div class="secondline">
               Somos fortes em
               <span class="txt-rotate color" data-period="1200"data-rotate='[ " Desenvolvimento de Marcas.", " Websites e Landing Pages.", " Planejamento de Comunicação."," Posicionamento de Mercado.", " Google Ads.", " Criação de Campanhas."," Propósito e Valores.", " Email Marketing.", " Spots para TV e Rádio."," Identidade Visual.", "Social Media Marketing.", " Ações de Ativação."  ]'></span>
            <span class="slash">|</span>
        </div>
                    <div class="contact">
                <a href="mailto:info@pontoevirgula.co.ao" target=" _blank"><img src="images/mail.png" alt="email-pic" class="contactpic"></a><!--Your email Id write in place of "#"-->
                <a href="https://api.whatsapp.com/send?phone=244934326862" target=" _blank"><img src="images/call.png" alt="phone-pic" class="contactpic"></a><!--Your telephone number Id write in place of "#"-->
                <a href="https://www.facebook.com/o.artilheiromental" target=" _blank"><img src="images/New/1-01.png" alt="phone-pic" class="contactpic"></a><!--Your telephone number Id write in place of "#"-->
                <a href="https://pontoevirgula.co.ao/shop/" target=" _blank"><img src="images/lojaboa.png" alt="phone-pic" class="contactpic"></a><!--Your telephone number Id write in place of "#"-->

                <i class="fi fi-rr-shopping-bag"></i>

            </div>  
               

            </div>
            </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/New/Teste_122334.png" alt="logo">
            </div>
            <!--header image end-->
        </div>
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->
        <!--about-->
        <div id="about">
            <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul >
                    <li>
                        <a href="#0" class="color-red " title="color-red"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-purple" title="color-purple"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-malt" title="color-malt"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-green" title="color-green"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-blue" title="color-blue"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-orange" title="color-orange"></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>

            <!--about content-->
            <div id="about-content">
                <div class="about-header">
                    Sobre <span class="color">Nós</span>
                </div>
            <center>
                <div id="skills">
                            <div class="contact-header-caption">
                                <div class="secondline">
                                    Somos a 
                                    <span class="txt-rotate color" data-period="1200"data-rotate='[ " pontuação que faltava na sua marca!", " pontuação que faltava na sua marca!", " pontuação que faltava na sua marca!"]'></span>
                                    <span class="slash">|</span>
                                </div>
                            </div>
                    </div>
            </center>
                    
            <!-- fim--><div class="about-main">
            <div class="about-first-paragraph wow">
            <!--about description-->
                     <br><br>
               <span class="about-second-line" style="text-align: justify;">Nascemos em 2017 com o intuito de
                 preencher um vazio no mercado publicitário Angolano e,
                  com o Marketing de Relacionamento voltado a nossa realidade,
                   o objectivo é transformar a forma das marcas comunicarem em Angola.
                    Portanto, não somos de falinhas-mansas. Dizemos o que nos vai na cabeça,
                     conquanto seja relevante para atingir os objectivos das marcas com que
                      trabalhamos. Sabemos comportar-nos em qualquer realidade, seja a
                       tradicional ou a digital. Falamos qualquer língua ou linguajar
                        e se necessário for consultamos parceiros, dicionários ou outros
                         recursos de apoio. Perfeitos não somos, Perfeccionistas sim.
                          É por estas e por outras que, quando nos perguntam o que é
                           a Ponto & Vírgula, simplificamos e dizemos – É a <strong>
                               pontuação que faltava na sua marca</strong>. Comunicamos
                                marcas de diversas maneiras, mas no fim das contas o
                                 que nos importa é sempre o mesmo, gerar impacto e resultados.</span>
               <div class="cv">
                <a href="https://online.fliphtml5.com/hrwoe/ukgl/" target="_blank"  download="APRESENTAÇÃO DA PONTO & VÍGULA"><span class="colors about-second-line" style="color:#C70039;font-family: s Gill Sans Extrabold, sans-serif">
                    <style type="text/css">
                        h2.ola{
                            text-decoration:none;
                            color:#fff;
                            }
                        h2.ola:hover{
                            /*text-decoration:underline;*/
                            color:#C70039;
                            /*text-transform:uppercase;*/
                            }
                        </style>
                        <h2 class="ola">Ainda sobre nós</h2></span></a>
                
            </div>
            </div>
            <!--about picture-->
            <div class="about-img">
                <img src="images/New/Sobre_Nós_Teste.jpg" alt="Your Image">
            </div>
            </div><!-- fim-->
            </div>
            <!--services start-->
            <div id="services">
                <div class="color-changer">
                    <div class="color-panel">
                        <img src="images/gear.png" alt="">
                    </div>
                    <div class="color-selector">
                        <div class="heading">Custom Colors</div>
                        <div class="colors">
                            <ul >
                            <li>
                                <a href="#0" class="color-red " title="color-red"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-purple" title="color-purple"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-malt" title="color-malt"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-green" title="color-green"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-blue" title="color-blue"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-orange" title="color-orange"></a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    </div>
            <!--services header-->
                    <div class="services-heading wow">
                        <span class="color">Nossos</span> Serviços
                    </div>
            <!--services header end-->
            <!--services content-->
            <div class="services-content">
                <div class="service-one service wow">
                    <div class="service-img">
                   <a href="brandingpd.html" ><img src="images/bulb.png" alt="service-one"></a> 
                    </div>
                    <div class="service-description">
                     <h2>BRANDING</h2>
                     <p>Desenvolvimento de Marcas, Posicionamento de Mercado, Propósito e Valores, Identidade Visual</p>
                    </div>
                </div>
                <div class="service-two service wow">
                    <div class="service-img">
                    <a href="bannerpd.html" ><img src="images/instagram.png" alt="service-two"></a>
                    </div>
                    <div class="service-description">
                     <h2>MARKETING DIGITAL</h2>
                     <p>Websites e Landing Pages, Google Ads, Email Marketing, Social Media Marketing.</p>
                    </div>
                </div>
                <div class="service-three service wow">
                 <div class="service-img">
                    <a href="publicidadepd.html" ><img src="images/coding.png" alt="service-three"></a>
                 </div>
                 <div class="service-description">
                     <h2>PUBLICIDADE</h2>
                     <p>Planejamento de Comunicação, Criação de Campanhas, Spots para TV e Rádio, Acções de Activação.</p>
                 </div>
             </div>
             <div class="service-three service wow">
                 <div class="service-img">
                    <a href="impressaopd.html"><img src="images/New/2-02.png" alt="service-three"></a>
                 </div>
                 <div class="service-description">
                     <h2>Impressão</h2>
                     <p>Impressão em Vinil, Lona, PVC, Rígidos, Decoração de Viaturas, Material Promocional (Int. e Ext. ), Tipografia, Offset, Encadernação, Cartonagem, Rótulos, Etiquetas, Embalagens e Envelopagem.</p>
                 </div>
             </div>
             <div class="service-three service wow">
                 <div class="service-img">
                    <a href="photopd.html" ><img src="images/New/3-03-03.png" alt="service-three"></a>
                 </div>
                 <div class="service-description">
                     <h2>FOTOGRAFIA</h2>
                     <p>Familiar, Gestante, Recém-Nascido, Moda, Produtos, Corporativo, Casamento, Infantil e Adulto</p>
                 </div>
             </div>
             <div class="service-three service wow">
                 <div class="service-img">
                    <a href="videospd.html" ><img src="images/New/4-04.png" alt="service-three"></a>
                 </div>
                 <div class="service-description">
                     <h2>Vídeos</h2>
                     <p>Videos Institucionais, publicitários, videoclipes, animações 2D, 3D e muito mais.
                  
                           </p>
                 </div>
             </div>
             
         </div>
 </div>
 <!--services content end-->
            <!--services end-->
            <div id="skills">
                <div class="contact-header">
                    <div class="contact-header">Somos  <span class="color"> Fortes</span>
                        <div class="contact-header-caption">

                            
                            <div class="secondline">
                                Estamos em Constante
                                <span class="txt-rotate color" data-period="1200"data-rotate='[ "Evolução.", " Evolução.", " Evolução"]'></span>
                                <span class="slash">|</span>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="skills-content " style="text-align: center;">
                    <div class="skill-html skill">
                            <div class="skill-text">
                                <div class="html">
                                    Desenvolvimento de Marcas
                                </div>
                            </div> <br>
                        <div class="html-prog wow prog">
                            <div class="html-progress wow">
                                100%
                            </div>
                        </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                            <div class="html">
                                Criação de Campanhas
                            </div>
                        </div><br>
                        <div class="html-prog wow prog">
                            <div class="adobe-progress wow">
                                83%
                            </div>
                        </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                            <div class="html">
                                Planejamento de Comunicação
                            </div>
                        </div>
                        <br>
                        <div class="html-prog wow prog">
                            <div class="adobe-progress wow">
                                90%
                            </div>
                        </div>
                    </div>

                    <div class="skill-html skill">
                        <div class="skill-text">
                            <div class="html">
                                Identidade Visual
                            </div>
                        </div><br>
                        <div class="html-prog wow prog">
                            <div class="php-progress wow">
                                87%
                            </div>
                        </div>
                    </div>

                    <div class="skill-html skill">
                        <div class="skill-text">
                            <div class="html">
                                Spots para TV e Rádio
                            </div>
                        </div><br>
                        <div class="html-prog wow prog">
                            <div class="jquery-progress wow">
                                94%
                            </div>
                        </div>
                    </div>

                    <div class="skill-html skill">
                        <div class="skill-text">
                            <div class="html">
                                Social Media Marketing
                            </div>
                        </div><br>
                        <div class="html-prog wow prog">
                            <div class="seo-progress wow">
                                84%
                            </div>
                        </div>
                    </div>

                </div>
            </div>
       <!--copyright-section You Can Remove After Downloading-->
       <div class="footer">
        <div class="footer-text">
            <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Ponto e Vírgula
        </div>
       </div>
<!--copyright-section-->
     </div>
<!--About End -->
  <!--portfolio-->
  <div id="portfolio">
    <div class="color-changer">
        <div class="color-panel">
            <img src="images/gear.png" alt="">
        </div>
        <div class="color-selector">
            <div class="heading">Custom Colors</div>
            <div class="colors">
                <ul >
                <li>
                    <a href="#0" class="color-red " title="color-red"></a>
                </li>
                <li>
                    <a href="#0" class="color-purple" title="color-purple"></a>
                </li>
                <li>
                    <a href="#0" class="color-malt" title="color-malt"></a>
                </li>
                <li>
                    <a href="#0" class="color-green" title="color-green"></a>
                </li>
                <li>
                    <a href="#0" class="color-blue" title="color-blue"></a>
                </li>
                <li>
                    <a href="#0" class="color-orange" title="color-orange"></a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portfolio-header"> <span class="color"> Nosso </span> Portfólio
    <span class ="header-caption"><span class="color"></span></span></div>
     <div id="portfolio-content">
         <div class="portfolio portfolio-first">
             <div class="portfolio-image">
                <img src="images/New/branding.jpeg" alt="portfolio-first" width="1000px">
             </div>
             <div class="portfolio-text">
                 <h2>Branding</h2>
                 <p >Cuidamos da sua marca como se fosse a nossa, acompanhando a sua evolução de forma próxima e constante.</p>
                 <div class="button"><a href="brandingpd.html"  id="branding-link" ><button><span class="index"> Ver Projectos<i class="gg-arrow-right"></i></span></button></a></div>
             </div>
         </div>
         <div class="portfolio portfolio-second">
            <div class="portfolio-image">
                <img src="images/New/IMG_7305.jpg" alt="portfolio-second">
            </div>
            <div class="portfolio-text">
                <h2>Marketing Digital</h2>
                <p>Fazemos gestão de redes sociais com estratégia, conteúdo e tom de voz, claramente definidos e adaptados às diferentes comunidades.</p>
                <div class="button"><a href="bannerpd.html"  id="marketing-link"><button><span class="index"> Ver Projectos<i class="gg-arrow-right"></i></span></button></a></div>
            </div>
        </div>
     
        <div class="portfolio portfolio-third">
            <div class="portfolio-image">
                <img src="images/New/IMG_7355.png" alt="portfolio-third">
            </div>
            <div class="portfolio-text">
                <h2>Publicidade</h2>
                <p>Temos o marketing de relacionamento no sangue, mas é a visão 360º que orienta o nosso pensamento e estratégia.</p>
                <div class="button"><a href="publicidadepd.html"  id="publicidade-link"><button><span class="index"> Ver Projectos<i class="gg-arrow-right"></i></span></button></a></div>
            </div>
        </div>
        <div class="portfolio portfolio-fourth">
            <div class=" portfolio-image">
                <img src="images/New/impressora.png" alt="portfolio-fourth">
            </div>
            <div class="portfolio-text">
                <h2>Impressão</h2>
                <p>Recriamos marcas com passado, reposicionando-as e/ou renovando a imagem gráfica em toda a linha.</p>
                <div class="button"><a href="impressaopd.html"  id="imprensao-link"><button><span class="index"> Ver Projectos<i class="gg-arrow-right"></i></span></button></a></div>
            </div>
        </div>
        <div class="portfolio portfolio-fourth">
            <div class=" portfolio-image">
                <img src="images/New/fotografia.jpeg" alt="portfolio-fourth">
            </div>
            <div class="portfolio-text">
                <h2>Fotografias</h2>
                <p>Realizamos o serviço de fotografia, a fim de identificar e ressaltar os mínimos detalhes de seu produto. Contamos com grande conhecimento técnico e equipamentos que proporcionam um material bonito e chamativo.</p>
                <div class="button"><a href="photopd.html"  id="foto-link"><button><span class="index"> Ver Projectos<i class="gg-arrow-right"></i></span></button></a></div>
            </div>
            
        </div>
        <div class="portfolio portfolio-fourth">
            <div class=" portfolio-image">
                <img src="images/New/claquete.gif" alt="portfolio-fourth">
            </div>
            <div class="portfolio-text">
                <h2>Vídeos</h2>
                <p>Nós acreditamos na produção de vídeo como a principal ferramenta de comunicação da sua empresa.</p>
                <div class="button"><a href="videospd.html"  id="video-link"><button><span class="index"> Ver Projectos<i class="gg-arrow-right"></i></span></button></a></div>
            </div> 
        </div>
         </div>
            <!--copyright-section You Can Remove After Downloading-->
    <div class="footer">
        <div class="footer-text">
            <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Ponto e Vírgula
        </div>
       </div>
<!--copyright-section-->
     </div>
<!--portfolio end-->
         
<!--blog-->
<div id="blog">
    <div class="color-changer">
        <div class="color-panel">
            <img src="images/gear.png" alt="">
        </div>
        <div class="color-selector">
            <div class="heading">Mudar a cor</div>
            <div class="colors">
                <ul >
                <li>
                    <a href="#0" class="color-red " title="color-red"></a>
                </li>
                <li>
                    <a href="#0" class="color-purple" title="color-purple"></a>
                </li>
                <li>
                    <a href="#0" class="color-malt" title="color-malt"></a>
                </li>
                <li>
                    <a href="#0" class="color-green" title="color-green"></a>
                </li>
                <li>
                    <a href="#0" class="color-blue" title="color-blue"></a>
                </li>
                <li>
                    <a href="#0" class="color-orange" title="color-orange"></a>
                </li>
                </ul>
            </div>
        </div>
        </div>

  <div class="contact-header">
            <div class="contact-header">Blog  <span class="color"></span>
                <div class="contact-header-caption">
                    <div class="secondline">
                        Posts de 
                        <span class="txt-rotate color" data-period="1200"data-rotate='[ "Eventos e Noticias.", " Eventos e Noticias.", " Eventos e Noticias."]'></span>
                        <span class="slash">|</span>
                    </div>
                </div> 
            </div>
        </div>

    <div class="blog-content">
         <div class="blogs">
             <a href="Blog/blog1.html">
             <div class="img">
                <img src="images/New/JP.jpeg" alt="blog-one">
                <div class="blog-date">19 Junho,21</div>
             </div>
             <div class="blog-text">
                 <h3>JOVENS PRODÍGIOS</h3>
                 <p style="text-align: justify;">A empresa angolana Bronze Perfeito que actua no ramo da Beleza, Cosmético e Cuidados Pessoais, lançada no mercado nacional na passada terça-feira,08,  do corrente mês, uniu-se em parceria com empresa pioneira no ramo da moda, Hadja Model, visando expandir ambas marcas e salvaguardar a excelência na qualidade dos serviços e a  satisfação do público angolano.

                    Na ocasião, Sandra Prendin Paiva, empresária de nacionalidade angolana de 35 anos de idade, formada na Norvel University, nos Estados Unidos da América em Bronzeamento Artificial, com  especializações em Estética e Beleza na cidade de Belo Horizonte, República Federativa do Brasil, mentora e proprietária da marca, disse que, para a Bronze Perfeito é certamente um valor agregado  tornar-se parceira de uma marca já conceituada como é o caso da Hadja Model.
                    
                    " O bronzeamento artificial elimina os riscos de se contrair doenças como câncer e queimaduras na  pele, porque, não há exposição ao sol e os procedimentos são feitos de forma natural com melanina arteficial, não existem contra-indicacões,  homens e mulheres podem tranquilamente, independentemente da idade ou tonalidade da pele fazer o bronzeamento ". Frisou 
                    
                    A empresária da beleza,  convidou ainda todos os internautas a visitarem o seu atelier, localizado no município do Talatona, condomínio Austin, casa n° 60, porém, o tratamento pode ser efectuado ao domicílio de igual modo.
                    
                    Por seu turno, o empresário Hadjalmar El Vaim, CEO da empresa Hadja Model,  avançou que está satisfeito com a parceria e acredita que essa união poderá revolucionar a indústria da moda e da Beleza em Angola, assim como, proporcionar oportunidade de emprego para muitos jovens. 
                    
                    Artilheiro Mental em Luanda aos 19 de Junho de 2021.</p>
             </div></a>
         </div>  
        </br>    
         <div class="blogs">
            <a href="Blog/blog2.html">
            <div class="img">
                <img src="images/New/blog2.jpg" alt="blog-two">
                <div class="blog-date">26 Junho,21</div>
            </div>
            <div class="blog-text">
                <h3>Artilheiro Mental</h3>
                <p style="text-align: justify;">Três jovens angolanos com idades compreendidas entre os 35 a 40 anos, empresários nos ramos da Comunicação e Consultoria Empresarial, Beleza e Moda, juntaram-se, recentemente, para analisarem, sobre o empreendedorismo, expansão de negócios e criação de novos postos de emprego para a juventude.
                        
                    Refira-se que, os jovens prodígios do empresariado nacional, são os mentores e proprietários das empresas, Ponto e Vírgula, Bronze Perfeito e Hadja Model.
                    
                    Bruno Pinto " Artilheiro Mental ", como é conhecido no meio empresarial, frisou que, a sua empresa (Ponto e Vírgula), está pronta para agregar valor a qualidade dos serviços no mercado nacional, de igual forma a parcerias, desde que estás resultem na satisfação dos clientes e no fomento da empregabilidade juvenil.
                    
                    " Estamos sempre prontos e abertos para prestar consultoria empresarial e assim, ajudar o país a crescer ".
                    
                    Na ocasião, o Artilheiro Mental, incentivou e aconselhou os jovens a empreenderem e conquistarem a sua liberdade financeira.
                    
                    " Não devemos aguardar que o Estado faça tudo, somos jovens e podemos ajudar ", concluiu.
                    
                    PONTO E VÍRGULA, em Luanda aos 19 de Junho de 2021.</p>
            </div></a>
        </div>      
        <div class="blogs">
            <a href="Blog/blog3.html">
            <div class="img">
                <img src="images/New/blog3.jpg" alt="blog-three">
                <div class="blog-date">27 junho,21</div>
            </div>
            <div class="blog-text">
                <h3>Parceria com a Foto Real</h3>
                <p style="text-align: justify;">A Ponto & Vírgula e a Foto Real celebram um acordo de parceria, que irá revolucionar o mercado angolano, com base na mesma os empresários criaram vários pacotes que iram facilitar e impulsionar todos os clientes interessados em salvaguardar e elevar a imagem do seu negócio com descontos incríveis.</p>
            </div></a>
        </div>
        <div class="blogs">
            <a href="Blog/blog4.html">
            <div class="img">
                <img src="images/New/blog4.jpg" alt="blog-four">
                <div class="blog-date">27 Junho,21</div>
            </div>
            <div class="blog-text">
                <h3>Parceria com a SMS SMART</h3>
                <p style="text-align: justify;">Quando se trata de entregar e-mails, você precisa pensar em frases longas e entregá-las várias vezes, considerando as taxas de abertura.No entanto, por meio do SMS marketing, frases curtas com cerca de70 caracteres são usadas, permitindo maior objectividade. Além disso, é possível economizar tempo e custos de mão-de-obra e de entrega, foi com este objectivo que os Empresários Bruno Pinto e Maurício Livungo, implementaram este serviço "SMS marketing", pois o mesmo é uma estratégia actual para a era tecnológica mobile, a sua taxa de abertura é mais alta que o e-mail e fica fácil alcançar clientes, portanto, é muito mais eficaz e objectiva.</p>
            </div></a>
        </div>  
        <div class="blogs">
            <a href="Blog/blog5.html" >
            <div class="img">
                <img src="images/New/blog5.jpg" alt="blog-five">
                <div class="blog-date">27 Junho,21</div>
            </div>
            <div class="blog-text">
                <h3>Lançamento do website da Kixicrédito</h3><br>
                <p style="text-align: justify;">No dia 15 de julho de 2021 o Kixicrédito fez o lançamento do seu novo website, criado pela Ponto & Vírgula. Um site rápido e eficaz com excelente apresentação que visa facilitar o acesso para os usuários do Kixicrédito a nível da simulação de créditos e outros produtos.</p>
            </div></a>
        </div>  
        <div class="blogs">
            <a href="Blog/blog6.html" >
            <div class="img">
                <img src="images/New/blog6.jpg" alt="blog-six">
                <div class="blog-date">27 junho,21</div>
            </div>
            <div class="blog-text">
                <h3>Aniversário da ADJAMODEL</h3>
                <p style="text-align: justify;">A única forma de multiplicar a felicidade é dividi-la com alguém. 
                    Muito obrigado por partilhar este momento com a nossa equipe.
                    A Ponto & Vírgula  agradece pelo convite.
                    </p>
            </div></a>
        </div>        
    </div>
       <!--copyright-section You Can Remove After Downloading-->
       <div class="footer">
        <div class="footer-text">
            <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Ponto e Vírgula
        </div>
       </div>
<!--copyright-section-->
</div>
<!--blog end-->
<!--contact-->
<div id="contact">
<div class="color-changer">
    <div class="color-panel">
        <img src="images/gear.png" alt="">
    </div>
    <div class="color-selector">
        <div class="heading">Troca de Cor</div>
        <div class="colors">
            <ul >
            <li>
                <a href="#0" class="color-red " title="color-red"></a>
            </li>
            <li>
                <a href="#0" class="color-purple" title="color-purple"></a>
            </li>
            <li>
                <a href="#0" class="color-malt" title="color-malt"></a>
            </li>
            <li>
                <a href="#0" class="color-green" title="color-green"></a>
            </li>
            <li>
                <a href="#0" class="color-blue" title="color-blue"></a>
            </li>
            <li>
                <a href="#0" class="color-orange" title="color-orange"></a>
            </li>
            </ul>
        </div>
    </div>
    </div>
 <div class="contact-header">Contacte <span class="color"> Nos</span>
    <center>
        <div id="skills">
                    <div class="contact-header-caption">
                        <div class="secondline">
                            Entre 
                            <span class="txt-rotate color" data-period="1200"data-rotate='[ " em Contacto.", " em Contacto."]'></span>
                            <span class="slash">|</span>
                        </div>
                    </div>
            </div>
    </center>
<div class="contact-content">
    <!--Contact form-->
     <div class="contact-form">
         <div class="form-header">
            SE PRECISAS DA TUA MARCA <p>A COMUNICAR COMO NENHUMA OUTRA,<p>DESAFIA-NOS:</p> </p>
         </div>

         <form id="submit" action="" method="POST">
            <div class="input-line">
                <input required id="nome" name="nome" type="text" placeholder="Nome" class="input-name">
                <input id="email"  name="email"  type="email" placeholder="Digita o seu E-mail ou telefone"  class="input-name">
            </div>
            <input required type="text" id="tema" name="tema" placeholder="Objectivo" class="input-subject">
            <textarea required id ="mensagem" name="mensagem" class="input-textarea" placeholder="mensagem"></textarea>
            <button type="submit" name="enviar" id ="submit">Enviar</button>
         </form>
       
     </div>
    <!--Contact form-->
    <!--Contact information-->
     <div class="contact-info">
        <div class="contact-info-header">
            Contactos
        </div>
        <div class="contact-info-content">
        <div class="contect-info-content-line">
            <img src="./images/icon-name.png" class="icon" alt="name-icon">
            <div class="contact-info-icon-text">
                <h6>Nome</h6>
                <p>Ponto e Vírgula</p>
          </div>
        </div>
        <div class="contect-info-content-line">
          <img src="./images/icon-location.png"  class="icon" alt="location-icon">
          <div class="contact-info-icon-text">
              <h6>Localização</h6>
              <p>Luanda-Angola</p>
              <p>Rua Dr. António Agostinho Neto Casa nº 57- Praia do Bispo</p>
        </div>
      </div>
      <div class="contect-info-content-line">
          <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
          <div class="contact-info-icon-text">
              <h6>Telefone</h6>
              <p>+244 934 326 862 /  +244 941 565 001</p>
             
        </div>
      </div>
      
      <div class="contect-info-content-line">
          <img src="./images/icon-email.png" class="icon" alt="email-icon">
          <div class="contact-info-icon-text">
              <h6>Email</h6>
              <p>Info@pontoevirgula.co.ao</p>
        </div>
      </div>
        </div>
    <!--Contact information end-->
   </div>
</div>
            <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
                <div class="footer-text">
                    <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Ponto e Vírgula
                </div>
               </div>
       <!--copyright-section-->
</div>
<!--contact end-->
</div>
<!--all the divisions-->
<script src="js/jquery.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/index.js"></script>
<!--particles script-->


<!--particles script-->
    <script>
          particlesJS("particles", {"particles":{"number":{"value":120,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":true,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":true,"speed":0,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.24463576890600452,"width":1.2626362266116362},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
    </script>

<script type="text/javascript">
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");
        $('#submit').text("Sending");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
            $.ajax({
               url: 'sendEmail.php',
               method: 'POST',
               dataType: 'json',
               data: {
                   name: name.val(),
                   email: email.val(),
                   subject: subject.val(),
                   body: body.val()
                   
               }, success: function (response) {
                    $('#myForm')[0].reset();
                    $('#submit').text("Thank you!!!");
               }
               
            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
            $('#submit').text("Submit");
        } else
            caller.css('border', '');
        return true;
    }
</script>

<!--chatBot da jivo-->

<script src="//code.tidio.co/fthr6lx9nupjznzsafrz9hkkudwag3if.js" async></script>

<!--chatBot da jivo-->

</body>
</html>