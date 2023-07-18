<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastro</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.cdnfonts.com/css/rozha-one" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cadastre-se</h2>
                    <h3 class="section-subheading text-muted">Preencha aqui seus dados para o cadastro.</h3>
                </div>
                <form id="contactForm" action = "<?=base_url("Cadastro/cadastrar")?>" method = "post" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="section-heading text-uppercase">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control cadastrar" name = "nome" id="nome" type="text" placeholder="Seu Nome *" data-sb-validations="required"/>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name = "email" id="email" type="email" placeholder="Seu Email *" data-sb-validations="required"/>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input class="form-control" name = "telefone" id="telefone" type="number" placeholder="Seu Telefone*" data-sb-validations="required"/>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Password address input-->
                                <input class="form-control" name = "senha" id="senha" type="password" placeholder="Sua senha *" data-sb-validations="required"/>
                            </div>
                        </div>
                            <span class="fa-stack fa-9x mt-4">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Sucesso!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="file:///C:/xampp/htdocs/app/assets/cad.html">file:///C:/xampp/htdocs/app/assets/cad.html</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar!</button></div>
                </form>
            </div>
        </section>
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