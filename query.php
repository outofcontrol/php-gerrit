#!/usr/bin/php
<?php
declare( strict_types = 1 );
require "vendor/autoload.php";
use Hexmode\PhpGerrit\GerritRestAPI;

$rest = new GerritRestAPI( 'https://gerrit.wikimedia.org/r' );
$changes = $rest->get( "/changes/?q=owner:self" );
foreach ( $changes as $change ) {
	var_dump($change);
}
