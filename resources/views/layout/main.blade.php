<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .fa-table {
            padding-right: 8px;
        }

    </style>
</head>

<body class="antialiased">
    <div class="container-flex">
        <aside class="container-sidebar" aria-expanded="true">
            <div class="container sidebar">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="title text-center">

                            <h5 class="sidebar-title">Proyek Akhir</h5>
                        </div>
                        <ul class="mt-5">
                            <li class="mb-2 sidebar-label">
                                <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
                            </li>

                            <li>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                <i class="fa fa-table" aria-hidden="true"></i>
                                                Data Master
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li class="mb-2"><a href="/data/ambulance"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data
                                                            Ambulans</a>
                                                    </li>
                                                    <li class="mb-2"><a href="/data/damkar"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data
                                                            Mobil Pemadam Kebakaran</a>
                                                    </li>
                                                    <li class="mb-2"><a href="/data/rumahsakit"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data
                                                            Rumah sakit</a>
                                                    </li>
                                                    <li class="mb-2"><a href="/data/ambulance"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data
                                                            Dinas Pemadam Kebakaran</a>
                                                    </li>
                                                    <li class="mb-2"><a href="/data/ambulance"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data
                                                            Lalu Lintas</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="mr-2 sidebar-label">
                                <a href="/setting"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <main class="container-main">
            @yield('isi')
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

</html>
