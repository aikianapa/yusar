$(document).on("gmap-js", function () {


  function initMap() {
    map = new google.maps.Map(document.getElementById("gmap"), {
      center: { lat: -34.397, lng: 150.644 },
      zoom: 0,
      mapTypeId: 'terrain'
    });
    
  }

  $(document).find('.mod-gmap:not(.done)').each(function(){
      $(this).addClass('done');
      let gid = $(this).find('.gmap').attr('id');
      if (gid == undefined || gid == '') {
          gid = wbapp.newId('mg-');
          $(this).find('.gmap').attr('id',gid);
      }
      console.log(gid);
  });



  initMap()

});

