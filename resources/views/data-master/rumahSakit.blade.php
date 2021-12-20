@extends('layout.main')
@section('title', 'Data Damkar')
@section('isi')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title mt-4 mb-3">
                    <h5>@yield('title')</h5>
                </div>
                <table class="table mt-5">
                    <thead class="table-dark">
                        <th>ID</th>
                        <th>Nama Rumah Sakit</th>
                        <th>Wilayah</th>
                        <th>Alamat</th>
                        <th>Jumlah Kamar</th>
                        <th>Jumlah Kamar Kosong</th>
                        <th>Jumlah Ambulan</th>
                        <th>Lat</th>
                        <th>Long</th>
                        <th>Foto</th>
                    </thead>
                    <tbody>
                        @foreach ($dataRumahSakit as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->wilayah }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->jumlah_kamar }}</td>
                                <td>{{ $data->kamar_kosong }}</td>
                                <td>{{ $data->jumlah_ambulan }}</td>
                                <td>{{ $data->lat }}</td>
                                <td>{{ $data->long }}</td>
                                <td>{{ $data->foto }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection