(function(){
  const 
    gridSelector = '.lct-gallery-image',
    grid = new Isotope('.lct-filterable', {
      itemSelector: gridSelector,
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer'
      }
    }),
    buttonGroup = document.querySelector('.lct-filters'),
    filterButtons = document.querySelectorAll('.lct-filter-button');

    let pswpSelector = gridSelector,
        pswpLinks = [];

    function initIsotope() {

      buttonGroup.addEventListener('click', e => {
        const target = e.target,
              filterSelector = target.getAttribute('data-filter'),
              currFilter = (filterSelector !== '*') ? filterSelector : '';
  
        if ( !matchesSelector( target, 'button' ) ) return;
  
        filterButtons.forEach(button => button.classList.remove('lct-active'));
  
        grid.arrange({filter: filterSelector});
        target.classList.add('lct-active');

        pswpSelector = `${gridSelector}${currFilter}`;
        pswpLinks = document.querySelectorAll(pswpSelector);

        console.log(pswpLinks);
  
      });
    }

    function PSWP() {

      const 
        pswpElement = document.querySelectorAll('.pswp')[0],
        galleryLinks = document.querySelectorAll(pswpSelector),
        pswpItems = [...galleryLinks].reduce((items, link) => {

          const sizes = {
            width: link.getAttribute('data-size-width'),
            height: link.getAttribute('data-size-height')
          }
          
          items.push({
            src: link.href,
            w: parseInt(sizes.width),
            h: parseInt(sizes.height)
          });
    
          return items;
    
        }, []);

      pswpLinks = document.querySelectorAll(pswpSelector);

      function initPSWP(items, currIndex){

        var options = {
          index: currIndex, // start at first clicked slide
          getThumbBoundsFn: function(index) {

            // find thumbnail element
            var thumbnail = pswpLinks[index];
          
            // get window scroll Y
            var pageYScroll = window.scrollY || document.documentElement.scrollTop; 
            // optionally get horizontal scroll
          
            // get position of element relative to viewport
            var rect = thumbnail.getBoundingClientRect(); 
          
            // w = width
            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
          
          }
        };

          // Initializes and opens PhotoSwipe
          var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

          gallery.init();

      }
        
      function onLinkClick(e){

        e.preventDefault();

        var linkNodeList = [...pswpLinks],
            currIndex = linkNodeList.indexOf(this);

            console.log(pswpLinks, currIndex);

        initPSWP(pswpItems, currIndex);
      }

      pswpLinks.forEach(function(link){
        link.addEventListener('click', onLinkClick );
      });					
    }

    initIsotope();
    PSWP();

})();