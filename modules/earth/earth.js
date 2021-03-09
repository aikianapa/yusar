if (location.protocol == 'file:') {
    alert('This demo does not work with the file protocol due to browser security restrictions.');
}



window.addEventListener("earthjsload", function () {

    var myearth;
    var sprites = [];

    var cities = [
        [59.939095, 30.315868], // спб
        [55.755814, 37.617635], // мск
        [43.115536, 131.885485], // вл
        [45.035470, 38.975313], // крас
        [54.314192, 48.403123], // уль
        [53.195873, 50.100193], // сам
        [56.852676, 53.206891] // иж
    ]

    var center = cities[0];

    myearth = new Earth('myearth', {

        location: { lat: center[0], lng: center[1] },

        light: 'none',

        mapImage: '/modules/earth/hologram-map.svg',
        transparent: false,

        autoRotate: false,
        autoRotateSpeed: 1.2,
        autoRotateDelay: 100,
        autoRotateStart: 2000,

    });


    myearth.addEventListener("ready", function () {


        function lines(earth) {
            // connections
            var connections = [];
            let next;
            let curr;
            $.each(cities, function (i, val) {
                curr = val;
                if (cities[i + 1] !== undefined) {
                    next = cities[i + 1];
                } else {
                    next = cities[0];
                }
                eval('connections.push([' + curr[0] + ', ' + curr[1] + ', ' + next[0] + ', ' + next[1] + '])');
            });
            eval('connections.push([' + next[0] + ', ' + next[1] + ', ' + curr[0] + ', ' + curr[1] + '])');

            function getRandomInt(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min)) + min;
            }


            function pulse(index) {
                var random_location = connections[getRandomInt(0, connections.length - 1)];
                sprites[index].location = { lat: random_location[0], lng: random_location[1] };

                sprites[index].animate('scale', 0.5, {
                    duration: 320, complete: function () {
                        this.animate('scale', 0.01, {
                            duration: 320, complete: function () {
                                setTimeout(function () { pulse(index); }, getRandomInt(100, 400));
                            }
                        });
                    }
                });
            }

            var line = {
                color: '#009CFF',
                opacity: 0.35,
                hairline: true,
                offset: -0.5
            };

            for (var i in connections) {
                line.locations = [{ lat: connections[i][0], lng: connections[i][1] }, { lat: connections[i][2], lng: connections[i][3] }];
                earth.addLine(line);
            }

            for (var i = 0; i < 8; i++) {
                sprites[i] = earth.addSprite({
                    image: '/modules/earth/hologram-shine.svg',
                    scale: 0.01,
                    offset: -0.5,
                    opacity: 0.5
                });
                pulse(i);
            }
        }

        function places(earth) {
            
            
            for (var i = 0; i < cities.length; i++) {

                var marker = earth.addMarker({

                    mesh: "Marker",
                    color: '#009CFF',
                    location: {lat: cities[i][0], lng: cities[i][1]},
                    scale: 0.01,
                    offset: 1.6,
                    visible: false,
                    transparent: true,
                    hotspot: true,
                    hotspotRadius: 0.5,
                    hotspotHeight: 0.5,
                    link: 'https://idees.ru'
                    // custom property
                    //photo_info: photos[i]

                });

                marker.addEventListener('click', openLink);

                // animate marker
                setTimeout((function () {
                    this.visible = true;
                    this.animate('scale', 0.3, { duration: 140 });
                    this.animate('offset', 0, { duration: 1100, easing: 'bounce' });
                }).bind(marker), 280 * i);

            }
        }

        function openLink() {
            window.open(this.link);
        }

        places(this);

    });


});




