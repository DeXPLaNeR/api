<?php namespace CamlicaKitapApi\Model\Istek\Kategori;

use CamlicaKitapApi\Model\Istek\Temel\GenelIstek;

class ListeIstek extends GenelIstek
{
	public function getArray()
	{
		return [
			'hash' => $this->hash
		];
	}
}