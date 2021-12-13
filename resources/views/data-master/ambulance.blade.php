@extends('layout.main')
@section('title', 'Data Ambulans')
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
                        <th>Nomor Plat</th>
                        <th>Wilayah</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($dataAmbulan as $data)
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
