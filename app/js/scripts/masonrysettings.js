// $('.grid').masonry({
//   // options
//   itemSelector: '.grid-item',
//   columnWidth: 200
// });

var $grid = $('.grid').imagesLoaded( function() {
  $grid.masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  }); 
});