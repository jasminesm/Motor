<?php 

interface Item{
    public function add(?array $array);
    public function show();
}

class Motor{
    public $merek;
    public $platNomor;
    public $warna;
    public $tipe;

    public function __construct($merek, $platNomor, $warna, $tipe)
    {
        $this->merek = $merek;
        $this->platNomor = $platNomor;
        $this->warna = $warna;
        $this->tipe = $tipe;
    }
}


class KoleksiMotor implements Item{
    protected $koleksiku;

    public function __construct()
    {
        $this->koleksiku =  [
            new Motor('Yamaha', 'L6303LF', 'Merah', 'Soul GT'), 
            new Motor('Honda', 'L3788FO', 'Merah', 'Scoopy'), 
            new Motor('Honda', 'L1529BI', 'Putih', 'PCX'), 
        ];
    }

    public function add(?array $item)
    {
        for ($i=0; $i < count($item); $i++) { 
            array_push($this->koleksiku, $item[$i]);
        }
    }

    public function show()
    {
        foreach ($this->koleksiku as $coll) {
            echo '<br>';
            echo 'Merek : ';
            echo $coll->merek;
            echo ', ';
            echo 'Plat Nomor : ';
            echo $coll->platNomor;
            echo ', ';
            echo 'Warna : ';
            echo $coll->warna;
            echo 'Tipe : ';
            echo $coll->tipe;
        }
    }

}

$koleksi = new KoleksiMotor();
$arr = array();
array_push($arr, new Motor('Suzuki', 'L4101FL', 'Biru', 'Satria'));
array_push($arr, new Motor('Yamaha', 'L4102FL', 'Hitam', 'NMAX'));
array_push($arr, new Motor('Honda', 'L4103FL', 'Hitam', 'Vario'));
array_push($arr, new Motor('Honda', 'L4104FL', 'Pink', 'Beat'));
$koleksi->add($arr);
$koleksi->show();