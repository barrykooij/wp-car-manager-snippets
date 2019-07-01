<?php

/**
 * Add new currency to WPCM plugin
 */   
add_filter( 'wpcm_currencies', function( $currencies ) {
	$currencies[ 'KM' ] = 'Konvertabilna Marka';
	return $currencies;
}, 10, 1 );

add_filter( 'wpcm_currency_symbol', 'my_custom_symbol', 10, 2);
function my_custom_symbol( $currency_symbol, $currency ) {
	if( $currency == 'KM') {
		$currency_symbol = 'KM';
	}
	return $currency_symbol;
}

?>
