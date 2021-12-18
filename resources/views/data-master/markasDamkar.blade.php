@extends('layout.main')
@section('title', 'Data Markas')
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
                        <th>Nama Markas</th>
                        <th>Wilayah</th>
                        <th>Alamat</th>
                        <th>Jumlah Armada</th>
                        <th>Jumlah Personil</th>
                        <th>Lat</th>
                        <th>Long</th>
                        <th>Foto</th>
                    </thead>
                    <tbody>
                        @foreach ($dataMarkasDamkar as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->wilayah }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->jumlah_armada }}</td>
                                <td>{{ $data->jumlah_personil }}</td>
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
