@extends('frontend.layouts.main-container-new')
@section('title', 'Gallery')
@section('main-container-new')
    <!--============================= Gallery =============================-->
    <div class="gallery-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="gallery-style">Style One</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="frontend/images/gallery/large_1.jpg" class="grid image-link">
                        <figure class="effect-bubba gallery-img-wrap">
                            <img src="frontend/images/gallery/gallery_1.jpg" class="img-fluid" alt="#">
                            <figcaption>
                                <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="frontend/images/gallery/large_2.jpg" class="grid image-link">
                        <figure class="effect-bubba gallery-img-wrap">
                            <img src="frontend/images/gallery/gallery_2.jpg" class="img-fluid" alt="#">
                            <figcaption>
                                <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="frontend/images/gallery/large_3.jpg" class="grid image-link">
                        <figure class="effect-bubba gallery-img-wrap">
                            <img src="frontend/images/gallery/gallery_3.jpg" class="img-fluid" alt="#">
                            <figcaption>
                                <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="frontend/images/gallery/large_4.jpg" class="grid image-link">
                        <figure class="effect-bubba gallery-img-wrap">
                            <img src="frontend/images/gallery/gallery_4.jpg" class="img-fluid" alt="#">
                            <figcaption>
                                <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="frontend/images/gallery/large_5.jpg" class="grid image-link">
                        <figure class="effect-bubba gallery-img-wrap">
                            <img src="frontend/images/gallery/gallery_5.jpg" class="img-fluid" alt="#">
                            <figcaption>
                                <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="frontend/images/gallery/large_6.jpg" class="grid image-link">
                        <figure class="effect-bubba gallery-img-wrap">
                            <img src="frontend/images/gallery/gallery_6.jpg" class="img-fluid" alt="#">
                            <figcaption>
                                <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <br>
            <br>
            <!-- Style 2 -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="gallery-style">Style Two</h3>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div id="gallery">
                        <div id="gallery-header">
                            <div id="gallery-header-center">
                                <div id="gallery-header-center-right">
                                    <div class="gallery-header-center-right-links" id="filter-all">All</div>
                                    <div class="gallery-header-center-right-links" id="filter-studio">Studio</div>
                                    <div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>
                                </div>
                            </div>
                        </div>
                        <div id="gallery-content">
                            <div id="gallery-content-center">
                                <a href="frontend/images/gallery/large_5.jpg" class="image-link2">
                                    <img src="frontend/images/gallery/gallery_5.jpg" class="all studio img-fluid"
                                        alt="#" />
                                </a>
                                <a href="frontend/images/gallery/large_1.jpg" class="image-link2">
                                    <img src="frontend/images/gallery/gallery_1.jpg" class="all studio img-fluid"
                                        alt="#" />
                                </a>
                                <a href="frontend/images/gallery/large_3.jpg" class="image-link2">
                                    <img src="frontend/images/gallery/gallery_3.jpg" class="all landscape img-fluid"
                                        alt="#" />
                                </a>
                                <a href="frontend/images/gallery/large_2.jpg" class="image-link2">
                                    <img src="frontend/images/gallery/gallery_2.jpg" class="all studio img-fluid"
                                        alt="#" />
                                </a>
                                <a href="frontend/images/gallery/large_6.jpg" class="image-link2">
                                    <img src="frontend/images/gallery/gallery_6.jpg" class="all studio img-fluid"
                                        alt="#" />
                                </a>
                                <a href="frontend/images/gallery/large_4.jpg" class="image-link2">
                                    <img src="frontend/images/gallery/gallery_4.jpg" class="all studio img-fluid"
                                        alt="#" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//End Style 2 -->

        </div>
    </div>
    <!--//End Gallery -->
@endsection
