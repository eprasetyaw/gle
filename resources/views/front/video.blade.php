@extends('template/app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Galeri Video</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Galeri</a></li>
                <li class="breadcrumb-item active" aria-current="page">Video</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Galeri</p>
            <h1 class="display-5 mb-5">Lihat Galeri Video Kami</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-md-4 mt-3 col-lg-4">
                <a href="#exampleModalToggle" role="button" data-bs-toggle="modal">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7tz4Ya6gzG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('myasset/img/sample-1.jpg') }}" class="rounded image" alt="sample-1">
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
@endsection