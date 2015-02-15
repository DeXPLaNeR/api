<?php

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

use CamlicaKitapApi\KategoriListe;
use CamlicaKitapApi\Model\Istek\Kategori\ListeIstek;

// hash bilgisini buraya yazınız.
$hash = '';

$istek = new ListeIstek($hash);

try {

	$cevap = KategoriListe::get($istek);

	echo '<pre>';
	print_r($cevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
