<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moe's Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { padding-top: 3rem; color: #5a5a5a; overflow-x: hidden; }
        
        /* HEADER & CAROUSEL */
        .navbar { margin-bottom: 0; }
        .carousel { margin-bottom: 4rem; }
        .carousel-item { height: 32rem; background-color: #555; }
        .carousel-item > img { position: absolute; top: 0; left: 0; min-width: 100%; height: 32rem; object-fit: cover; opacity: 0.6; }
        .carousel-caption { bottom: 3rem; z-index: 10; }
        
        /* BODY CONTENT */
        .marketing .col-lg-4 { margin-bottom: 1.5rem; text-align: center; }
        .marketing h2 { font-weight: 400; margin-top: 10px; }
        .marketing .rounded-circle { background-color: #777; }
        
        .featurette-divider { margin: 5rem 0; }
        
        /* Pricing & Accordion Layout */
        .pricing-header { max-width: 700px; }
        
        /* Gallery Images */
        .gallery-container { margin-top: 3rem; }
        .gallery-img { width: 100%; height: 150px; background-color: #eee; margin-bottom: 15px; border-radius: 5px; background-size: cover; background-position: center; }

        /* Map */
        .map-container iframe { width: 100%; height: 400px; border: 0; }

        /* FOOTER (Brown) */
        .custom-footer {
            background-color: #483328;
            color: white;
            padding: 4rem 0;
            margin-top: 0;
        }
        .custom-footer h5 { font-size: 1.5rem; margin-bottom: 1.5rem; }
        .custom-footer p, .custom-footer li { font-size: 0.9rem; color: #ddd; }
        .custom-footer a { color: #ddd; text-decoration: none; }
        .custom-footer a:hover { color: #fff; }
        .custom-footer .form-control { margin-bottom: 10px; border-radius: 4px; }
        .btn-footer { background-color: #0d6efd; color: white; border: none; padding: 8px 20px; border-radius: 4px; }
        .btn-footer:hover { background-color: #0b5ed7; }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Carousel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <rect width="100%" height="100%" fill="#777"></rect>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                     <rect width="100%" height="100%" fill="#777"></rect>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Second slide label.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container marketing">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bd-placeholder-img rounded-circle mx-auto" style="width: 140px; height: 140px; background: #777;"></div>
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <div class="bd-placeholder-img rounded-circle mx-auto" style="width: 140px; height: 140px; background: #777;"></div>
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <div class="bd-placeholder-img rounded-circle mx-auto" style="width: 140px; height: 140px; background: #777;"></div>
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Pricing</h1>
                <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Free</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>10 users included</li>
                                        <li>2 GB of storage</li>
                                        <li>Email support</li>
                                        <li>Help center access</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Pro</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>20 users included</li>
                                        <li>10 GB of storage</li>
                                        <li>Priority email support</li>
                                        <li>Help center access</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                <div class="card-header py-3 text-bg-primary border-primary">
                                    <h4 class="my-0 fw-normal">Enterprise</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>30 users included</li>
                                        <li>15 GB of storage</li>
                                        <li>Phone and email support</li>
                                        <li>Help center access</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                    Collapsible #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item.</strong> It is shown by default.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Collapsible #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The second item's accordion body.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Collapsible #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The third item's accordion body.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gallery-container">
                <div class="col-4"><div class="gallery-img" style="background-color: #ddd;"></div></div>
                <div class="col-4"><div class="gallery-img" style="background-color: #bbb;"></div></div>
                <div class="col-4"><div class="gallery-img" style="background-color: #999;"></div></div>
                <div class="col-4"><div class="gallery-img" style="background-color: #777;"></div></div>
                <div class="col-4"><div class="gallery-img" style="background-color: #555;"></div></div>
                <div class="col-4"><div class="gallery-img" style="background-color: #333;"></div></div>
            </div>
            
        </div><div class="container-fluid p-0 mt-5 map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14932236.439832676!2d36.0595703125!3d23.946059275034636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2ssa!4v1700000000000!5m2!1sen!2ssa" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </main>

    <footer class="custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>About Us</h5>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fab fa-facebook me-2"></i> Facebook</li>
                        <li><i class="fab fa-instagram me-2"></i> Instagram</li>
                        <li><i class="fab fa-youtube me-2"></i> Youtube</li>
                        <li><i class="fab fa-twitter me-2"></i> X</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Comments:</label>
                            <textarea class="form-control" rows="3" placeholder="Enter comments"></textarea>
                        </div>
                        <button type="submit" class="btn btn-footer">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>