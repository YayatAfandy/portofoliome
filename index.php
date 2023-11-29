<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" data-color-mode="light">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Tab Icon -->
    <link rel="icon" href="img/LOGO1.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>My Profile - Yayat Afandy</title>

</head>

<body id="onTop">

    <!-- Static navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <button class="navbar-toggler border-0 pr-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <img src="img/burger-expand-3.webp" alt="option" title="Expand Navigation" width="26"></span> -->
                <div class="nav-menu" onclick="openNavMenu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto navbarLinks">
                    <a class="nav-item nav-link mx-2" href="#portfolio" data-toggle="collapse" data-target=".navbar-collapse.show">Portfolio</a>
                    <a class="nav-item nav-link mx-2" href="#skill" data-toggle="collapse" data-target=".navbar-collapse.show">Skill</a>
                    <a class="nav-item nav-link mx-2" href="#about" data-toggle="collapse" data-target=".navbar-collapse.show">About</a>
                    <a class="nav-item nav-link mx-2" href="#history" data-toggle="collapse" data-target=".navbar-collapse.show">History</a>
                </div>
                <a class="nav-item nav-link mx-2" href="#contactme" data-toggle="collapse" data-target=".navbar-collapse.show"><i class="fas fa-paper-plane mr-2"></i>Contact me!</a>
                <button class="btnChangeTheme btn btn-outline-dark btn-sm border-0 ml-3 shadow-none d-block mx-auto mx-lg-0 nav-link" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <i class="far fa-moon"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- End of static navbar -->

    <!-- Go top button -->
    <div class="row">
        <div class="col">
            <a class="goTop btn btn-secondary fixed-bottom mr-3 mb-3 ml-auto border-0 d-none" href="#onTop"
                style="width: 50px; height: 50px;">
                <i class="fas fa-chevron-up h4 pt-2"></i>
            </a>
        </div>
    </div>
    <!-- End of go top button -->

    <!-- Jumbotron section -->
    <div id="jumbotron" class="container">
        <div class="row">
            
            <div class="col-md-4 text-center order-md-2">
                <img class="jumbotronImg shadow-lg bg-white" height="380" src="img/me.jpg" alt="Your Photo">
            </div>
            
            <div class="col-md-6 offset-lg-1 jumbotronTitle">
                <small class="mb-0">Hello, my name is</small>
                <h1>Yayat Afandy</h1>
                <p class="mb-2 font-weight-lighter">Vector Artist | YAYART</p>
                    <a href="https://www.linkedin.com/in/yayat-afandy-821ab2298/" class="h4 mx-1 text-secondary" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/YayatAfandy" class="h4 mx-1 text-secondary" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/yayat.afandy/" class="h4 mx-1 text-secondary" title="Instagram"><i class="fab fa-instagram"></i></a>
                <br>
                <a href="#about" class="btn btn-dark nav-item mt-4 py-2">About me</a>
            </div>
        </div>
    </div>
    <!-- End of jumbotron section -->

    <!-- About me section -->
    <div id="about" class="container mb-5">
        <div class="row">
            <div class="col-md">
                <div class="row">
                    <div class="col-md">
                        <h3 class="mb-4 text-center">About me</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col offset-lg-2">
                        <div class="card border-0 p-3 shadow">
                            <div class="card-body">
                                <p class="card-text text-justify">Hello, I'm Yayat Afandy, I'm a student majoring in information systems. I am interested in the world of computers according to my field of study. Apart from that, I am also interested in the world of design, such as face vector design, UI/UX, etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of about me section -->

    <!-- Hobby section -->
    <div id="hobby" class="container" style="margin-bottom: 100px;">
        <div class="row mb-4">
            <div class="col-md">
                <h3 class="text-center">My Brand</h3>
            </div>
        </div>
            <div class="row">
                <div class="col-md">
                    <div class="card border-0 bg-transparent mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/hobby/logo-bii.jpg" class="card-img shadow-lg" title="Photo bt Luca Bravo on Unsplash" alt="hobby">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-0 pl-3 mt-2 mb-3">
                                    <h5 class="card-title">Pembuatan Logo | YAYART</h5>
                                    <p class="card-text">Berbagai jenis logo dapat dibuat sesuai keinginan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card border-0 bg-transparent mb-3 float-right" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 order-md-2">
                                <img src="img/hobby/START02.jpg" class="card-img shadow-lg" title="Photo bt Luca Bravo on Unsplash" alt="hobby">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-0 pr-md-3 pl-3 mt-2 mb-3 text-md-right">
                                    <h5 class="card-title">Ilustrasi wajah | YAYART</h5>
                                    <p class="card-text">ilustrasikan fotomu, dan abadikan selamanya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
    <!-- End of hobby section -->

    <!-- Skill section -->
    <div id="skill" class="container mb-5">
        <div class="row mb-4">
            <div class="col-md text-center">
                <h3>My Skills</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md mb-3">
                <div class="card border-0 bg-transparent">
                    <i class="fas fa-desktop text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Design</h5>
                        <p class="card-text">Coreldraw, Affinity Designer, Photoshop, Adobe Illustrator, Canva</p>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card border-0 bg-transparent">
                    <i class="fas fa-layer-group text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">UI/UX Design</h5>
                        <p class="card-text">Figma, Adobe XD</p>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card border-0 bg-transparent">
                    <i class="fas fa-bezier-curve text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Others</h5>
                        <p class="card-text">Office Word, Office Excel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of skill section -->

    <!-- Portfolio section -->
    <div id="portfolio" class="container mb-5">
        <div class="row">
            <div class="col text-center mb-4">
                <h3>My Portfolio</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow border-0">
                    <img src="img/portfolio/Desktop.png" class="card-img-top" alt="portfolio">
                    <div class="card-body">
                        <h5 class="card-title">UI/UX Sikontan Marketplace</h5>
                        <p class="card-text text-justify">Sikontan Marketplace (website Sistem Informasi Pekon Panutan) adalah sebuah interface website marketplace yang dirancang dan dikembangkan dari website sistem informasi pekon panutan yang sudah ada.</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow border-0">
                    <img src="img/portfolio/momo.png" class="card-img-top" alt="portfolio">
                    <div class="card-body">
                        <h5 class="card-title">UI/UX Montir Mobile Apps</h5>
                        <p class="card-text text-justify">Montir Mobile Apps adalah interface yang dirancang sebagai aplikasi montir online, beberapa fitur yang ada seperti Tow Truck, Call Mechanic, Schedule Service, Consultation dan lainnya.</p>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow border-0">
                    <img src="img/portfolio/logobr.png" class="card-img-top" alt="portfolio">
                    <div class="card-body">
                        <h5 class="card-title">Branding Logo</h5>
                        <p class="card-text text-justify">Brandng logo menjadi salah jasa yang ada pada YAYART, yaitu sebuah usaha milik saya sendiri.</p>
                        <br>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- End of portfolio section -->

    <!-- History section -->
    <div id="history" class="container mb-5">
        <div class="row">
            <div class="col text-center mb-4">
                <h3>My History</h3>
            </div>
        </div>
        <div class="row aos-init" data-aos="fade-up" data-aos-offset="300">
            <div class="col">
                <div class="card bg-0 border-0 shadow" style="border-radius: 30px;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 my-3 aos-init" data-aos="fade-right" data-aos-delay="500">
                        <h5 class="text-center mb-3">Education</h5>
                        <ul class="timeline position-relative">
                            
                                <li class="list-unstyled pl-3">
                                    <small>2018 - 2021</small>
                                    <p class="font-weight-bold mb-0">MA Negeri 1 Pesawaran</p>
                                    <ul>
                                        <li>Matematika dan Ilmu Pengetahuan Alam</li>
                                     </ul>
                                </li>
                            
                        </ul>
                        <ul class="timeline position-relative">
                            
                            <li class="list-unstyled pl-3">
                                <small>2021 - Ongoing</small>
                                <p class="font-weight-bold mb-0">Universitas Teknokrat Indonesia</p>
                                <ul>
                                        <li>Sistem Informasi</li>
                                </ul>
                            </li>
                        
                      </div>
                      <div class="col-md-6 my-3 aos-init" data-aos="fade-left" data-aos-delay="500">
                        <h5 class="text-center mb-3">Organizational History</h5>
                        <ul class="timeline position-relative">
                            
                                <li class="list-unstyled pl-3">
                                    <p class="font-weight-bold mb-0">Ikatan Beasiswa Teknokrat</p>
                                    <ul>
                                            <li>Ketua Umum Periode 2023/2024</li>
                                    </ul>
                                </li>
                            
                        </ul>
                        <ul class="timeline position-relative">
                            
                            <li class="list-unstyled pl-3">
                                <p class="font-weight-bold mb-0">UKM Islam Teknokrat</p>
                                <ul>
                                        <li>Anggota</li>
                                </ul>
                            </li>
                        
                    </ul>
                      </div>
                      <div class="col-md my-3 aos-init" data-aos="fade-left" data-aos-delay="500">
                        <h5 class="text-center mb-3">Seminars and Training</h5>
                        <ul class="timeline position-relative">
                            
                                <li class="list-unstyled pl-3">
                                    <small>September 2022</small>
                                    <p>"Belajar Dasar Pemrograman Web By Dicoding Indonesia"</p>
                                </li>
                            
                                <li class="list-unstyled pl-3">
                                    <small>February 2023</small>
                                    <p>"Pengenalan Metaverse di Indonesia (Metaverse 101) By Kementerian Komunikasi dan Informatika</p>
                                </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of history section -->

    <!-- Contact me section -->
    <div id="contactme" class="container">
        <div class="row">
            <div class="col-md align-self-center text-center mb-3">
                <h3>Contact me!</h3>
                <br>
                <a href="https://wa.me/qr/PTG2RUIXCRH3F1"><button class="wa">WhatsApp</button></a>
                <a href="mailto:Yayat.afandy15@gmail.com"><button class="wa">Email</button></a>
            </div>
        </div>
    </div>
    <!-- End of contact me section -->

    <!-- Footer -->
    <footer id="footer">
            <div class="row pt-3 border-top border-light" >
                <div class="col-md-6 text-center text-md-left pb-3">
                    <small class="mr-2">© 2023. Made By Yayat</small>
                </div>
                <div class="col-md-6 text-center text-md-right pb-3">
                    
                        <a href="https://www.linkedin.com/in/yayat-afandy-821ab2298/" class="h4 mx-1 text-secondary" title="LinkedIn"><i class="fab fa-linkedin"></i></a>    
                    
                        <a href="https://github.com/YayatAfandy" class="h4 mx-1 text-secondary" title="Github"><i class="fab fa-github"></i></a>    
                    
                        <a href="https://www.instagram.com/yayat.afandy/" class="h4 mx-1 text-secondary" title="Instagram"><i class="fab fa-instagram"></i></a>    
                                        
                </div>
            </div>
        </div>
    </footer>
    <!-- End of footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/jquery/jquery.easing.1.3.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- My own script -->
    <script src="js/script.js"></script>
</body>

</html>