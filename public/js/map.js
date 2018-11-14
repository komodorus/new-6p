var map;
var service;
var infowindow;

function initMap() {

    // var mapCenter = new google.maps.LatLng(-21.200448,-47.807780); //- offset direita
    var mapCenter = new google.maps.LatLng(-21.200603, -47.809192); //- 6p

    map = new google.maps.Map(document.getElementById('map-contato'), {
        center: mapCenter,
        zoom: 19,
        disableDefaultUI: true
    });

    infowindow = new google.maps.InfoWindow({
        maxWidth: 300
    });

    var request = {
        placeId: 'ChIJ51GvuNC-uZQR8Uo_WO7Xujg',
        fields: ['formatted_address', 'address_component', 'name', 'opening_hours', 'geometry', 'formatted_phone_number'],
    };

    service = new google.maps.places.PlacesService(map);
    service.getDetails(request, callback);

}

function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        createMarker(results)
    }
}

function createMarker(place) {
    var placeLoc = place.geometry.location;

    var image = '../img/marker.png';

    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location,
        animation: google.maps.Animation.DROP,
        icon: image
    });

    var aberto_fechado;

    if (place.opening_hours.open_now) {
        aberto_fechado = '<p class="m-0 font-weight-bold text-success">Estamos abertos!</p>';
    } else {
        aberto_fechado = '<p class="m-0 font-weight-bold text-danger">Estamos fechados!</p>';
    }

    infowindow.setContent(
        '<div class="container-fluid">' +
            '<div class="row mt-3">' +
            '<div class="col">' +
            '<span class="title text-uppercase text-secondary font-weight-normal h5 line-height-short">' +
            '<span class="d-inline font-weight-bold" style="color:rgb(108, 205, 222);">/</span>' + place.name +
            '</span>' +
            '<p class="mb-2 mt-2"><span class="font-weight-bold">Endereço: </span>' +
            '<a href="https://goo.gl/maps/bNDP1yS5ALK2" target="_blank">' +
            place.formatted_address +
            '</a>' +
            '</p>' +
            '<p><span class="font-weight-bold">Telefone: </span>' +
            '<a href="tel:+55' + place.formatted_phone_number + '">' +
            place.formatted_phone_number +
            '</a>' +
            '</p>' +
            '</div>' +
            '</div>' +
            '<div class="row mt-3">' +
            '<div class="col text-center">' +
            aberto_fechado +
            '</div>' +
            '</div>' +
        '</div>'
    );

    infowindow.open(map, marker);

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.setContent(
            '<div class="container-fluid">' +
            '<div class="row mt-3">' +
            '<div class="col">' +
            '<span class="title text-uppercase text-secondary font-weight-normal h5 line-height-short">' +
            '<span class="d-inline font-weight-bold" style="color:rgb(108, 205, 222);">/</span>' + place.name +
            '</span>' +
            '<p class="mb-2 mt-2"><span class="font-weight-bold">Endereço: </span>' +
            place.formatted_address +
            '</p>' +
            '<p><span class="font-weight-bold">Telefone: </span>' +
            '<a href="tel:+55' + place.formatted_phone_number + '">' +
            place.formatted_phone_number +
            '</a>' +
            '</p>' +
            '</div>' +
            '</div>' +
            '<div class="row mt-3">' +
            '<div class="col text-center">' +
            aberto_fechado +
            '</div>' +
            '</div>' +
            '</div>'
        );
        infowindow.open(map, marker);
    });
}
