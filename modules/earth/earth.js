if (location.protocol == 'file:') {
    alert('This demo does not work with the file protocol due to browser security restrictions.');
}

window.addEventListener("earthjsload", function() {

    var myearth;
    var sprites = [];
    /*
        var cities = [
            [59.939095, 30.315868], // спб
            [55.755814, 37.617635], // мск
            [43.115536, 131.885485], // вл
            [45.035470, 38.975313], // крас
            [54.314192, 48.403123], // уль
            [53.195873, 50.100193], // сам
            [56.852676, 53.206891] // иж
        ]
    */
    var cities = []
    var center = cities[0];

    var meta = document.querySelectorAll('#globeData meta')
    for (const [i, node] of Object.entries(meta)) {
        let item = node.dataset
        cities.push(item.geopos.split(' '))
    }

    var zoom = false;
    var zoomO = 1;
    var zoomI = 2.2; 

    myearth = new Earth('myearth', {
        location: { lat: 60.921841, lng: 76.632464 },
        //location: { lat: center[0], lng: center[1] },
        // mapImage: '/modules/earth/map.svg',
        zoom: zoomO,
        zoomMin: zoomO,
        zoomMax: zoomI,
        quality: (window.innerWidth <= 1024) ? 4 : 5,
        light: 'simple',
        mapLandColor: 'RGBA(0,156,255,0.07)',
        mapSeaColor: 'RGBA(0,0,0,0.2)',
        mapBorderColor: 'RGBA(0,156,255,0.9)',
        mapBorderWidth: 0.4,
        transparent: true,
        autoRotate: true,
        opacity: 0.5,
        autoRotateSpeed: 1.0,
        autoRotateDelay: 500,
        autoRotateStart: 2000,
        //mapStyles: '#RU {fill:RGBA(0,156,255,0.4)}'

    });


    myearth.addEventListener('click', function (ev) {
            if (zoom) {
                myearth.goTo(ev.location, { zoom: zoomO, duration: 400, easing: 'out-quad', complete: function () {
                    myearth.autoRotateSpeed = 1.0
                } });
            } else {
                myearth.goTo(ev.location, { zoom: zoomI, duration: 400, easing: 'out-quad', complete: function () {
                    myearth.autoRotateSpeed = 0
                } });
            }
            zoom = !zoom

    });

    let finder = document.querySelector('#mapFinder')
    finder.addEventListener('change', function (ev) {
        if (finder.value == 'finder') {
            return
        }
        let l = finder.value.split(' ')
        ev.location = { lat: l[0], lng: l[1] }
        if (zoom) {
            myearth.goTo(ev.location, { zoom: zoomO, duration: 400, easing: 'out-quad', complete: function () { 
                myearth.goTo(ev.location, { zoom: zoomI, duration: 400, easing: 'out-quad', complete: function () { } });
            } });
        } else {
            myearth.goTo(ev.location, { zoom: zoomI, duration: 400, easing: 'out-quad', complete: function () { } });
        }
        myearth.autoRotateSpeed = 0
        zoom = true
    })


    myearth.addEventListener("ready", function() {
        function lines(earth) {
            // connections
            var connections = [];
            let next;
            let curr;
            $.each(cities, function(i, val) {
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
                    duration: 320,
                    complete: function() {
                        this.animate('scale', 0.01, {
                            duration: 320,
                            complete: function() {
                                setTimeout(function() { pulse(index); }, getRandomInt(100, 400));
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
                    scale: 1,
                    offset: -0.1,
                    opacity: 0.1
                });
                pulse(i);
            }
        }

        function places(earth) {


            for (var i = 0; i < cities.length; i++) {

                var marker = earth.addMarker({
                    mesh: "Marker",
                    color: '#dc3545',
                    location: { lat: cities[i][0], lng: cities[i][1] },
                    visible: true,
                    hotspot: true,
                    hotspotRadius: 0.5,
                    hotspotHeight: 0.5,
                    scale: 0.15,
                    depthScale: 1,
                    index: i,
                    data: meta[i].dataset
                });

                marker.addEventListener('click', openLink);

            }
        }

        function openLink() {
            console.log(this.data);
            /*
            $('#globeReg .modal-title img').attr('src', '/thumbc/80x80/src' + this.data.img)
            $('#globeReg .modal-body .region').text(this.data.reg)
            $('#globeReg .modal-body .name').text(this.data.name)
            $('#globeReg .modal-body .email').text(this.data.email)
            $('#globeReg').modal('show')
            */
            document.location.href = this.data.link
        }

        places(this);

    });


});