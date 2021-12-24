<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
        integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>
    {{-- <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.js'></script> --}}

    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style type="text/css">
        .fa-table {
            padding-right: 8px;
        }
        #map {
            width: 100%;
            height: 100%;
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
                            <li class="mb-2 sidebar-label"><a href="/"><i class="fa fa-home" aria-hidden="true"></i>
                                    Dashboard</a></li>
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
                                                    <li class="mb-2"><a href="/data/ambulan"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data
                                                            Ambulans</a>
                                                    </li>
                                                    <li class="mb-2"><a href="/data/damkar"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data Mobil
                                                            Pemadam Kebakaran</a></li>
                                                    <li class="mb-2"><a href="/data/rumah-sakit"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data Rumah
                                                            Sakit</a></li>
                                                    <li class="mb-2"><a href="/data/markas-damkar"><i
                                                                class="fa fa-table" aria-hidden="true"></i>Data Dinas
                                                            Kebakaran</a></li>
                                                    <li class="mb-2"><a><i class="fa fa-table"
                                                                aria-hidden="true"></i>Data Lalu
                                                            Lintas</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mr-2 sidebar-label"><i class="fa fa-cogs" aria-hidden="true"></i> Setting
                            </li>
                            <li class="mr-2 sidebar-label">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"><i class="fa fa-cogs" aria-hidden="true"></i>
                                        Logout
                                    </button>
                                </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
@stack('scripts')

</html>