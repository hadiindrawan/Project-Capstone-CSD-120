@extends('layout.auth')
@section('title', 'Login')
@section('isiauth')
    <div class="container">
        <div class="row" style="">
            <div class="card" style="
                                width: 30%;
                                margin: 0 auto;
                                margin-top: 100px;
                                background: #FFFFFF;
                                border-radius: 15px;
                                box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.25);
                                ">
                @if ($errors->any())
                    <div id="error-box">
                        {{ $errors }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class=" p-3" style="">
                    @csrf
                    <div class="text-center mb-3">
                        <h5><strong>Login</strong></h5>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5"
                            style="background: linear-gradient(270.62deg, #1289FF -25.07%, #A0B304 103.72%);
                                                                        border-radius: 20px; border: none; margin: 0 auto;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
