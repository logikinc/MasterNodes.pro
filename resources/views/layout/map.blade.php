<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARlZhGFPC7Wy9s7ywjNZII7JbqiPfGH-E&callback=initMap"
        async defer></script>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(15, 10),
            zoom: 1,
            minZoom: 1,
            disableDefaultUI: true,
            maxWidth: 500,
            styles: [{"featureType": "all", "elementType": "labels.text.fill", "stylers": [{"color": "#ffffff"}, {"weight": "0.20"}, {"lightness": "28"}, {"saturation": "23"}, {"visibility": "off"}]}, {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [{"color": "#494949"}, {"lightness": 13}, {"visibility": "off"}]
            }, {"featureType": "all", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#000000"}]}, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#144b53"}, {"lightness": 14}, {"weight": 1.4}]
            }, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#08304b"}]}, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#0c4152"}, {"lightness": 5}]}, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#000000"}]
            }, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#0b434f"}, {"lightness": 25}]}, {"featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{"color": "#000000"}]}, {
                "featureType": "road.arterial",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#0b3d51"}, {"lightness": 16}]
            }, {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#000000"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"color": "#146474"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#021019"}]}]
        });
        setMarkers(map);
    }

    var beaches = [
            @foreach($mnl as $key => $value)
        ['{{$value['addr']}}',{!! $value['ipData']['latitude'] !!},{!! $value['ipData']['longitude'] !!}, @if($value['status'] == "NEW") {!! $key+200 !!} @elseif($value['status'] == "active") {!! $key+100 !!} @else {!! $key !!} @endif, '{{$value['status']}}'],
        @endforeach
    ];

    function setMarkers(map) {
        var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
        };
        var ACTIVE = {
            url: '/img/masternodepinactive.png',
            scaledSize: new google.maps.Size(30, 40)
        };
        var NEW = {
            url: '/img/masternodepinnew.png',
            scaledSize: new google.maps.Size(30, 40)
        };
        var OFFLINE = {
            url: '/img/masternodepinoffline.png',
            scaledSize: new google.maps.Size(30, 40)
        };
        for (var i = 0; i < beaches.length; i++) {
            var beach = beaches[i];
            if (beach[4] == "ACTIVE") {
                var marker = new google.maps.Marker({
                    position: {lat: beach[1], lng: beach[2]},
                    map: map,
                    icon: ACTIVE,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
            if (beach[4] == "NEW") {
                var marker = new google.maps.Marker({
                    position: {lat: beach[1], lng: beach[2]},
                    map: map,
                    icon: NEW,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
            if (beach[4] == "OFFLINE") {
                var marker = new google.maps.Marker({
                    position: {lat: beach[1], lng: beach[2]},
                    map: map,
                    icon: OFFLINE,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    var key = i;
                    clickMe(beaches[key][0]);
                }
            })(marker, i));
        }
    }
    function clickMe(key) {
        $('#mainModal').load('{!! route('nodedetails') !!}/?addr=' + key);
        $('#mainModal').modal('show')
    }
</script>