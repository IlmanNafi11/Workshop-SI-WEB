<?php

class Persegi implements hitungLuas
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuasPersegi()
    {
        return $this->sisi * $this->sisi;
    }

    public function hitungLuasSegitiga()
    {
        return null;
    }

    public function hitungLuasLingkaran()
    {
        return null;
    }
}