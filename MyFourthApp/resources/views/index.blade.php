@extends('layouts.app')
@section('title', 'Home')
@section('main-container')
    <header>
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CUI Sahiwal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        {{-- <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/favicon/a.jpg" class="d-block w-100" alt="Image Not Found">
                </div>
                <div class="carousel-item">
                    <img src="images/slider/campaign-creators-gMsnXqILjp4-unsplash.jpg" class="d-block w-100"
                        alt="Image Not Found">
                </div>
                <div class="carousel-item">
                    <img src="images/slider/jason-goodman-Oalh2MojUuk-unsplash.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}

        <div class="container mt-4">
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Semester</th>
                    <th>CGPA</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>BCS</td>
                        <td>5th</td>
                        <td>3.4</td>
                    </tr>


                </tbody>

            </table>
        </div>

        <br>
        <br>

        <br>

        <br>

        <br>

        <br>

        <br>




    </main>



@endsection
