<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LPK GLE - Graha Latih Ekselenta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('finanza-1.0.0/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('finanza-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('finanza-1.0.0/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('finanza-1.0.0/css/style.css')}}" rel="stylesheet">

    <!-- Whatsapp Stylesheet -->
    <link rel="stylesheet" href="{{asset('myasset/css/whatsapp.css')}}">
    <link rel="stylesheet" href="{{asset('myasset/css/style.css')}}">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <a href="https://api.whatsapp.com/send?phone=+62895411143393&text=Halo+LPK+GLE%2C+Saya+ingin+bertanya+lebih+lanjut+tentang+LPK+GLE+nih." 
    class="floating-wa" target="_blank"><img src="{{ asset('finanza-1.0.0/img/whatsapp.png') }}" style="width: 30px;"></a>

    @include('template/navbar')

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Kantor Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Ruko Sambisari Blok A No.15, Sambisari, Kalasan Sleman, Di Yogyakarta, 55571</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 856-4173-6747</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ekselenta.so@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Jam Operasional</h4>
                    <a class="btn btn-link" href="">Senin - Jum'at: 08.00 - 17.00 WIB</a>
                    <a class="btn btn-link" href="">Sabtu : 09.00 - 12.00 WIB</a>
                    <a class="btn btn-link" href="">Minggu : Tutup</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Link Cepat</h4>
                    <a class="btn btn-link" href="/about">Tentang Kami</a>
                    <a class="btn btn-link" href="/contact">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">LPK GLE</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('finanza-1.0.0/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('finanza-1.0.0/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('finanza-1.0.0/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('finanza-1.0.0/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('finanza-1.0.0/lib/counterup/counterup.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('finanza-1.0.0/js/main.js')}}"></script>
</body>

</html>