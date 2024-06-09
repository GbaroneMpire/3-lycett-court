(function(){
  const 
    grid = new Isotope('.lct-filterable', {
      itemSelector: '.lct-gallery-image'
    }),
    buttonGroup = document.querySelector('.lct-filters'),
    filterButtons = document.querySelectorAll('.lct-filter-button');

    buttonGroup.addEventListener('click', e => {
      const target = e.target,
            buttonData = target.getAttribute('data-filter');

      filterButtons.classList.remove('lct-active');

      if ( !matchesSelector( target, 'button' ) ) return;

      grid.arrange({filter: buttonData});
      target.classList.add('lct-active');

    });

})();