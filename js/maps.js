// JavaScript Document

var mapboxAccessToken = 'pk.eyJ1IjoibWF0dHJvZ2VyczEyMyIsImEiOiJkLUp6bUNvIn0.DID3M4h2suPqCMfOOY6YqQ';
var map = L.map('map-one').setView([-25.480669,121.711535], 5);

L.tileLayer('https://api.mapbox.com/styles/v1/mattrogers123/cind87g2o0039g8kps6o0udpw/tiles/256/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {

}).addTo(map);
