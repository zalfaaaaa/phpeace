<?php 
    class asetkantor {
        public $komputer = "apple iMac 27 inc";
        public $dokumen = "data album";
        public $alat = "komputer";

    public function __construct(){
        echo "| Aset Kami<br/> alat : $this->alat<br/> merk :  $this->komputer<br/> dokumen : $this->dokumen";
    }
}
$k = new asetkantor;