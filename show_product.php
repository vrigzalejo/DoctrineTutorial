<?php
// show_product.php <id>
require_once "bootstrap.php";

$id = $argv[ 1 ];
if( empty( $id ) ) {
    echo "Please specify the id.\n";
    exit( 1 );
}

$product = $entityManager->find( 'Product', $id );

if( is_null( $product ) ) {
    echo "No product found.\n";
    exit( 1 );
}

echo sprintf( "-%s\n", $product->getName() );