<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Urribarri</title>
    @vite(['resources/css/bootstrap.min.css','resources/css/line-awesome.min.css','resources/css/style.css'])
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-3" href="#">
                <span class="h3 fw-bold d-block d-lg-none">Daniel</span>
                <img src="/images/person.jpg" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <!-- HOME -->
        <section id="home" class="full-height px-lg-5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">I'M A <span class="text-brand">DEVELOPER</span> FROM BERN, SWISS</h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">I am Daniel, And an enthusiastic developer.</p>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <a href="#work" class="btn btn-brand me-3">Explore My Work</a>
                            <a href="tel:+41767225160" class="link-custom">Call: (+41) 76 722 51 60</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- //HOME -->

        <!-- WORK -->
        <section id="work" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">WORK</h6>
                        <h1>My Recent Projects</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="/images/project-1.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Startup Landing Page</h4>
                                <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="/images/project-2.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Startup Landing Page</h4>
                                <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="/images/project-3.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Startup Landing Page</h4>
                                <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="/images/project-4.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Startup Landing Page</h4>
                                <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- //WORK -->

        <!-- ABOUT -->
        <section id="about" class="full-height px-lg-5">
            <div class="container">
        <!-- EDUCATION -->
                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">ABOUT</h6>
                        <h1>My Education & Experiance</h1>
                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Education</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Bachelor Telecommunications Engineering</h4>
                                    <p class="text-brand mb-2">University Rafael Belloso Chacin, Maracaibo, Venezuela (09.2011 - 02.2018)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet consectetur adipisicing elit</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Swisscom Web course, Bern</h4>
                                    <p class="text-brand mb-2">Swisscom, Bern, Swiss (10.2022 - 12.2022)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet consectetur adipisicing elit</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Powercoders Bootcamp - ICT Work Integration Program</h4>
                                    <p class="text-brand mb-2">Powercoders, Bern, Swiss (08.2023 - 12.2023)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet consectetur adipisicing elit</p>
                                </div>
                            </div>

                        </div>

                    </div>
        <!-- //EDUCATION -->

        <!-- EXPERIANCE -->
                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Experiance</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>IT Analyst</h4>
                                    <p class="text-brand mb-2">Confurca, Maracaibo, Venezuela (12.2019 - 12.2020)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet consectetur adipisicing elit</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>IT Intern</h4>
                                    <p class="text-brand mb-2">PDVSA, Maracaibo, Venezuela (05.2018 - 10.2018)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet consectetur adipisicing elit</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <!-- //EXPERIANCE -->
        </section>
        <!-- //ABOUT -->

        <!-- REVIEWS -->
        <section id="reviews" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">REVIEWS</h6>
                        <h1>What our subscribers say</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quae facilis fugiat molestias ab illum excepturi, qui optio modi asperiores, delectus maiores!</p>
                            <div class="person">
                                <h5 class="mb-0">Jon Doe</h5>
                                <p class="mb-0">Twitter</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quae facilis fugiat molestias ab illum excepturi, qui optio modi asperiores, delectus maiores!</p>
                            <div class="person">
                                <h5 class="mb-0">Jon Doe</h5>
                                <p class="mb-0">Twitter</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quae facilis fugiat molestias ab illum excepturi, qui optio modi asperiores, delectus maiores!</p>
                            <div class="person">
                                <h5 class="mb-0">Jon Doe</h5>
                                <p class="mb-0">Twitter</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- //REVIEWS -->

        <!-- BLOG -->
        <section id="blog" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">BLOG</h6>
                        <h1>My Blog Posts</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="/images/blog-post-1.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">13 Nov, 2023</p>
                                <h5 class="mb-4">Frontend created using Bootstrap 5</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="/images/blog-post-2.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">13 Nov, 2023</p>
                                <h5 class="mb-4"><br>Backend created using Laravel</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="/images/blog-post-3.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">13 Nov, 2023</p>
                                <h5 class="mb-4">Servers used Laragon and Mailtrap</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- //BLOG -->

        <!-- CONTACT -->
        <section id="contact" class="full-height px-lg-5">
            <div class="container">

                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4" data-aos="fade-up">
                        <h6 class="text-brand">CONTACT</h6>
                        <h1>Interested in working together? Let's talk
                        </h1>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                        <form method="post" action="{{route('portfolio.ContactMe')}}" class="row g-lg-3 gy-3">
                            @csrf
                            @method('post')
                            <div class="form-group col-md-6">
                                <input name="name" type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group col-12">
                                <input name="subject" type="text" class="form-control" placeholder="Enter subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" class="btn btn-brand">Contact me</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>
        <!-- //CONTACT -->

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-end">
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/daniel-alejandro-urribarri" target="_blank"><i class="lab la-linkedin"></i></a>
                            <a href="https://github.com/danielUrribarri" target="_blank"><i class="lab la-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //FOOTER -->

    </div>
    <!-- //CONTENT WRAPPER -->



    @vite(['resources/js/bootstrap.bundle.min.js', 'resources/js/aos.js', 'resources/js/main.js','resources/js/app.js'])
</body>

</html>