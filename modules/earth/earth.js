window.addEventListener("earthjsload", function() {

    var myearth;
    var cities = []

    var zoom = false;
    var zoomO = 1;
    var zoomI = 2.2;
    var duration = 1000;

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
                myearth.goTo(ev.location, { zoom: zoomO, duration: duration, easing: 'out-quad', complete: function () {
                    myearth.autoRotateSpeed = 1.0
                } });
            } else {
                myearth.goTo(ev.location, { zoom: zoomI, duration: duration, easing: 'out-quad', complete: function () {
                    myearth.autoRotateSpeed = 0
                } });
            }
            zoom = !zoom

    });
/*
    let finder = document.querySelector('#mapFinder')
    finder.addEventListener('change', function (ev) {
        if (finder.value == 'finder') {
            return
        }

    })
*/

    myearth.addEventListener("ready", function() {
        var tooltip = this.addOverlay({
            className: 'tooltip',
            visible: false,
            containerScale: 0.2,
            zoomScale: 0,
            depthScale: 0.4
        });
        function places(earth) {
            $.get("/api/v2/list/map?active=on&@sort=name&@return=country,name,yamap",function(cities){
                mapFinder(cities)
                cities.forEach(place => {
                    let pos = place.yamap[0].geopos.split(' ')
                    let marker = earth.addMarker({
                        mesh: "Marker",
                        color: '#dc3545',
                        location: { lat: pos[0], lng: pos[1] },
                        visible: true,
                        hotspot: true,
                        hotspotRadius: 0.5,
                        hotspotHeight: 0.5,
                        scale: 0.05,
                        depthScale: 0.5,
                        data: place
                    })
                    marker.addEventListener('click', openLink);
                    marker.addEventListener('mouseover', enterMarker);
                    marker.addEventListener('mouseout', leaveMarker);
                });
            })

        }

        function mapFinder(cities) {
            var list = new Ractive({
                el: '#mapFinder',
                template: $('#mapFinder').html(),
                data: {
                    cities: cities,
                    country: {}
                },
                on: {
                    complete() {
                        $.get("/api/v2/list/map?active=on&country!=Россия&@sort=name&@group=country&@return=name,yamap,country",function(outside){
                            
                            outside = Object.values(outside)
                            let country = {}
                            outside.forEach(item => {
                                item.forEach(city=>{
                                    country[city.country] == undefined ? country[city.country] = { 'cities': [] } : null
                                    country[city.country].cities.push({name: city.name, yamap: city.yamap})
                                })    
                            });
                            console.log(country);
                            list.set('country', country)
                        })
                    },
                    link(ev) {
                        let location = $(ev.node).attr('data-pos').split(' ')
                        location = { lat: location[0], lng: location[1] }
                        if (zoom) {
                            myearth.goTo(location, {
                                zoom: zoomO, duration: duration, easing: 'out-quad', complete: function () {
                                    myearth.goTo(location, { zoom: zoomI, duration: duration, easing: 'out-quad', complete: function () { } });
                                }
                            });
                        } else {
                            myearth.goTo(location, { zoom: zoomI, duration: duration, easing: 'out-quad', complete: function () { } });
                        }
                        myearth.autoRotateSpeed = 0
                        zoom = true
                    }
                }
            })
        }

        function zoomOut() {
            collapseCluster();
            myearth.animate('zoom', 1.15, { relativeDuration: 100 });
        }


        function enterMarker(ev) {

            if (!zoom) return; // no tooltips during zoom
            tooltip.location = this.location;
            tooltip.content = this.data.name;
            tooltip.element.style.marginTop = '-' + String(this.scale * 0.5 + 0.75) + 'em';
            tooltip.visible = true;
            console.log(this);

        }

        function leaveMarker() {
            tooltip.visible = false;
        }

        function openLink(ev) {
            /*
            $('#globeReg .modal-title img').attr('src', '/thumbc/80x80/src' + this.data.img)
            $('#globeReg .modal-body .region').text(this.data.reg)
            $('#globeReg .modal-body .name').text(this.data.name)
            $('#globeReg .modal-body .email').text(this.data.email)
            $('#globeReg').modal('show')
            */
            let pos = this.data.yamap[0].geopos.split(' ') 
            if (zoom) {
                document.location.href = this.data.link
            } else {
                myearth.goTo({ lat: pos[0], lng: pos[1] }, {
                    zoom: zoomI, duration: duration, easing: 'out-quad', complete: function () {
                        myearth.autoRotateSpeed = 0
                        zoom = true
                    }
                });
            }

        }

        places(this);

    });


});