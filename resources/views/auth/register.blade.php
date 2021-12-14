@extends('layout.auth')
@section('title', 'Register')
@section('isiauth')
    <div class="container">
        <div class="row" style="">
            <div class="card form" style="
                                        width: 30%;
                                        margin: 0 auto;
                                        margin-top: 100px;
                                        background: #FFFFFF;
                                        border-radius: 15px;
                                        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.25);
                                        ">
                <form class="p-3" style="">
                    <div class="text-center mb-3">
                        <h5><strong>Register</strong></h5>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="email" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="confirmation" class="form-label">Confirmation Password</label>
                        <input type="password" class="form-control" id="confirmation">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5" style="background: linear-gradient(270.62deg, #1289FF -25.07%, #A0B304 103.72%);
                                                border-radius: 20px; border: none; margin: 0 auto;">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
