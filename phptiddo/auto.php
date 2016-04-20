<?php
    
    class Auto {

    private $merk;
    private $type;
	private $prijs;
    private $fotourl;

	public function __construct($merk, $type, $prijs, $fotourl) {
		$this->merk = $merk;
		$this->type = $type;
		$this->prijs = $prijs;
		$this->fotourl = $fotourl;
	}

	public function getMerk() {
		return $this->merk;
	}

	public function getType() {
		return $this->type;
	}

	public function getPrijs() {

		return $this->prijs;
	}

	public function getFoto() {
		return $this->fotourl;
	}
}