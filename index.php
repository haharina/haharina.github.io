<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Fasihaharina</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/sunflower.png" rel="icon">
    <link href="assets/img/sunflower.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- =======================================================
    * Template Name: iPortfolio
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Updated: Jun 29 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

    <?php include 'partials/header.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets\img\portfolio\bg-5.jpeg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Nur Fasihaharina</h2>
        <p>I'm <span class="typed" data-typed-items="Full-Stack Web Developer,PHP & Laravel Specialist,API & E-Commerce System Builder">Full-Stack Web Developer,</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section>
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p> I am a <strong>Full-Stack Web Developer</strong> with hands-on experience in building enterprise-level web applications and e-commerce systems using
        <strong>PHP, Laravel, Yii Framework, and REST APIs</strong>.
        </p>
        <p>
          I specialize in translating business requirements into reliable technical solutions,
          from database design and system architecture to front-end implementation.
          I enjoy solving complex problems and continuously improving system performance and usability.
        </p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets\img\portfolio\bg-2.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Full-Stack Web Developer</h2>
            <p class="fst-italic py-3">
              As an ambivert, I work comfortably both independently and in team environments.I value clear communication, structured development processes, and continuous learning.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>21 June 1997</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://haharina.github.io/</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+60192089060</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kuala Lumpur, Malaysia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span id="age">30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Software Engineering (Hons) Development of Information Technologies</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>haharina21@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p class="text-muted">
          Technologies and tools I use to design, develop, and deploy web applications.
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">
          <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm border-0 p-4">
                <h4 class="mb-3"><i class="bi bi-server"></i> Backend Development</h4>
                  <div class="skills-badges">
                    <span class="badge bg-primary">PHP</span>
                    <span class="badge bg-primary">Laravel</span>
                    <span class="badge bg-primary">Yii Framework</span>
                    <span class="badge bg-primary">RESTful API</span>
                    <span class="badge bg-primary">MVC</span>
                    <span class="badge bg-primary">MySQL</span>
                    <span class="badge bg-primary">PostgreSQL</span>
                    <span class="badge bg-primary">JSON</span>
                    <span class="badge bg-primary">Ajax</span>
                    <span class="badge bg-primary">Java</span>
                    <span class="badge bg-primary">Nodejs</span>
                    <span class="badge bg-primary">Phyton</span>
                  </div>
            </div>
          </div>
          <!-- Frontend -->
          <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm border-0 p-4">
              <h4 class="mb-3"><i class="bi bi-window"></i> Frontend Development</h4>
              <div class="skills-badges">
                <span class="badge bg-success">HTML</span>
                <span class="badge bg-success">CSS</span>
                <span class="badge bg-success">JavaScript</span>
                <span class="badge bg-success">Bootstrap</span>
                <span class="badge bg-success">jQuery</span>
                <span class="badge bg-success">Angular</span>
                <span class="badge bg-success">Nestjs</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm border-0 p-4">
              <h4 class="mb-3"><i class="bi bi-tools"></i> Tools & Platforms</h4>
              <div class="skills-badges">
                <span class="badge bg-dark">GitHub</span>
                <span class="badge bg-dark">Bitbucket</span>
                <span class="badge bg-dark">AWS</span>
                <span class="badge bg-dark">PhpMyAdmin</span>
                <span class="badge bg-dark">Adminer</span>
              </div>
            </div>
          </div>

          <!-- Other Skills -->
          <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm border-0 p-4">
              <h4 class="mb-3"><i class="bi bi-lightbulb"></i> Additional Skills</h4>
              <ul class="mb-0">
                <li>Agile & Scrum Methodology</li>
                <li>System & Database Design (RDBMS)</li>
                <li>API Integration & Documentation</li>
                <li>Requirement Analysis</li>
                <li>Project Collaboration & Leadership</li>
              </ul>
            </div>
          </div>
        </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Here is my timeline after my SPM </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Software Engineering (Development of Information System) with Hons</h4>
              <h5>Sept 2017 - June 2021</h5>
              <p><em>Universiti Kebangsaan Malaysia (UKM) , Bangi</em></p>
              <p>I studied Python for data mining and business process management, applying it in software development projects.t</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Science Modeule 3</h4>
              <h5>May 2015 - June 2017</h5>
              <p><em>Pahang Matriculation(KMPh), Gambang Kuantan </em></p>
              <p>I studied Chemistry, Mathematic , Biology and Computer Science</p>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Pure Science</h4>
              <h5>2010 - 2014 </h5>
              <p><em>SMK Datuk Bahaman Lanchang Pahang</em></p>
            </div><!-- Edn Resume Item -->
             <div class="resume-item">
                  <canvas id="timelineChart" height="250"></canvas>
             </div>
            
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Web Developer </h4>
              <h5>April 2022 - Present</h5>
              <p><em>Axis Network Technologies Sdn Bhd</em></p>
              <ul>
                <li>Developed and maintained robust e-commerce platforms using the Yii Framework (Axis-Pharm, APLAB, EDGE Commerce) and Laravel Framework (EBX 360).</li>
                <li>Integrated multiple third-party marketplace APIs, including Shopee, Lazada, DHL Express, and TikTok, to streamline operations and enhance system functionality.</li>
                <li>Created comprehensive technical documentation and user manuals to support end-users and internal teams.</li>
                <li>Developed analytics solutions using Laravel and JavaScript to transform raw data into meaningful business insights.</li>
                <li>Conducted meetings with Internal Staff &  DHL EXPRESS Services when required to gather requirements and provide updates.</li>
                <li>Led a small development team and acted as the main point of contact.</li>
                <li>Provided technical guidance and mentorship to team members to ensure timely and high-quality project delivery.</li>
              </ul>            
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Web Developer</h4>
              <h5>APRIL 2021 - MARCH 2022</h5>
              <p><em>REGAL TALENT SDN BHD, Q Sentral, Kuala Lumpur </em></p>
              <ul>
                <li>I involve both front-end and back-end development.</li>
                <li>I have build two themes for checkout page products that integrate the PayPal button for users. </li>
                <li>Learn how to transefer domain server configuration in AWS.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Web Developer</h4>
              <h5>SEPT 2020 - JAN 2021</h5>
              <p><em>IIUM ADVANCED TECHNOLOGIES, IIUM GOMBAK</em></p>
              <ul>
                <li>I maintain a system that uses laravel and angular framework </li>
                <li>Involve in designing MySQL for the project used</li>
                <li>Update html website content</li>
                <li>Design a numerous of banner (Maulidur Rasul, IIUM Website Banner)</li>
                <li>Design a mockup for a system and design a banner for a website.</li>
              </ul>
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p> Here Will show how I grwoth since 2017 , It will how the project from nothing to something that can be proud of </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Website</li>
            <li data-filter=".filter-product">Page</li>
            <li data-filter=".filter-branding">Design</li>
            <li data-filter=".filter-books">Github Project</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/analytical.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Analytical Dashboard</p>
                  <a  href="assets/img/portfolio/analytical.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="analytical.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/cart.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Page 2</h4>
                  <p>Checkout Page</p>
                  <a href="assets/img/portfolio/cart.png" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="checkout-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/Homepage.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 1</h4>
                  <p>IIUM Holdings Mockup</p>
                  <a href="assets/img/portfolio/Homepage.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a  target="_blank" href="mockup-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/cart.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Github 1</h4>
                  <p>three.js</p>
                  <a href="assets/img/portfolio/cart.png" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="githubproject.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/mysmartclinic.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>My SMART CLINIC</p>
                  <a href="assets/img/portfolio/mysmartclinic.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="smartclinic-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/spin.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Page 2</h4>
                  <p>SPIN WHEEL</p>
                  <a href="assets/img/portfolio/spin.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="spin-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/recycle.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>SMART RECYCLE KAJANG</p>
                  <a href="assets/img/portfolio/recycle.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="recycle-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
             <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/banner2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 2</h4>
                  <p>Banner ( Maulidur Rasul) </p>
                  <a href="assets/img/portfolio/banner2.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="banner.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
             <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/web3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 3</h4>
                  <p>Website Banner</p>
                  <a href="assets/img/portfolio/web3.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="websitebanner.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
             <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/BAN3R.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 4</h4>
                  <p>Banner Lestari Bumi Asli</p>
                  <a href="assets/img/portfolio/BAN3R.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a target="_blank" href="banner2.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

 
  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    const birthDate = new Date('1997-06-21');
    const today = new Date();

    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();

    if (
      monthDiff < 0 ||
      (monthDiff === 0 && today.getDate() < birthDate.getDate())
    ) {
      age--;
    }

    document.getElementById('age').textContent = age;

     const ctx = document.getElementById('timelineChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
          '(SMK Datuk Bahaman)',
          'Science Module 3 (KMPh)',
          'Bachelor Degree (UKM)',
          'IIUM Advanced Technologies',
          'Regal Talent',
          'Axis Network Technologies'
        ],
        datasets: [{
          label: 'Timeline',
          data: [
            [2010, 2014],
            [2015, 2017],
            [2017, 2021],
            [2020, 2021],
            [2021, 2022],
            [2022, 2026]
          ]
        }]
      },
      options: {
        indexAxis: 'y',
        responsive: true,
        plugins: {
          tooltip: {
            callbacks: {
              label: function(context) {
                const range = context.raw;
                return range[0] + ' - ' + range[1];
              }
            }
          }
        },
        scales: {
          x: {
            min: 2010,
            max: 2026,
            title: {
              display: true,
              text: 'Year'
            }
          }
        }
      }
    });
  </script>
</body>

</html>