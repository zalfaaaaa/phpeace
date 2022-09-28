<!-- bagaimana membuat -->
<!-- 1. constructor -->
<?php
    class kantor {
  
        public $bangunan = "gedung nct";
        public $dokumen = "resep rahasia krabby patty";
   
    public function __construct(){
        echo "ini kantor burger queen";
   }
   public function asetK(){
        return "kantor BQ $this->bangunan ada $this->dokumen";
   }
//    2. destructor
    public function __destruct(){
        echo "ini berasal dari hybe";
  }
}
$aset= new kantor();
echo "<br />";
echo $aset->asetK();
echo "<br />";
?>

<!-- batas suci -->
