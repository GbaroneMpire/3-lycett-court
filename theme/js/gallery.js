(function(){
  const 
    grid = new Isotope('.lct-filterable', {
      itemSelector: '.lct-gallery-image',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer',
        gutter: 20
      }
    }),
    buttonGroup = document.querySelector('.lct-filters'),
    filterButtons = document.querySelectorAll('.lct-filter-button');

    buttonGroup.addEventListener('click', e => {
      const target = e.target,
            buttonData = target.getAttribute('data-filter');

      if ( !matchesSelector( target, 'button' ) ) return;

      filterButtons.forEach(button => button.classList.remove('lct-active'));

      grid.arrange({filter: buttonData});
      target.classList.add('lct-active');

    });

})();