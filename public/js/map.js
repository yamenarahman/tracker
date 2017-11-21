var app = new Vue({
    el: '#app',
    data: {
        // address: '',
    },
    methods: {
        initMap() {
            var map = new google.maps.Map(document.querySelector('#map'), {
                center: { lat: 35, lng: -85 },
                zoom: 10
            });
        }
    }
});