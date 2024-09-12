<?php

interface Wearable
{
    public function wear();
}

abstract class Clothing
{
    protected $size;
    protected $color;

    public function __construct($size, $color)
    {
        $this->size = $size;
        $this->color = $color;
    }

    abstract public function describe();
}

class Shirt extends Clothing implements Wearable
{
    private $sleeveLength;

    public function __construct($size, $color, $sleeveLength)
    {
        parent::__construct($size, $color);
        $this->sleeveLength = $sleeveLength;
    }

    public function describe()
    {
        return "Kemeja : Ukuran {$this->size}, Warna {$this->color}, Panjang Lengan {$this->sleeveLength}.";
    }

    public function wear()
    {
        return "Mengenakan Kemeja.";
    }
}

class Pants extends Clothing implements Wearable
{
    private $waistSize;

    public function __construct($size, $color, $waistSize)
    {
        parent::__construct($size, $color);
        $this->waistSize = $waistSize;
    }

    public function describe()
    {
        return "Celana: Ukuran {$this->size}, Warna {$this->color}, Ukuran Pinggang {$this->waistSize}.";
    }

    public function wear()
    {
        return "Mengenakan celana.";
    }
}

class Jacket extends Clothing implements Wearable
{
    private $type;

    public function __construct($size, $color, $type)
    {
        parent::__construct($size, $color);
        $this->type = $type;
    }

    public function describe()
    {
        return "Jaket: Ukuran {$this->size}, Warna {$this->color}, Tipe {$this->type}.";
    }

    public function wear() {
        return "Mengenakan Jaket.";
    }
}

function showClothingDescription(Clothing $clothing)
{
    echo $clothing->describe() . "\n";
}

function tryOnWearable(Wearable $wearable)
{
    echo $wearable->wear() . "\n";
}


$shirt = new Shirt("M", "Biru", "Panjang");
$pants = new Pants("32", "Hitam", "30");
$jacket = new Jacket("L", "Merah Maron", "Jaket Kulit");

showClothingDescription($shirt);
showClothingDescription($pants);
showClothingDescription($jacket);

tryOnWearable($shirt);
tryOnWearable($pants);
tryOnWearable($jacket);
?>
