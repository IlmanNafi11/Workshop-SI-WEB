<?php

class Lingkaran implements hitungLuas
{
    private $jariJari;

    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    public function hitungLuasPersegi()
    {
        return null;
    }

    public function hitungLuasSegitiga()
    {
        return null;
    }

    public function hitungLuasLingkaran()
    {
        return pi() * $this->jariJari * $this->jariJari;
    }
}