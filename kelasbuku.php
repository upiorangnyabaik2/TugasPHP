
<?php 
    class Buku {
        public $judul;
        public $penulis;

    public function __construct ($judul, $penulis) {
         $this->judul = $judul;
         $this->penulis = $penulis;

    }

}

 $bukuSaya = new Buku("PHP untuk pemula", "Jane Doe");
 echo "Buku: " . $bukuSaya->judul . " oleh " . $bukuSaya->penulis . "<br>";
 //NULL
?>