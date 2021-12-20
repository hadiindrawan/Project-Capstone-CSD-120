@extends('layout.main')
@section('title', 'Data Mobil Pemadam Kebakaran')
@section('isi')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title mt-4 mb-3">

                    <h5 class="table-title">@yield('title')</h5>
                </div>
                <table class="table mt-5">
                    <thead class="table-header">

                        <th>ID</th>
                        <th>Nomor Plat</th>
                        <th>Wilayah</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($dataDamkar as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->flat_nomor }}</td>
                                <td>{{ $data->wilayah }}</td>
                                <td>{{ $data->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

