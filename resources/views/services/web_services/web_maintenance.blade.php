<!DOCTYPE html>
<html>
<head>
    <x-head/>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
    <div class="container">
        <a class="navbar-brand logo" href="#">Vsoft Systems</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#client">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#price">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAVBAR END-->

<!-- HOME START-->
<section class="bg-home-half" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <!-- <h5 class="home-small-title text-uppercase text-white-50 mb-4">We create the web</h5> -->
                            <h2 class="home-title mb-4">Website Maintenance</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/services/web-services" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">Web Services</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME END-->

{{-- Floating Action Button #Fab--}}
<x-fab/>

<!-- WELCOME START -->
<section class="section" id="feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h4 class="title-heading">Website Maintenance Service</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                    We at Vsoft Systems, with our website maintenance team we will focus on enhancing existing applications, adding new content, 
                    search engine optimization, bug fixing and technical support. Our maintenance programs ensure that your site is always current 
                    and your project stays within budget. Website maintenance includes revising, editing, or otherwise changing existing web pages 
                    to keep your website up to date. The periodic addition of new web pages is also part of maintenance services.<br>
                    <br>
                    In the current business environment, companies, organizations and institutions alike are seeking ways to reduce costs but and 
                    add value to their marketing and communication
                    strategies. Our professional Website Maintenance service deliverers just that.<br>
                  </p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/web_maintenance/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Website Design</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Finding a professional web design company is a tiresome job so many to choose from !</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/web_maintenance/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Web Maintenance</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">We at Vsoft Systems, with our website maintenance team we will focus on enhancing existing</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/web_maintenance/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Web Development</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">VsoftSytems offers a professional Website development service to help you successfully plan,</p> -->
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- WELCOME END -->

<!-- SERVICES START -->

<!-- SERVICES END -->

<!-- PORTFOLIO START-->


        <!-- portfolio menu -->

        <!-- End portfolio  -->

    <!-- Gallary -->

<!-- PORTFOLIO END-->

<!-- CLIENT START -->

<!-- CLIENT END -->

<!-- TEAM START -->

<!-- TEAM END -->

<!-- START CTA -->
<!-- <section class="section bg-cta">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-white text-center">Ready to start your next
                    web project now?</h3>
                <p class="cta-desc text-white text-center mt-3">When a good idea comes, you know, part of my job is to move it around, just see what people think, get people talking about it.</p>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-custom-white">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END CTA -->

<!-- BLOG START -->

<!-- BLOG END -->

<!-- CONTACT START -->

<!-- CONTACT END -->

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
