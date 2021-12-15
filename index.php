<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Troubleshooting techniques - rug maintenance, building, windows, carpet cleaning, janitorial service, floor waxing, power wash.">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="AfroCode" />        

        <title>Allima Cleaning Services LLC</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="webSite/img/favicon.png" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="webSite/css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">
                    <img src="webSite/img/logo-branco.png" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <img src="webSite/img/logo-branco.png" alt="" class="img-fluid">
                        <h1 class="text-white mt-0" style="color:#fff">Allima Cleaning Services LLC</h1>
                        <br>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white mb-5">We count with over <?=date("Y")-2010;?> years of excellence experience</p>
                        <a class="btn btn-light btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6 text-center">
                                <h2 class="mt-0">Learn More About Us!</h2>
                                <hr class="divider" />
                            </div>
                        </div>
                        <p class="mb-4">
                            Dear Sirs, 
                            We would like to take this opportunity to introduce Allima Cleaning Services LLC. My name is Allisgton Marcio de Lima, president of Allima Cleaning LLC. Our organization provides specialized cleaning, detailing, janitorial services and daily or nightly maintenance services for companies of all sizes. We count with over 11 years of excellence experience. Some of the many services that we offer include rug maintenance, building, windows, carpet cleaning, janitorial service, floor waxing, power wash.
                            At Allima Cleaning Services LLC we have a prepared team that delivers strong work ethics with an accurate attention to details.
                            We are fully insured and trained in equipment and product usage, as well as trouble shooting techniques to ensure every job is done efficiently.
                            I appreciate this opportunity to introduce my company and services. It would be my pleasure to provide you with proposals for any upcoming projects that fit into our range of expertise. I feel that we can offer our clients quality work at competitive pricing. 
                            If you have any question, please feel free to contact me.
                            Sincerely, 
                        </p>
                        <p>Allisgton Marcio de Lima!</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <a class="btn btn-light btn-xl" href="#contact">Contact us!</a>
            </div>
        </section>
        <!-- Contact-->
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <hr class="divider divider-light" />
                <hr class="divider divider-light" />
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Check our Portfolio!</h2>
                        <hr class="divider" />
                    </div>
                </div>
                <div class="row g-0">
                    <?php for ($i = 1; $i < 10; $i++){ ?>
                    <div class="col-lg-4 col-sm-6">
                        <img style="padding: 5px" class="img-fluid" src="webSite/img/portfolio/<?=$i;?>-min.jpg" alt="..." />
                    </div>
                   <?php }?>
                    
                </div>
            </div>
        </div>
        <hr class="divider divider-light" />
        <hr class="divider divider-light" />
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Learn More <span>About Us</span>!</h2>
                        <hr class="divider" />
                    </div>
                </div>
                
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi bi-geo-alt fs-2 mb-3 text-muted"></i>
                        <div>
                            <h3 style=" margin: 15px 0 0 0;">Location:</h3>
                            <p>5 Mill Point Dr, Bristol, CT 06010</p></div>
                    </div>
                </div>
                <hr class="divider divider-light" />
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi bi-envelope fs-2 mb-3 text-muted"></i>
                        <div>
                            <h3 style=" margin: 15px 0 0 0;">Email:</h3>
                            <p>alligstonallimacleaning@outlook.com</p>
                            <p>allisgtonmarcio@gmail.com</p>
                        </div>
                    </div>
                </div>
                <hr class="divider divider-light" />
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>
                            <h3 style=" margin: 15px 0 0 0;">Call:</h3>
                            <p>+1 (860) 879-1664</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; <script>document.write(new Date().getFullYear())</script> - Allima Cleaning Service. All Rights Reserved </div></div>
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted"><strong><span>dev by AfroCode</span></strong> </div></div>        
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="webSite/js/scripts.js"></script>
    </body>
</html>
