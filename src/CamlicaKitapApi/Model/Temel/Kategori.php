<?php namespace CamlicaKitapApi\Model\Temel;

class Kategori
{
	public $id;
	public $adi;
	public $radi;
	public $kitap_sayisi;

	/**
	 * @var Kategori[]
	 */
	public $alt_kategoriler = [];
}