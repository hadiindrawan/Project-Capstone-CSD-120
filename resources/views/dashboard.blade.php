@extends('layout.main')
@section('title', 'Dashboard')
@section('isi')
    <div id="map"></div>
@endsection
@push('scripts')
    <script>
        let RSicon = L.icon({
            iconUrl: '/img/icon/Rs.png',

            iconSize: [30, 30], // size of the icon
            iconAnchor: [22, 22], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        let Ambuicon = L.icon({
            iconUrl: '/img/icon/ambu.png',

            iconSize: [30, 30], // size of the icon
            iconAnchor: [22, 22], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        let mobilPKicon = L.icon({
            iconUrl: '/img/icon/mobilPK.png',

            iconSize: [30, 26], // size of the icon
            iconAnchor: [22, 22], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        let markasicon = L.icon({
            iconUrl: '/img/icon/markas.png',

            iconSize: [30, 30], // size of the icon
            iconAnchor: [22, 22], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        let map = L.map("map").setView([-6.917464, 107.619125], 12);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let markers = L.markerClusterGroup();
        axios.get('{{ route('getDataRS') }}')
            .then(function(response) {
                for (let i = 0; i < response.data.data.length; i++) {
                    let marker = L.marker([response.data.data[i].lat, response.data.data[i].long], {
                        icon: RSicon
                    }).addTo(map);
                };
            })
            .catch(function(error) {
                console.log(error);
            });
        axios.get('{{ route('getDataMarkas') }}')
            .then(function(response) {
                for (let i = 0; i < response.data.data.length; i++) {
                    let marker = L.marker([response.data.data[i].lat, response.data.data[i].long], {
                        icon: markasicon
                    }).addTo(map);
                };
            })
            .catch(function(error) {
                console.log(error);
            });
        axios.get('{{ route('getDataAmbu') }}')
            .then(function(response) {
                for (let i = 0; i < response.data.data.length; i++) {
                    let marker = L.marker([response.data.data[i].lat, response.data.data[i].lng], {
                        icon: Ambuicon
                    }).addTo(map);
                };
            })
            .catch(function(error) {
                console.log(error);
            });
        axios.get('{{ route('getDataMobilPK') }}')
            .then(function(response) {
                for (let i = 0; i < response.data.data.length; i++) {
                    let marker = L.marker([response.data.data[i].lat, response.data.data[i].lng], {
                        icon: mobilPKicon
                    }).addTo(map);
                };
            })
            .catch(function(error) {
                console.log(error);
            });
        map.addLayer(markers);
    </script>

@endpush
