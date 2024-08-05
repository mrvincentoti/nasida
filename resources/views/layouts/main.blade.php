<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Nasida') }} - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="Free HTML Templates">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Datatables Stylesheet -->
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">

    <!-- Anychart Stylesheet -->
    <link href="{{ asset('css/anychart-ui.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark bg-green px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, XYZ</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+234 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start #164516 -->
    <div class="container-fluid position-relative p-0">
        @if (request()->is('/') || request()->is('/home'))
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        @else
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 custom-green-menu">
        @endif
            <a href="{{ route('webhome') }}" class="navbar-brand p-0">
                <img src="{{ asset('img/logo.png') }}" />
                <!-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('webhome') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('project.all') }}" class="nav-item nav-link">Projects</a>
                    <a href="{{ route('announcement') }}" class="nav-item nav-link">Announcements</a>
                    <a href="" class="nav-item nav-link">PPPs In Nigeria</a>
                    <a href="" class="nav-item nav-link">PPP Disclosure Framework</a>

                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div> -->
                    <a href="" class="nav-item nav-link">Contact</a>
                </div>
                <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
                <!-- <a href="" class="btn btn-primary py-2 px-4 ms-3">Download</a> -->
            </div>
        </nav>
        <!--Start Banner-->
        @if (request()->is('/') || request()->is('/home'))
            @include('front.partials.banner', ['data' => 'banners'])
        @endif
        <!--End Banner-->
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-80 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Nasida</h1>
                        </a>
                        <p class="mt-3 mb-4">NASIDA is the Nasarawa Investment and Development Agency, created through
                            an act
                            of the Nasarawa State House of Assembly to initiate, promote, facilitate and coordinate
                            investments in Nasarawa State,
                            whether it be public private partnerships, privatization, concessions or commercialization
                            of state owned assets.
                        </p>
                        <!-- <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark-green">Sign Up</button>
                            </div>
                        </form> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-6 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Contact Us</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 Street, XYZ</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+234 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Datatable JS -->
    <script src="{{ asset('js/datatables.min.js') }}"></script>

    <!-- Anychart JS -->
    <!-- <script src="{{ asset('js/anychart-ui.min.js') }}"></script>
    <script src="{{ asset('js/anychart-bundle.min.js') }}"></script>
    <script src="{{ asset('js/anychart-pie.min.js') }}"></script>
    <script src="{{ asset('js/anychart-core.min.js') }}"></script> -->
    <script src="{{ asset('js/anychart-core.min.js') }}"></script>
    <script src="{{ asset('js/anychart-pie.min.js') }}"></script>
    <script src="{{ asset('js/anychart-bundle.min.js') }}"></script>
    <script src="{{ asset('js/anychart-base.min.js') }}"></script>
    <script src="{{ asset('js/anychart-exports.min.js') }}"></script>
    <script src="{{ asset('js/anychart-ui.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>


    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>

    <!-- Pie Chart -->
    <script>
        // create data
        var data = [
            { x: "Development", value: 637166 },
            { x: "Procurement", value: 721630 },
            { x: "Implementation", value: 148662 },
        ];

        // create a chart and set the data
        chart = anychart.pie(data);

        // set the container id
        chart.container("project-by-stage");

        // initiate drawing the chart
        chart.draw();
    </script>

    <script>
        // create data
        var data = [
            { x: "Health", value: 10000 },
            { x: "Energy", value: 12000 },
            {
                x: "Transport", value: 13000,
                normal: {
                    fill: "#5cd65c",
                    stroke: null,
                    label: { enabled: true }
                },
                hovered: {
                    fill: "#5cd65c",
                    stroke: null,
                    label: { enabled: true }
                },
                selected: {
                    fill: "#5cd65c",
                    stroke: null,
                    label: { enabled: true }
                }
            },
            { x: "Telecom", value: 10000 },
        ];

        // create a chart
        chart = anychart.bar();

        // create a bar series and set the data
        var series = chart.bar(data);

        // set the container id
        chart.container("project-by-sector");

        // initiate drawing the chart
        chart.draw();
    </script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkboxes = document.querySelectorAll('.form-check-input');

                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', filterTable);
                });

                function filterTable() {
                    const stageFilters = [];
                    const sectorFilters = [];
                    const lgaFilters = [];

                    document.querySelectorAll('#flush-collapseTwo .form-check-input:checked').forEach(cb => stageFilters.push(cb.value));
                    document.querySelectorAll('#flush-collapseThree .form-check-input:checked').forEach(cb => sectorFilters.push(cb.value));
                    document.querySelectorAll('#flush-collapseFour .form-check-input:checked').forEach(cb => lgaFilters.push(cb.value));

                    $.ajax({
                        url: '/filter-projects',
                        method: 'GET',
                        data: {
                            stage: stageFilters,
                            sector: sectorFilters,
                            lga: lgaFilters
                        },
                        success: function (response) {
                            updateTable(response);
                        }
                    });
                }

                function updateTable(data) {
                    const tbody = document.querySelector('#example tbody');
                    tbody.innerHTML = '';

                    data.forEach(project => {
                        const row = `<tr>
                                        <td>${project.project_title}</td>
                                        <td>${project.sector.name}</td>
                                        <td>${project.phase.name}</td>
                                        <td>${project.project_title}</td>
                                        <td>${project.value}</td>
                                    </tr>`;
                        tbody.innerHTML += row;
                    });
                }
            });
        </script>
</body>

</html>