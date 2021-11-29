
    // homebage
    $(".phase1.circle")
    .circleProgress({
      value: document.getElementById('phase1')? document.getElementById('phase1').getAttribute("data-prog") : 0,
      thickness: 10,
      fill: "#1CD894",
      size:90,
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("div")
        .html();
    });
    $(".phase2.circle")
    .circleProgress({
      value: document.getElementById('phase2')?document.getElementById('phase2').getAttribute("data-prog"):0,
      thickness: 10,
      fill: "#FFCE21",
      size:90
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("div")
        .html();
    });
    $(".phase3.circle")
    .circleProgress({
      value:  document.getElementById('phase3')?document.getElementById('phase3').getAttribute("data-prog"):0,
      thickness: 10,
      fill: "#1CD894",
      size:90
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("div")
        .html();
    });
    $(".phase4.circle")
    .circleProgress({
      value:  document.getElementById('phase4')?document.getElementById('phase4').getAttribute("data-prog"):0,
      thickness: 10,
      fill: "#1CD894",
      size:90
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("div")
        .html();
    });
    $(".phase5.circle")
    .circleProgress({
      value:  document.getElementById('phase5') ? document.getElementById('phase5').getAttribute("data-prog"):0,
      thickness: 10,
      fill: "#1CD894",
      size:90
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("div")
        .html();
    });
  
    
  
  
  // datepicker
  $('.datepicker').datepicker({
    format: 'yy-mm-dd',
    // startDate: '-3d'
  });
  
  
    $('.carousel').slick({
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 2000,
      dots:true,
      centerMode: true,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          centerMode: true,
  
        }
  
      }, {
        breakpoint: 1000,
        settings: {
          slidesToShow:2,
          slidesToScroll: 3,
          dots: true,
          infinite: false,
  
        }
      },  {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
        
      },
                  {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
        
      }]
    });
  
  
    // range
    $( document ).ready( function() {
      $( '.input-range').each(function(){
        var value = $(this).attr('data-slider-value');
        var separator = value.indexOf(',');
        if( separator !== -1 ){
          value = value.split(',');
          value.forEach(function(item, i, arr) {
            arr[ i ] = parseFloat( item );
          });
        } else {
          value = parseFloat( value );
        }
        $( this ).slider({
          formatter: function(value) {
            console.log(value);
            return '$' + value;
          },
          min: parseFloat( $( this ).attr('data-slider-min') ),
          max: parseFloat( $( this ).attr('data-slider-max') ), 
          range: $( this ).attr('data-slider-range'),
          value: value,
          tooltip_split: $( this ).attr('data-slider-tooltip_split'),
          tooltip: $( this ).attr('data-slider-tooltip')
        });
      });
      
     } );
  
  
    //  select
    $('select').selectpicker();

  
  











