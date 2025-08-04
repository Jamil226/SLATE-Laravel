@extends('layouts.app')
@section('title', 'Contact')
@section('main-container')
    <main>
        <br>
        <br>
        <br>

        <div class="container">
            <center>
                <h3>
                    Contact Us
                </h3>
            </center>
            <br>
            <form action="">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="fullname" placeholder="Enter Full Name">
                    <label for="floatingInput">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingMessage" placeholder="Password">
                    <label for="floatingMessage">Message</label>
                </div>
                <button type="button" class="mt-4 btn btn-success btn-lg">Submit</button>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>



@endsection
