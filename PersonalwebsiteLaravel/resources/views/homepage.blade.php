<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.head')

    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.partials.nav')
        <!-- Masthead-->
        @include('layouts.partials.header')
        <!-- Details-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">My Details</h3>
                </div>
                <div class="row">
                    <div class="container">
                        <p><img src="main/assets/img/haha.png" alt="Haha"  style="width:350px;height:450px;margin-right:15px;float:left">
                            <h4 class="my-3">Nur Fasihaharina Binti Abdullah</h4>
                            <br />
                            Hi everyone, my name is Fasihaharina.I've got an experience in developing website and have some experience in designing field.
                            The language that I'm familiar with is C++, Java, HTML, PHP, CSS also the framework that i know and familiar is laravel.
                            I am calm, hardworking and responsible. I tend to finish my work before the dateline.
                            My hobbies are reading books, playing, watching korean drama and listening to music. 
                            <br />
                            <br />
                            Here I will attach my resume for further information.
                            <a href="main/assets/FASIHAHARINA(RESUME).pdf">Get the Resume !!!</a>
                            <br />
                            <br />
                            <br />
                            <a href="{{ route('details.index') }}"> Want to know Me Better . Click Here !!!</a>

                        </p>

                    </div>

                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Some of my work</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/portfolio/web2.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Web Programming</div>
                                <div class="portfolio-caption-subheading text-muted">Website</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/portfolio/recycle2.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Smart Recycle Kajang</div>
                                <div class="portfolio-caption-subheading text-muted">Website</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/portfolio/about2.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">My Smart Clinic</div>
                                <div class="portfolio-caption-subheading text-muted">Website</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/portfolio/banner.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lestari Bumi Asli</div>
                                <div class="portfolio-caption-subheading text-muted">Banner</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/portfolio/program1.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Others</div>
                                <div class="portfolio-caption-subheading text-muted">Program</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">

                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Journey</h2>
                    <h3 class="section-subheading text-muted">It all about my journey</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/5.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Beginnings of the Journey</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">The starting point of my life !!!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="main/assets/img/about/DatukBahaman.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Jan 2010 - Dec 2017</h4>
                                <h4 class="subheading">SMK Datuk Bahaman</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Taking Pure Science courses.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="main/assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>May 2015 - June 2017</h4>
                                <h4 class="subheading">Pahang Marticulation College</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Located in Gambang Kuantan Pahang | PNGK:3.15 | Learn Science,Chemist,Science Cmputer,Biology.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="main/assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>SEPT 2017 - Present</h4>
                                <h4 class="subheading">Universiti Kebangsaan Malaysia(UKM)</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Bangi Selangor | PNGK:3.15 | Software Engineering (Development of Information System).</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                The New
                                <br />
                                Journey
                                <br />
                                Started !
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Footer-->
        @include('layouts.partials.footer')
        @include('layouts.partials.modal')
        
        @include('layouts.partials.footer-scripts')
    </body>
</html>
