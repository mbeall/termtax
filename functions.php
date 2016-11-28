<?php
function get_taxes() {
  global $ttdb;
  $results = $ttdb->select( 'taxes', '*' );
  return $results;
}

