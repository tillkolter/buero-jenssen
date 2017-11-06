var openPhotoSwipe = function(element) {
  let galleryParent = element;

  // create items list from hidden child nodes
  let items = []
  for (var i = 0; i < element.childNodes.length; i++) {
    let child = element.childNodes[i]
    if (child.className === 'hidden') {
      var img = new Image();
      img.src = child.src;
      items.push({
        src: child.src,
        w: img.width,
        h: img.height
      })
    }
  }
  var pswpElement = document.querySelectorAll('.pswp')[0];

  // define options (if needed)
  var options = {
    index: 0, // start at first slide
    getThumbBoundsFn: function (index) {
        // get window scroll Y
      var pageYScroll = window.pageYOffset || document.documentElement.scrollTop;
      // optionally get horizontal scroll

      // get position of element relative to viewport
      var rect = element.getBoundingClientRect();

      // w = width
      return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
    },
    showHideOpacity: true,
    bgOpacity: .7,
    closeEl:true,
    captionEl: true,
    fullscreenEl: true,
    zoomEl: true,
    shareEl: true,
    counterEl: true,
    arrowEl: true,
    preloaderEl: true
  };

  let bgElement = document.getElementById('pswp__bg')
  let sheet = document.createElement('style')

  let elementStyle = window.getComputedStyle(element)
  bgElement.style.backgroundColor = elementStyle.backgroundColor

  var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
  gallery.init();
};

var onOpenGallery = function (element) {
  openPhotoSwipe(element)
}
