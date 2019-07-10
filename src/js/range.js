$( function() {
    $( ".js_slider-range" ).slider({
      range: true,
      min: 0,
      max: 20000,
      values: [ 500, 12000 ],
      slide: function( event, ui ) {
        $( "input[name='minPrice']" ).val(ui.values[ 0 ]);
        $("input[name='maxPrice']").val(ui.values[ 1 ]);
      }
    });
    $( "input[name='minPrice']" ).val($( ".js_slider-range" ).slider( "values", 0 ));
    $( "input[name='maxPrice']" ).val($(".js_slider-range" ).slider( "values", 1 ));
  } );