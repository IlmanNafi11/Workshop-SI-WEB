<?php

class Segitiga implements hitungLuas
{
    private $sisi;
    private $tinggi;

    public function __construct($sisi, $tinggi) {
        $this->sisi = $sisi;
        $this->tinggi = $tinggi;
    }

    public function hitungLuasPersegi()
    {
        return null;
    }

    public function hitungLuasSegitiga()
    {
        return 0.5 * $this->sisi * $this->tinggi;
    }

    public function hitungLuasLingkaran()
    {
        return null;
    }
}