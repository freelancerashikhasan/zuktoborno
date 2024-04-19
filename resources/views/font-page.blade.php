<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b44d7d3605.js" crossorigin="anonymous"></script>
    @include('style')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('font-page/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 118px;">
                <li class="nav-item me-4">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item  me-4">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item  me-4">
                    <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="#">About us</a>
                </li>
                </ul>
                <form class="d-flex">
                <a href="#" class="me-4" style="text-decoration: none !important;"><button class="contact-btn"><img class="contact-icon" src="{{ asset('font-page/support@2x.png') }}" alt="Contact Us"> Contact Us</button></a>
                <a href="#" style="text-decoration: none !important;"><button class="login-btn"> Login <img class="login-icon" src="{{ asset('font-page/vector-stroke@2x.png') }}" alt="Login Icon"></button></a>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div class="main-sec">
            <div class="row introduce-sec">
                <div class="col-md-6">
                    <img class="robot" src="{{ asset('font-page/robot.png') }}" alt="">
                </div>
                <div class="col-md-6" style="padding-top: 10%;">
                    <button class="intro-btn btn mb-4"> <img class="intro-icon" src="{{ asset('font-page/intor-icon@2x.png') }}" alt=""> Introduce Us</button>
                    <h4 class="intro-line1">Manage Your</h4>
                    <h4 class="intro-line2">Buisness With Our Product</h4>
                    <h5 class="intro-line3">Best Product For you</h5>
                </div>
            </div>
            <div class="row about-sec" style="margin-top: 10%;">
                <div class="col-md-6">
                    <img class="about-img" src="{{ asset('font-page/about.png') }}" alt="">
                </div>
                <div class="col-md-6 p-5">
                    <button class="intro-btn btn mb-4"> <img class="intro-icon" src="{{ asset('font-page/intor-icon@2x.png') }}" alt=""> About Us</button>
                    <h4 class="about-line1">We Address Corporate</h4>
                    <h4 class="about-line2">Challenges Through Innovative Technological Solutions.</h4>
                    <p class="about-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex ratione reiciendis architecto vitae delectus ut amet recusandae praesentium unde nisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, sapiente culpa magnam aliquam rerum harum aperiam nemo ad perspiciatis accusamus obcaecati, in, dolor natus minima expedita. Autem excepturi vel minus sequi repellat, officiis eius quaerat, dolorem ea voluptatum quae libero assumenda? Voluptate temporibus atque eius dolore sit delectus molestiae dignissimos a nesciunt vero maxime, dolor repudiandae voluptatum error esse placeat unde, mollitia neque, hic animi veniam corrupti. Molestias nobis facilis laudantium minus tempora quis voluptatem! Quasi placeat dolorem incidunt aliquid quae eos harum deserunt numquam quis, architecto soluta cupiditate quas ullam, quos nobis doloremque, iure repudiandae debitis id. Culpa, mollitia? .</p>
                </div>
            </div>
            <div class="row design-sec" style="margin-top: 10%;">
                <div class="col-md-6 p-5 right-align">
                    <button class="intro-btn btn mb-4" style="margin-left: auto;"> <img class="intro-icon" src="{{ asset('font-page/intor-icon@2x.png') }}" alt=""> UI UX Design</button>
                    <h4 class="about-line1">We Are Providing You</h4>
                    <h4 class="about-line2">Crafting Seamless Experiences UI & UX Design Services..</h4>
                    <p class="about-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex ratione reiciendis architecto vitae delectus ut amet recusandae praesentium unde nisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, sapiente culpa magnam aliquam rerum harum aperiam nemo ad perspiciatis accusamus obcaecati, in, dolor natus minima expedita. Autem excepturi vel minus sequi repellat, officiis eius quaerat, dolorem ea voluptatum quae libero assumenda? Voluptate temporibus atque eius dolore sit delectus molestiae dignissimos a nesciunt vero maxime, dolor repudiandae voluptatum error esse placeat unde, mollitia neque, hic animi veniam corrupti. Molestias nobis facilis laudantium minus tempora quis voluptatem! Quasi placeat dolorem incidunt aliquid quae eos harum deserunt numquam quis, architecto soluta cupiditate quas ullam, quos nobis doloremque, iure repudiandae debitis id. Culpa, mollitia? .</p>
                </div>
                <div class="col-md-6">
                    <img class="about-img" src="{{ asset('font-page/Group 7.png') }}" alt="">
                </div>
            </div>
            <div class="row design-sec" style="margin-top: 10%;">
                <div class="col-md-6">
                    <img class="about-img" src="{{ asset('font-page/Group 14.png') }}" alt="">
                </div>
                <div class="col-md-6 p-5">
                    <button class="intro-btn btn mb-4"> <img class="intro-icon" src="{{ asset('font-page/intor-icon@2x.png') }}" alt=""> Web Design</button>
                    <h4 class="about-line1">We Are Providing You</h4>
                    <h4 class="about-line2">Crafting Seamless Experiences Web Site Design Services..</h4>
                    <p class="about-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex ratione reiciendis architecto vitae delectus ut amet recusandae praesentium unde nisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, sapiente culpa magnam aliquam rerum harum aperiam nemo ad perspiciatis accusamus obcaecati, in, dolor natus minima expedita. Autem excepturi vel minus sequi repellat, officiis eius quaerat, dolorem ea voluptatum quae libero assumenda? Voluptate temporibus atque eius dolore sit delectus molestiae dignissimos a nesciunt vero maxime, dolor repudiandae voluptatum error esse placeat unde, mollitia neque, hic animi veniam corrupti. Molestias nobis facilis laudantium minus tempora quis voluptatem! Quasi placeat dolorem incidunt aliquid quae eos harum deserunt numquam quis, architecto soluta cupiditate quas ullam, quos nobis doloremque, iure repudiandae debitis id. Culpa, mollitia? .</p>
                </div>

            </div>
            <div class="row design-sec" style="margin-top: 10%;">

                <div class="col-md-6 p-5  right-align">
                    <button  style="margin-left: auto;" class="intro-btn btn mb-4"> <img class="intro-icon" src="{{ asset('font-page/intor-icon@2x.png') }}" alt=""> App Development</button>
                    <h4 class="about-line1">We Are Providing You</h4>
                    <h4 class="about-line2">Crafting Seamless Experiences App Development Services.</h4>
                    <p class="about-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex ratione reiciendis architecto vitae delectus ut amet recusandae praesentium unde nisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, sapiente culpa magnam aliquam rerum harum aperiam nemo ad perspiciatis accusamus obcaecati, in, dolor natus minima expedita. Autem excepturi vel minus sequi repellat, officiis eius quaerat, dolorem ea voluptatum quae libero assumenda? Voluptate temporibus atque eius dolore sit delectus molestiae dignissimos a nesciunt vero maxime, dolor repudiandae voluptatum error esse placeat unde, mollitia neque, hic animi veniam corrupti. Molestias nobis facilis laudantium minus tempora quis voluptatem! Quasi placeat dolorem incidunt aliquid quae eos harum deserunt numquam quis, architecto soluta cupiditate quas ullam, quos nobis doloremque, iure repudiandae debitis id. Culpa, mollitia? .</p>
                </div>
                <div class="col-md-6">
                    <img class="about-img" src="{{ asset('font-page/Group 23.png') }}" alt="">
                </div>
            </div>
            <div class="row" style="padding-top: 10%;">
                <div class="col-md-12">
                    <button  class="intro-btn btn mb-4 m-auto"> <img class="intro-icon" src="{{ asset('font-page/intor-icon@2x.png') }}" alt=""> Our Products</button>
                    <h4 class="about-line2 text-center mb-4">Crafting Seamless Experiences App Development Services.</h4>
                    <div class="row" style="justify-content: center !important;">

                        <div class="col-md-3">
                            <div class="product-card mb-3 m-auto">
                                <img class="pro-img" src="{{ asset('font-page/Rectangle 9 (1).png') }}" alt="">
                                <p class="pro-p  p-2">School, Caching, Collage, Madrasa & Education Management App</p>
                                <div class="star d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="star-icon ms-2 me-2">
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                    </div>
                                    <div class="download pt-2">
                                        <span class="me-2">14k</span>
                                    </div>
                                </div>
                                <div class="pricing d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="price ms-2 me-2">
                                        <span style="color: #00E440;">5,000.00 BDT</span>
                                    </div>
                                    <div class="download d-flex">
                                        <button class="btn cart-btn me-1"><img src="{{ asset('font-page/Vector.svg') }}" alt=""></button>
                                        <button class="btn demo-btn text-white">Demo</button>
                                    </div>
                                </div>
                                <div class="pricing d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="price ms-2 me-2">
                                        <span style="color: #97A8BF;">140 Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-card mb-3 m-auto">
                                <img class="pro-img" src="{{ asset('font-page/Rectangle 9 (1).png') }}" alt="">
                                <p class="pro-p  p-2">School, Caching, Collage, Madrasa & Education Management App</p>
                                <div class="star d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="star-icon ms-2 me-2">
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                    </div>
                                    <div class="download pt-2">
                                        <span class="me-2">14k</span>
                                    </div>
                                </div>
                                <div class="pricing d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="price ms-2 me-2">
                                        <span style="color: #00E440;">5,000.00 BDT</span>
                                    </div>
                                    <div class="download d-flex">
                                        <button class="btn cart-btn me-1"><img src="{{ asset('font-page/Vector.svg') }}" alt=""></button>
                                        <button class="btn demo-btn text-white">Demo</button>
                                    </div>
                                </div>
                                <div class="pricing d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="price ms-2 me-2">
                                        <span style="color: #97A8BF;">140 Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-card mb-3 m-auto">
                                <img class="pro-img" src="{{ asset('font-page/Rectangle 9 (1).png') }}" alt="">
                                <p class="pro-p  p-2">School, Caching, Collage, Madrasa & Education Management App</p>
                                <div class="star d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="star-icon ms-2 me-2">
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                        <i class="text-white fa-solid fa-star pe-1"></i>
                                    </div>
                                    <div class="download pt-2">
                                        <span class="me-2">14k</span>
                                    </div>
                                </div>
                                <div class="pricing d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="price ms-2 me-2">
                                        <span style="color: #00E440;">5,000.00 BDT</span>
                                    </div>
                                    <div class="download d-flex">
                                        <button class="btn cart-btn me-1"><img src="{{ asset('font-page/Vector.svg') }}" alt=""></button>
                                        <button class="btn demo-btn text-white">Demo</button>
                                    </div>
                                </div>
                                <div class="pricing d-flex w-100  p-2" style="justify-content: space-between !important;">
                                    <div class="price ms-2 me-2">
                                        <span style="color: #97A8BF;">140 Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-5" style="padding-top: 10%;">
                <div class="col-md-12">
                    <button  class="intro-btn btn mb-4 m-auto"> <img class="intro-icon" src="{{ asset('font-page/intor-icon@2x.png') }}" alt=""> Our Services</button>
                    <h4 class="about-line2 text-center mb-4">Zuktoborno Satisfying services </h4>
                    <div class="row p-3" style="justify-content: center !important;">

                        <div class="col-md-2">
                            <div class="service-sec d-flex mb-2">
                                <div class="service-img">
                                    <img class="ser-img" src="{{ asset('font-page/Suport@4x 1.png') }}" alt="">
                                </div>
                                <div class="ser-text pt-2">
                                    <h3 class="text-white">24/7</h3>
                                    <p class="text-white ser-p">Support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="service-sec d-flex mb-2">
                                <div class="service-img">
                                    <img class="ser-img" src="{{ asset('font-page/Suport@4x 1.png') }}" alt="">
                                </div>
                                <div class="ser-text pt-2">
                                    <h3 class="text-white">04</h3>
                                    <p class="text-white ser-p">Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="service-sec d-flex mb-2">
                                <div class="service-img">
                                    <img class="ser-img" src="{{ asset('font-page/Suport@4x 1.png') }}" alt="">
                                </div>
                                <div class="ser-text pt-2">
                                    <h3 class="text-white">01 Day</h3>
                                    <p class="text-white ser-p">Delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="service-sec d-flex mb-2">
                                <div class="service-img">
                                    <img class="ser-img" src="{{ asset('font-page/Suport@4x 1.png') }}" alt="">
                                </div>
                                <div class="ser-text pt-2">
                                    <h3 class="text-white">100%</h3>
                                    <p class="text-white ser-p">Happy Clients</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </main>
    <footer class="footer">
        <div class="f-sec01">
            <div class="row pb-5" style="border-bottom: 1px solid rgba(255, 255, 255, 0.32);">
                <div class="col-md-6">
                    <h5 class="f-sec-01-text">Join our newsletter to <br> keep up to date with us!</h5>
                </div>
                <div class="col-md-6 sus-sec d-flex">
                    <button class="btn f-sec-01-inp me-2"> <img src="{{ asset('font-page/user.svg') }}" alt=""><input type="text" class="form-control f-sec01-input" name="" id="" placeholder="Enter Your E-mail"></button>
                    <button class="btn btn-primary f-sec01-suscribe"><span class="pt-1">Suscribe</span></button>
                </div>
            </div>
            <div class="footer-sec02 d-flex pt-5 pb-5" style="justify-content: space-between !important;border-bottom: 1px solid rgba(255, 255, 255, 0.32);">
                <div class="row w-100">
                    <div class="col-md-7">
                        <div class="f-logo">
                            <img class="footer-logo" src="{{ asset('font-page/logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="f-links w-100" style="width: 40%;">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <p class="f-links-p">Platform</p>
                                    <p class="f-links-p">Plans & Pricing</p>
                                    <p class="f-links-p">Personal AI Manager</p>
                                    <p class="f-links-p">AI Business Writer</p>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <p class="f-links-p">Company</p>
                                    <p class="f-links-p">Blog</p>
                                    <p class="f-links-p">Careers</p>
                                    <p class="f-links-p">News</p>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <p class="f-links-p">Resources</p>
                                    <p class="f-links-p">Documentation</p>
                                    <p class="f-links-p">Papers</p>
                                    <p class="f-links-p">Press Conference</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-sec03 pt-5 pb-5">
                <div class="row">
                    <div class="col-md-8">
                        <p class="copyright">© 2024 Zuktoborno Inc.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="copyright me-5">Terms of service</span>
                        <span class="copyright me-5">Privacy Policy</span>
                        <span class="copyright me-5">Cookies</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
