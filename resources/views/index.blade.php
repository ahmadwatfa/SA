<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <!-- bootstrap -->
  <link href="./css/bootstrap.css" rel="stylesheet" />
  <link href="./css/bootstrap.min.css" rel="stylesheet" />

  <!-- custom file -->

  <link href="./css/customFonts.css" rel="stylesheet" />
  <link href="./css/main.css" rel="stylesheet" />
  <link href="./css/media.css" rel="stylesheet" />

  @if (app()->getLocale() == 'ar')
  <link href="../css/bootstrap-rtl.min.css" rel="stylesheet"/> 
  @endif

</head>

<body>
  <!-- start header -->
  @ar
  <header class="header">
    <div class="first-header">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-12 col-lg-4 h-100">
            <ul class="ul-social-links d-flex flex-wrap align-items-center m-0 p-0 h-100">
              <li class="social-link-item"><a href="www.facebook.com" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-link-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
              <li class="social-link-item"><a href="#" class="social-link"><i class="fab fa-skype"></i></a></li>
              <li class="social-link-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-4">
            <p class="d-none d-lg-flex flex-wrap align-items-center text m-0">
              <span class="hr"></span>ترجمة للعربي </p>
          </div>
          <div class="col-12 col-lg-4 h-100">
            <ul class="p-0 mb-3 mb-md-0 d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end h-100">
              <li class="select-item h-100 d-flex align-items-center px-4">
                Cell: <a href="#">0599242261</a></li>
              <li class="select-item h-100 d-flex align-items-center">
                <select class="form-select h-100">
                  <option value="en">English</option>
                  <option value="ar">Arabic</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @else
    <header class="header">
      <div class="first-header">
        <div class="container h-100">
          <div class="row align-items-center h-100">
            <div class="col-12 col-lg-4 h-100">
              <ul class="ul-social-links d-flex flex-wrap align-items-center m-0 p-0 h-100">
                <li class="social-link-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-link-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="social-link-item"><a href="#" class="social-link"><i class="fab fa-skype"></i></a></li>
                <li class="social-link-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-4">
              <p class="d-none d-lg-flex flex-wrap align-items-center text m-0">
                <span class="hr"></span>Let us grow your website traffic.</p>
            </div>
            <div class="col-12 col-lg-4 h-100">
              <ul class="p-0 mb-3 mb-md-0 d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end h-100">
                <li class="select-item h-100 d-flex align-items-center px-4">
                  Cell: <a href="#">0123456789</a></li>
                <li class="select-item h-100 d-flex align-items-center">
                  <select class="form-select h-100">
                    <option value="en">English</option>
                    <option value="ar">Arabic</option>
                  </select>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    @endar
    @ar
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#"><img alt="img" src="./images/logo.png" style="margin-right: 20px;" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
            <li class="nav-item">
              <a class="nav-link font-15 active" aria-current="page" href="#">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-15" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-15" href="#">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-15" href="#">Case Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-15" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-15" href="#">Contact</a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="#" class="btn btn-warning btn-lg d-flex align-items-center font-15">
                Analyze Your Site <i class="fas fa-long-arrow-alt-right mx-2"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @endar
  </header>
  {{-- @php
      $e = app()->getLocale();
  @endphp

  {{$about['title_' . $e]}} --}}
  @ar
  {{ "اهلا"  }}
  @else
  {{$about->title_en}}
  @endar 
  <!-- End Header -->

  <!-- faq section -->
  <section class="faq-section">
    <img src="/images/bg.png" alt="images-not_found" class="faq-bg w-100 h-100">

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="image">
            <img class="img-cover" src="/images/1 (4).png" alt="images-not_found">
          </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-end my-5 my-md-0">
          <div class="offset-about">
            <div class="about-content title primary mb-3 mb-md-5">
              <h5 class="sub-title font-20">// FAQ.</h5>
              <h3 class="title font-55">Frequently Asked Questions.</h3>
              <span class="hr-primary mt-4"></span>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed font-18" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    1. How can I start SEO Marketing?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body font-15">Lorem Ipsum is simply dummy text the printing typesetting industry has been the industry's standard dummy text ever printer took galley of type scrambled.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed font-18" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    2. What Is SEO / Search Engine ?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body font-15">Lorem Ipsum is simply dummy text the printing typesetting industry has been the industry's standard dummy text ever printer took galley of type scrambled.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed font-18" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    3. How does SEO work?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body font-15">Lorem Ipsum is simply dummy text the printing typesetting industry has been the industry's standard dummy text ever printer took galley of type scrambled.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed font-18" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    4. Why is SEO important for marketing?
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body font-15">Lorem Ipsum is simply dummy text the printing typesetting industry has been the industry's standard dummy text ever printer took galley of type scrambled.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->


  <section class="choose-pricing section-ptb-150">
    <div class="container">
      <h3 class="title font-55 text-center mb-5">Choose Pricing Plans Which <br> Suits Your Needs</h3>
      <div class="row justify-content-center justify-content-md-between">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card-pricing title">
            <p class="title font-20">Basic Pack</p>
            <h3 class="sub-title font-55 my-2">$20.00</h3>
            <p class="text-center w-100 paragraph-price font-18">
              Extra features<br />
              Lifetime free support<br />
              Upgrate options<br />
              Full access<br />
            </p>
            <a href="#" class="btn btn-warning btn-lg d-flex align-items-center font-15">
              Choose Plan
            </a>
            <span class="font-14 mt-3 title text-center">No hidden charges!</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card-pricing title">
            <p class="title font-20">Basic Pack</p>
            <h3 class="sub-title font-55 my-2">$20.00</h3>
            <p class="text-center w-100 paragraph-price font-18">
              Extra features<br />
              Lifetime free support<br />
              Upgrate options<br />
              Full access<br />
            </p>
            <a href="#" class="btn btn-warning btn-lg d-flex align-items-center font-15">
              Choose Plan
            </a>
            <span class="font-14 mt-3 title text-center">No hidden charges!</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card-pricing title">
            <p class="title font-20">Basic Pack</p>
            <h3 class="sub-title font-55 my-2">$20.00</h3>
            <p class="text-center w-100 paragraph-price font-18">
              Extra features<br />
              Lifetime free support<br />
              Upgrate options<br />
              Full access<br />
            </p>
            <a href="#" class="btn btn-warning btn-lg d-flex align-items-center font-15">
              Choose Plan
            </a>
            <span class="font-14 mt-3 title text-center">No hidden charges!</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about section -->
  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="image">
            <img class="img-cover" src="/images/whychooseus.png" alt="images-not_found">
          </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-end my-5 my-md-0">
          <div class="offset-about">
            <div class="about-content title primary">
              <h5 class="sub-title font-20">// Why Choose Us?</h5>
              <h3 class="title font-55">We Are Trusted Digital Marketing Company.</h3>
              <p>Lorem Ipsum is dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type scrambled.</p>
              <span class="hr-primary mt-4"></span>
            </div>
            <div class="about-object">
              <div class="about-object-list d-flex">
                <div class="icon"><img src="./images/1.png" alt="images-not_found"></div>
                <div class="about-object-content">
                  <h4 class="title">High Customer Retention Rate</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing typesetting Ipsum has been the industry's standard
                    dummy. </p>
                </div>
              </div>
              <div class="about-object-list d-flex">
                <div class="icon"><img src="./images/2.png" alt="images-not_found"></div>
                <div class="about-object-content">
                  <h4 class="title">Dedicated Customer Support</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing typesetting Ipsum has been the industry's standard
                    dummy. </p>
                </div>
              </div>
              <div class="about-object-list d-flex">
                <div class="icon"><img src="./images/3.png" alt="images-not_found"></div>
                <div class="about-object-content">
                  <h4 class="title">Professional Team Member</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing typesetting Ipsum has been the industry's standard
                    dummy. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->

  <!-- service section -->
  <section class="service-section section-ptb-150">
    <div class="container">
      <div class="row">
        <div>
          <div class="title primary text-center pb-100">
            <div class="icon"><img src="/images/sharing.png" alt="Icon_not_found"></div>
            <h3 class="title font-55">What We Offer</h3> <span class="hr-box"></span>
          </div>
        </div>
      </div>
      <div class="row mtn-30">
        <div class="col-lg-6 mt-30 aos-init aos-animate">
          <div class="service-card"><img src="/images/line-one.png" alt="images_not_found" class="line">
            <div class="service-icon">
              <div class="roted-around danger"><span></span></div> <img src="/images/marketing.png" alt="">
            </div>
            <div class="service-content">
              <h4 class="title">Marketing Automation</h4>
              <p>Lorem Ipsum is simply dummy text of the ipsum has been the industry standard ever printer specimen
                book.</p> <a href="#" class="btn btn-outline-group btn-outline-danger">Details +</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-30 aos-init aos-animate">
          <div class="service-card"><img src="/images/line-two.png" alt="images_not_found" class="line">
            <div class="service-icon">
              <div class="roted-around warning"><span></span></div> <img src="/images/analytics.png" alt="">
            </div>
            <div class="service-content">
              <h4 class="title">SEO Consultancy</h4>
              <p>Lorem Ipsum is simply dummy text of the ipsum has been the industry standard ever printer specimen
                book.</p> <a href="#" class="btn btn-outline-group btn-outline-warning">Details +</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-30 aos-init aos-animate">
          <div class="service-card"><img src="/images/line-three.png" alt="images_not_found" class="line">
            <div class="service-icon">
              <div class="roted-around primary"><span></span></div> <img src="/images/connect.png" alt="">
            </div>
            <div class="service-content">
              <h4 class="title">Pay Per Click Advertising</h4>
              <p>Lorem Ipsum is simply dummy text of the ipsum has been the industry standard ever printer specimen
                book.</p> <a href="#" class="btn btn-outline-group btn-outline-primary">Details +</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-30 aos-init aos-animate">
          <div class="service-card"><img src="/images/line-foure.png" alt="images_not_found" class="line">
            <div class="service-icon">
              <div class="roted-around secondary"><span></span></div> <img src="/images/document.png" alt="">
            </div>
            <div class="service-content">
              <h4 class="title">Marketing Automation</h4>
              <p>Lorem Ipsum is simply dummy text of the ipsum has been the industry standard ever printer specimen
                book.</p> <a href="#" class="btn btn-outline-group btn-outline-secondary">Details +</a>
            </div>
          </div>
        </div>
        <div class="col-12 mt-60 aos-init">
          <div class="call-to-action text-center"><a href="/service" class="btn btn-warning">All Services <i
                class="icofont-rounded-double-right"></i></a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->

  <!-- work process -->
  <section class="working-process-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="title process text-center pb-100">
            <div class="icon"><img src="/images/pencile.png" alt="Icon_not_found"></div>
            <h3 class="title font-55">Working Process</h3> <span class="hr-box"></span>
          </div>
        </div>
      </div>
      <div class="row working-process mb-negative">
        <div class="col-sm-6 col-lg-3 working-process-box mb-4">
          <img src="/images/arrow-shape1.png" alt="images_not_found" class="arrow d-none d-md-flex">
          <div class="icon"><img src="/images/11.png" alt="images_not_found"></div>
          <h4 class="title">Idea Generation</h4>
        </div>
        <div class="col-sm-6 col-lg-3 working-process-box mb-4">
          <img src="/images/arrow-shape2.png" alt="images_not_found" class="arrow d-none d-lg-flex">
          <div class="icon"><img src="/images/22.png" alt="images_not_found"></div>
          <h4 class="title">Working Plan</h4>
        </div>
        <div class="col-sm-6 col-lg-3 working-process-box mb-4">
          <img src="/images/arrow-shape1.png" alt="images_not_found" class="arrow d-none d-md-flex">
          <div class="icon"><img src="/images/33.png" alt="images_not_found"></div>
          <h4 class="title">SEO Research</h4>
        </div>
        <div class="col-sm-6 col-lg-3 working-process-box mb-4">
          <div class="icon"><img src="/images/44.png" alt="images_not_found"></div>
          <h4 class="title">Launch Project</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->

  <!-- Trusted -->
  <section class="trusted">
    <div class="container">
      <div class="trusted-card bg-cover">
        <p class="text-center font-22">Trusted by <span class="font-35">8,980+</span> of The World's Best
          Organization.
        </p>
        <div class="d-flex justify-content-between flex-wrap">
          <a href="#" class="col my-3">
            <img src="./images/3 (3).png" alt="not found" />
          </a>
          <a href="#" class="col my-3">
            <img src="./images/4 (2).png" alt="not found" />
          </a>
          <a href="#" class="col my-3">
            <img src="./images/2 (5).png" alt="not found" />
          </a>
          <a href="#" class="col my-3">
            <img src="./images/1 (3).png" alt="not found" />
          </a>
          <a href="#" class="col my-3">
            <img src="./images/2 (5).png" alt="not found" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->

  <!-- testimonial-section -->
  <section class="testimonial-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="title primary text-center pb-100">
            <div class="icon"><img src="/images/testimonial.png" alt="Icon_not_found"></div>
            <h3 class="title font-55">From Happy Customer</h3> <span class="hr-box"></span>
          </div>
        </div>
      </div>
      <div class="row position-relative">
        <div class="clients">
          <img src="/images/lg-5.png" alt="images-not_found" class="d-none d-lg-block client width-85">
          <img src="/images/lg-4.png" alt="images-not_found" class="d-none d-lg-block client width-100">
          <img src="/images/lg-3.png" alt="images-not_found" class="d-none d-lg-block client width-85">
          <img src="/images/lg-6.png" alt="images-not_found" class="d-none d-lg-block client width-85">
          <img src="/images/lg-1.png" alt="images-not_found" class="d-none d-lg-block client width-85">
          <img src="/images/lg-2.png" alt="images-not_found" class="d-none d-lg-block client width-100">
        </div>
        <div class="col-12 mx-auto">
          <div class="testimonial-content position-relative">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-flex justify-content-center">
                    <div class="image-carusel"><img src="./images/shape.png" class="w-100" alt="background"></div>
                    <div class="inner">
                      <div class="inner-container d-flex flex-column justify-content-center align-items-center">
                        <!-- <div class="cont-img"><img src="./images/lg-1.png" alt="vector" /></div> -->
                        <div><img src="/images/lg-1.png" alt="images-not_found" class="testimonial-profile"> <span
                            class="quote">“</span></div>
                        <p class="font-20">Lorem Ipsum is simply dummy text the printing and typesetting as been the industry's standard
                          dummy text
                          ever since the 1500s when unknown printer took a galley of type and scrambled it to make
                          specimen book has
                          survived not only five centuries</p>
                        <h5 class="sub-title font-25">Doreen E. Prince</h5>
                        <span class="designation">Ui/Ux designer</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="carousel-item">
                  <div class="d-flex justify-content-center">
                    <div class="image-carusel">
                      <img src="./images/shape.png" class="w-100" alt="background">
                    </div>
                    <div class="inner">
                      <div class="inner-container d-flex flex-column justify-content-center align-items-center">
                        <div><img src="/images/lg-2.png" alt="images-not_found" class="testimonial-profile"> <span
                            class="quote">“</span></div>
                        <p class="font-20">Lorem Ipsum is simply dummy text the printing and typesetting as been the industry's standard
                          dummy text
                          ever since the 1500s when unknown printer took a galley of type and scrambled it to make
                          specimen book has
                          survived not only five centuries</p>
                        <h5 class="sub-title font-25">Doreen E. Prince</h5>
                        <span class="designation">Ui/Ux designer</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex justify-content-center">
                    <div class="image-carusel">
                      <img src="./images/shape.png" class="w-100" alt="background">
                    </div>
                    <div class="inner">
                      <div class="inner-container d-flex flex-column justify-content-center align-items-center">
                        <div><img src="/images/lg-3.png" alt="images-not_found" class="testimonial-profile"> <span
                            class="quote">“</span></div>
                        <p class="font-20">Lorem Ipsum is simply dummy text the printing and typesetting as been the industry's standard
                          dummy text
                          ever since the 1500s when unknown printer took a galley of type and scrambled it to make
                          specimen book has
                          survived not only five centuries</p>
                        <h5 class="sub-title font-25">Doreen E. Prince</h5>
                        <span class="designation">Ui/Ux designer</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex justify-content-center">
                    <div class="image-carusel">
                      <img src="./images/shape.png" class="w-100" alt="background">
                    </div>
                    <div class="inner">
                      <div class="inner-container d-flex flex-column justify-content-center align-items-center">
                        <div><img src="/images/lg-4.png" alt="images-not_found" class="testimonial-profile"> <span
                            class="quote">“</span></div>
                        <p class="font-20">Lorem Ipsum is simply dummy text the printing and typesetting as been the industry's standard
                          dummy text
                          ever since the 1500s when unknown printer took a galley of type and scrambled it to make
                          specimen book has
                          survived not only five centuries</p>
                        <h5 class="sub-title font-25">Doreen E. Prince</h5>
                        <span class="designation">Ui/Ux designer</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex justify-content-center">
                    <div class="image-carusel">
                      <img src="./images/shape.png" class="w-100" alt="background">
                    </div>
                    <div class="inner">
                      <div class="inner-container d-flex flex-column justify-content-center align-items-center">
                        <div><img src="/images/lg-5.png" alt="images-not_found" class="testimonial-profile"> <span
                            class="quote">“</span></div>
                        <p class="font-20">Lorem Ipsum is simply dummy text the printing and typesetting as been the industry's standard
                          dummy text
                          ever since the 1500s when unknown printer took a galley of type and scrambled it to make
                          specimen book has
                          survived not only five centuries</p>
                        <h5 class="sub-title font-25">Doreen E. Prince</h5>
                        <span class="designation">Ui/Ux designer</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex justify-content-center">
                    <div class="image-carusel">
                      <img src="./images/shape.png" class="w-100" alt="background">
                    </div>
                    <div class="inner">
                      <div class="inner-container d-flex flex-column justify-content-center align-items-center">
                        <div><img src="/images/lg-6.png" alt="images-not_found" class="testimonial-profile"> <span
                            class="quote">“</span></div>
                        <p class="font-20">Lorem Ipsum is simply dummy text the printing and typesetting as been the industry's standard
                          dummy text
                          ever since the 1500s when unknown printer took a galley of type and scrambled it to make
                          specimen book has
                          survived not only five centuries</p>
                        <h5 class="sub-title font-25">Doreen E. Prince</h5>
                        <span class="designation">Ui/Ux designer</span>
                      </div>
                    </div>
                  </div>
                </div> -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- end -->

  <!-- latest -->
  <section class="latest-section bg-cover">
    <div class="container">
      <div class="row mt-negative-30">
        <div class="col-lg-6 mt-30">
          <div class="title d-flex flex-column align-items-center">
            <h3 class="title font-55 text-center">Latest News From Our Blog.</h3>
            <span class="hr-primary mt-4"></span>
          </div>
          <div class="latest-card">
            <div class="image"><a href="#"><img class="img-cover" src="/images/1 (1).png" alt="images-not_found"></a>
            </div>
            <div class="content">
              <p>By Admin / 12 January, 2021 / <span>Digital Marketing.</span></p>
              <h3 class="title font-22"><a href="#">The Step-by-Step Guide to Improving Your Google
                  Rankings.</a></h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-30">
          <div class="latest-box2-cards">
            <div class="latest-box2-card">
              <div class="image"><img class="img-cover" src="/images/2 (1).png" alt="images-not_found"></div>
              <div class="content">
                <p>By Admin / 12 January, 2021 / <span>Digital Marketing.</span></p>
                <h3 class="title font-21"><a href="#">What's the Current Job Market for Seo Professionals
                    Like?</a></h3>
              </div>
            </div>
            <div class="latest-box2-card">
              <div class="image"><img class="img-cover" src="/images/3 (1).png" alt="images-not_found"></div>
              <div class="content">
                <p>By Admin / 12 January, 2021 / <span>Digital Marketing.</span></p>
                <h3 class="title font-21"><a href="#">Addicted to Seo? Us Too. 6 Reasons We Just Can't
                    Stop.</a></h3>
              </div>
            </div>
            <div class="latest-box2-card">
              <div class="image"><img class="img-cover" src="/images/4.png" alt="images-not_found"></div>
              <div class="content">
                <p>By Admin / 12 January, 2021 / <span>Digital Marketing.</span></p>
                <h3 class="title font-21"><a href="#">Why You Should Spend More Time Thinking About
                    Seo.</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->

  <!-- footer -->
  <footer class="footer-section position-relative">
    <div>
      <img src="/images/path-shape.png" alt="images_notFound" class="path-shape d-none d-md-flex">
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 126.82 303.68"
      class="path-svg">
      <defs>
        <radialGradient id="radial-gradient" cx="78.77" cy="6322.87" r="43.8"
          gradientTransform="translate(0 -3383.39) scale(1 0.58)" gradientUnits="userSpaceOnUse">
          <stop offset="0.16" stop-color="#2647c8"></stop>
          <stop offset="0.17" stop-color="#294ac9"></stop>
          <stop offset="0.29" stop-color="#6179d7"></stop>
          <stop offset="0.42" stop-color="#92a2e3"></stop>
          <stop offset="0.54" stop-color="#b9c4ed"></stop>
          <stop offset="0.66" stop-color="#d8def5"></stop>
          <stop offset="0.78" stop-color="#edf0fb"></stop>
          <stop offset="0.9" stop-color="#fbfbfe"></stop>
          <stop offset="1" stop-color="#fff"></stop>
        </radialGradient>
        <linearGradient id="linear-gradient" x1="45.02" y1="258.73" x2="112.52" y2="258.73"
          gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#fff"></stop>
          <stop offset="0.27" stop-color="#f4f7fd"></stop>
          <stop offset="0.74" stop-color="#d8e0f8"></stop>
          <stop offset="1" stop-color="#c5d2f4"></stop>
        </linearGradient>
        <linearGradient id="linear-gradient-2" x1="43.77" y1="240.52" x2="113.76" y2="240.52"
          gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#c5d2f4"></stop>
          <stop offset="0.26" stop-color="#d8e0f8"></stop>
          <stop offset="0.73" stop-color="#f4f7fd"></stop>
          <stop offset="1" stop-color="#fff"></stop>
        </linearGradient>
      </defs>
      <g class="cls-1">
        <path d="M111.1,297c17.86-10.25,17.86-27,0-37.28s-47-10.25-64.74,0-17.75,27,0,37.28S93.25,307.24,111.1,297Z"
          transform="translate(0 -1)" class="cls-2"></path>
        <path
          d="M102.64,283.06c13.18-7.57,13.18-42.77,0-50.33s-34.69-7.57-47.79,0-13.11,42.76,0,50.33c6.47,3.74,15,7.3,23.57,7.35C87.18,290.45,96,286.89,102.64,283.06Z"
          transform="translate(0 -1)" class="cls-3"></path>
        <path
          d="M113.76,240.86c0-.23,0-.45,0-.68v-5.26h-1.35c-1.59-3.18-4.54-6.18-8.88-8.67-13.67-7.85-36-7.85-49.58,0-4.32,2.49-7.25,5.49-8.83,8.67H43.89v3.9a12.1,12.1,0,0,0,0,3.4v.09h0c.7,4.56,4,9,10.05,12.48,13.6,7.85,35.91,7.85,49.58,0,6-3.47,9.41-7.92,10.11-12.48h.12Z"
          transform="translate(0 -1)" class="cls-4"></path>
        <path
          d="M103.53,249.77c13.68-7.85,13.68-20.69,0-28.54s-36-7.85-49.58,0-13.6,20.69,0,28.54S89.86,257.63,103.53,249.77Z"
          transform="translate(0 -1)" class="cls-5"></path>
        <path
          d="M101.52,248.61c12.56-7.21,12.56-19,0-26.22s-33.06-7.21-45.55,0-12.49,19,0,26.22S89,255.83,101.52,248.61Z"
          transform="translate(0 -1)" class="cls-6"></path>
        <path
          d="M97.39,249.6c10.28-5.91,10.28-15.57,0-21.47s-27.06-5.9-37.28,0-10.23,15.56,0,21.47S87.11,255.5,97.39,249.6Z"
          transform="translate(0 -1)" class="cls-7"></path>
        <path
          d="M80.79,242.55c.16-14.78.32-17.18.48-32,.07-7,.28-11.46-.21-18.41a95.41,95.41,0,0,0-3.73-19.67c-3.91-13.64-7.15-27.08-8.31-41.27a266.63,266.63,0,0,1,.2-41.63C70.4,73.74,72.55,58,74.74,42.19c.22-1.56-2.16-2.23-2.38-.66-3.85,27.69-7.7,55.65-6.22,83.68a180.79,180.79,0,0,0,6.69,40.73c1.91,6.63,4,13.22,5.09,20.05,1.07,7,1,11.67.94,18.75-.17,16.73-.36,21.08-.54,37.81a1.24,1.24,0,0,0,2.47,0Z"
          transform="translate(0 -1)" class="cls-8"></path>
        <path
          d="M68.94,135.59c-5.26-5.31-10.58-10.8-14.13-17.44a28.67,28.67,0,0,1-3.46-11c-.39-4.37.39-8.74.88-13.07A37.33,37.33,0,0,0,47.76,71.3c-4.17-7.87-9.13-15.38-13.95-22.86-.86-1.33-3-.1-2.14,1.25,4.9,7.59,10,15.23,14.16,23.25A35.23,35.23,0,0,1,50,85.53c.43,4.37-.33,8.74-.84,13.07-.89,7.68,0,14.67,3.84,21.47,3.65,6.52,8.93,12,14.15,17.27,1.12,1.14,2.87-.61,1.75-1.75Z"
          transform="translate(0 -1)" class="cls-8"></path>
        <path
          d="M72.51,153.29C74,142.2,86.55,136.48,93.38,129a52.06,52.06,0,0,0,13.21-31.12c.11-1.59-2.36-1.58-2.48,0a49.23,49.23,0,0,1-15.79,32.68c-7.2,6.58-16.9,12.23-18.28,22.78-.21,1.58,2.27,1.56,2.47,0Z"
          transform="translate(0 -1)" class="cls-8"></path>
        <path
          d="M40.5,34.88c-1.13-7-7.14-12.12-12.74-16.53C19.15,11.57,10.33,4.67,0,1A77.52,77.52,0,0,1,8.61,22.43c1.24,5.25,2.11,11,5.84,14.88,5.2,5.42,15,6.31,17.55,13.39l5.43,7.74C36.41,50.53,41.76,42.76,40.5,34.88Z"
          transform="translate(0 -1)" class="cls-8"></path>
        <path
          d="M85.33,14.47c-4,9.36-17.15,12.58-20.31,22.27-3.26,10,6.11,20.72,3.46,30.91L71,68.94c7.28-6.46,11.55-15.8,13.43-25.35S86,24.19,85.33,14.47Z"
          transform="translate(0 -1)" class="cls-8"></path>
        <path
          d="M126.82,52.12C118.59,57.29,112.24,64.9,106,72.38c-1.71,2.05-3.46,4.18-4.19,6.75a19.37,19.37,0,0,0-.38,6.27l1.11,23.2.69,3c3.68-5.89,13.56-6.08,16.07-12.56.91-2.33.56-4.93.33-7.42A75.29,75.29,0,0,1,126.82,52.12Z"
          transform="translate(0 -1)" class="cls-8"></path>
      </g>
    </svg>


    <div class="footer position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="title process text-center pb-100">
              <div class="icon"><img src="/images/44.png" alt="Icon_not_found" class="w-50"></div>
              <h3 class="title font-55">Subscribe To Our Newsletter</h3> <span class="hr-secondary"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="container-box pb-100">
              <form class="container-box-form position-relative">
                <input id="email" placeholder="Enter Your Email Address" class="form-control">
                <button class="btn btn-warning font-18">
                  Subscribe Now
                  <span class="mx-2">&#xbb;</span>
                </button></form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="inner-footer">
              <div class="d-flex flex-wrap">
                <div class="col-12 col-md-6 col-lg-3 border-right">
                  <div class="padding-footer">
                    <a href="#" class="footer-logo">
                      <img src="/images/logo-white.png" alt="Logo">
                    </a>
                    <ul class="contact">
                      <li class="font-15">
                        <span class="icon font-20">
                          <i class="fas fa-phone-alt"></i>
                        </span>
                        <a href="#">00123456789</a>
                      </li>
                      <li class="font-15">
                        <span class="icon font-20">
                          <i class="fas fa-envelope"></i>
                        </span>
                        <a href="#">demo@gmail.com</a>
                      </li>
                      <li class="font-15">
                        <span class="icon font-20">
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                        Chilton, Texas(TX), 12345
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="padding-footer services border-right">
                    <h4 class="title font-22">All Services</h4>
                    <ul class="footer-menu">
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Social Marketing
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>SEO Optimization
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Content Marketing
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Social Marketing
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Web Analytics
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="padding-footer information border-right">
                    <h4 class="title font-22">Information</h4>
                    <ul class="footer-menu">
                      <li class="font-15">
                        <a href="#" class="footer-link"><i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Vision &amp; Values
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Winning Awards
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Leadership
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Sustainability
                        </a>
                      </li>
                      <li class="font-15">
                        <a href="#" class="footer-link">
                          <i class="icofont-rounded-double-right"></i>
                          <span class="margin-right font-22">&#xbb;</span>Careers
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="padding-footer follow-us">
                    <h4 class="title font-15">Follow Us</h4>
                    <p>Lorem ipsum is simply dummy text the printing and typesetting.</p>
                    <ul class="footer-social">
                      <li class="footer-social-item">
                        <a href="#" class="footer-social-link">
                          <i class="icofont-facebook"></i>
                        </a>
                      </li>
                      <li class="footer-social-item">
                        <a href="#" class="footer-social-link">
                          <i class="icofont-twitter"></i>
                        </a>
                      </li>
                      <li class="footer-social-item">
                        <a href="#" class="footer-social-link">
                          <i class="icofont-skype"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p style="color: #fff;" class="text-center title">©<span id="currentYear"></span> Frontend <i class="icofont-heart"></i>
              By <a href="#" class="sub-title">
                Mona Mohammed</a><br/>
              Backend By
              <a href="#" class="sub-title">
                Ahmed Sami</a>
              All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end -->
  
  <!-- slider -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>