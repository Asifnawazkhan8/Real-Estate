/*=====================
     range slider js
     ==========================*/
     
     $( function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 10000000,
          values: [ 1500000,7500000  ],
          slide: function( event, ui ) {
            $( "#amount" ).val( " AED " + ui.values[ 0 ] + " -  AED" + ui.values[ 1 ] );
          }
        });
        $( "#amount" ).val( "AED" + $( "#slider-range" ).slider( "values", 0 ) +
          " -  AED" + $( "#slider-range" ).slider( "values", 1 ) );
      } );

      $( function() {
        $( "#slider-range1" ).slider({
          range: true,
          min: 0,
          max: 10000,
          values: [ 1500, 8500 ],
          slide: function( event, ui ) {
            $( "#amount1" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] + " sq ft"  );
          }
        });
        $( "#amount1" ).val( $( "#slider-range1" ).slider( "values", 0 ) +
          " - " + $( "#slider-range1" ).slider( "values", 1 ) + " sq ft" );
      } );