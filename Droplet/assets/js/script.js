$(document).ready(function () {
    var _mwi = 991;//width mobile menu enable
    function toggleDropdown (e) {
      //min width window 991px - hover menu show 
      if(window.innerWidth > _mwi) {
          var _d = $(e.target);
          setTimeout(function () {
            var shouldOpen = e.type !== 'click' && _d.is(':hover');
            _d.parents('.nav-item.dropdown').find('.dropdown-menu').toggleClass('show', shouldOpen);
            _d.parents('.nav-item.dropdown').toggleClass('show', shouldOpen);
            $(e.target).attr('aria-expanded', shouldOpen);
          }, e.type === 'mouseleave' ? 250 : 0);
       }
    }
    
    $(document)
        .on('mouseenter','.nav-item.dropdown',toggleDropdown)
        .on('mouseleave','.nav-item.dropdown.show',toggleDropdown);
});

$( '#nav .navbar-nav a' ).on('click', function () {
	$( '#nav .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});

