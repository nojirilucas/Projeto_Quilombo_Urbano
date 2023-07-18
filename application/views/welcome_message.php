<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Protótipo</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.cdnfonts.com/css/rozha-one" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="<?=base_url()?>assets/assets/img/sankofa.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Oficinas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Organizadores</a></li>
                        <li class="nav-item"><a class="nav-link" href="file:///C:/xampp/htdocs/app/assets/galleries.html">Galerias</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=base_url("Cadastro")?>">Cadastre-se</a></li>
                        <li class="nav-item"><a class="nav-link" href="file:///C:/xampp/htdocs/app/assets/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="file:///C:/xampp/htdocs/app/assets/profile.html">Perfil</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Centro Cultural</div>
                <div class="masthead-heading text-uppercase">Quilombo Urbano</div>
                </div>
                    <h1>
                        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Explore!</a>
                        <br />
                        ou
                        <br />
                        <a class="btn btn-primary btn-xl text-uppercase" href="<?=base_url("Cadastro")?>">Cadastre-se!</a>
                    </h1>
                </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Serviços</h2>
                    <h3 class="section-subheading text-muted">Serviçoes providos sobre o site</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Materiais</h4>
                        <p class="text-muted">você encontrará materiais de alta qualidade para atender às necessidades de todas as atividades oferecidas. Isso inclui equipamentos modernos e selecionados para garantir o melhor suporte possível para as atividades realizadas.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Estrutura</h4>
                        <p class="text-muted">As salas de aula são equipadas com tudo o necessário para cada área, desde equipamentos de som para dança até materiais de arte. As áreas de atividades físicas contam com equipamentos de proteção e treinamento para oferecer o melhor suporte possível.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Segurança</h4>
                        <p class="text-muted">Possuindo segurança de login de alta qualidade para garantir a privacidade e proteção dos usuários. Validação de e-mail e senhas seguras para prevenir acesso não autorizado e monitoramento constante das atividades dos usuários para prevenir e identificar tentativas de invasão ou uso não autorizado da conta.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-orange2" id="portfolio">
            <div class="container">
                <div class="text-center text-light">
                    <h2 class="section-heading text-uppercase">OFICINAS</h2>
                    <h3 class="section-subheading text-light">oficinas disponíveis para matrícula.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url()?>assets/assets/img/portfolio/1.1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-light">Dia Das Crianças</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url()?>assets/assets/img/portfolio/2.2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-light">Capoeira</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url()?>assets/assets/img/portfolio/3.3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-light">Cine Pipoca</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url()?>assets/assets/img/portfolio/4.4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-light">Break Dance</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url()?>assets/assets/img/portfolio/5.5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-light">Noite De Jogos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url()?>assets/assets/img/portfolio/6.6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-light">Muay Thai</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section bg-orange" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-light">Sobre</h2>
                    <h3 class="section-subheading text-light">Espaços disponíveis no Centro Cultural.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?=base_url()?>assets/assets/img/about/1.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!--<h4>2009-2011</h4>-->
                                <h4 class="subheading text-light">Biblioteca</h4>
                            </div>
                            <div class="timeline-body"><p class="text-light">Com o objetivo de fornecer aos usuários acesso fácil e conveniente a informações relevantes e confiáveis para expandir seu conhecimento sobre o assunto do site. É uma maneira de tornar o site uma fonte respeitável e confiável de informações e recursos.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?=base_url()?>assets/assets/img/about/2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading text-light">Cozinha</h4>
                            </div>
                            <div class="timeline-body"><p class="text-light">Ambiente destinado ao preparo de alimentos e refeições. É equipada com utensílios e eletrodomésticos necessários para o preparo dos alimentos, como fogão, forno, geladeira, pia, armários e outros itens relevantes. É um espaço importante para o funcionamento do seu espaço, pois permite o fornecimento de alimentos para os clientes.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?=base_url()?>assets/assets/img/about/3.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading text-light">Quadra Esportiva</h4>
                            </div>
                            <div class="timeline-body"><p class="text-light">Um espaço destinado à prática de atividades físicas e esportivas, como basquete, vôlei, futsal e outros esportes. É geralmente cercada por grades ou redes para evitar que as bolas ou outros objetos saiam da área de jogo. É um espaço importante para oferecer aos clientes a possibilidade de praticar atividades físicas e esportivas em um ambiente seguro e adequado.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Junte-se
                                <br />
                                A Nossa
                                <br />
                                História
                            </h4>
                            <button class="btn btn-primary btn-x2 text-uppercase mt-6" data-bs-dismiss="modal" href="file:///C:/xampp/htdocs/app/assets/hist.html" type="button">
                                Histórias
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Organizadores</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?=base_url()?>assets/assets/img/team/1.png" alt="..." />
                            <h4>Lucas Nojiri</h4>
                            <p class="text-muted">Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?=base_url()?>assets/assets/img/team/2.png" alt="..." />
                            <h4>Fulano</h4>
                            <p class="text-muted">Administrador</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>   
            </div>
                <div class="row">
                <!--    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">TEXTO</p></div> -->
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?=base_url()?>assets/assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?=base_url()?>assets/assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Irijon Site</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Politica De Privacidade</a>
                        <a class="link-dark text-decoration-none" href="#!">Termos De Uso</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?=base_url()?>assets/assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cine Pipoca</h2>
                                        <p class="item-intro text-muted">Infantil/Adulto</p>
                                        <img class="img-fluid d-block mx-auto" src="<?=base_url()?>assets/assets/img/portfolio/1.1.jpg" alt="..." />
                                            <p>
                                                dia reservado para as criançes aproveitarem e se desenvolverem
                                            </p>
                                            <li>
                                                <strong>Categoria:</strong>
                                                Atividade Recreativa
                                            </li>
                                    </div>
                                </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Voltar
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-orange2">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?=base_url()?>assets/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase text-light">Capoeira</h2>
                                    <p class="item-intro text-light">Infantil/Adulto</p>
                                    <li class= "text-light">
                                        <strong>18:00 / 22:00</strong>
                                    </li>
                                    <li class= "text-light">
                                        <strong>Categoria:</strong>
                                        Atividade Física
                                    </li>
                                    <img class="img-fluid d-block mx-auto" src="<?=base_url()?>assets/assets/img/portfolio/2.2.jpg" alt="..." />
                                    <p class= "text-light"> uma arte marcial brasileira que combina movimentos de luta com dança, música e acrobacias. As aulas de capoeira são uma ótima forma de melhorar a coordenação, equilíbrio e resistência física, enquanto se diverte com um grupo animado de praticantes.</p>
                                    <ul class="list-inline">
                                        <img class="mx-auto rounded-circle" src="<?=base_url()?>assets/assets/img/team/2.jpg" alt="..." />
                                    </ul>
                                        <div>
                                        </button>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                Mestre Jairo dos Santos
                                        </button>
                                        </div>
                                        <p class= "text-light"> Mestre Jairo dos Santos é um professor de capoeira com origem afrodescendente, cuja paixão pela arte marcial brasileira é evidente em sua dedicação e habilidade. Com uma presença imponente e carismática, Mestre Jairo é reconhecido por sua vasta experiência e conhecimento profundo da capoeira.
                                        Nascido e criado em uma comunidade afro-brasileira, Mestre Jairo cresceu imerso na cultura da capoeira, aprendendo desde cedo os movimentos graciosos e as tradições ancestrais transmitidas através das gerações.>
                                        </p>
                                        <p class= "text-light">  carrega consigo um profundo respeito pelas raízes africanas da capoeira e busca compartilhar essa herança com seus alunos.
                                            Com sua habilidade física impressionante, Mestre Jairo é um mestre na arte da ginga, fluindo com graciosidade entre os ataques e defesas característicos da capoeira. Seus movimentos fluidos e acrobáticos demonstram não apenas sua destreza, mas também a conexão espiritual que ele estabelece com a arte marcial.
                                        </p>
                                    </p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="<?=base_url("Cadastro")?>">Cadastre-se!</a>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?=base_url()?>assets/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
