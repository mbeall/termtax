$( '.form-control' ).each( function() {
  _term = this.value();
  _char = this.data('char');
  if ( _term[0].toUpperCase() == _char ) {
    this.parent().addClass( 'has-success' );
  } else {
    this.parent().addClass( 'has-error' );
  }
});

