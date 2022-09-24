<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Konsep OOP 1</title>
</head>
<body>
    <?php
    class Product {
        public $name;
        public $price;
        public $discount;

        function getName() {
            return $this->name;
        }
        function setName($name){
            $this->name=$name;
        }
        function getPrice() {
            return $this->price;
        }
        function setPrice($price){
            $this->price=$price;
        }
        function getDiscount() {
            return $this->discount;
        }
        function setDiscount($discount){
            $this->discount=$discount;
        }
    }

    class CDMusic extends Product {
        protected $artist;
        protected $genre;

            function getArtist() {
                return $this->artist;
            }
            function setArtist($artist){
                $this->artist=$artist;
            }
            function getGenre() {
                return $this->genre;
            }
            function setGenre($genre){
                $this->genre=$genre;
            }
            function setPrice($price){
                $this->price=$price;
            }
            function getPrice() {
               $harga=$this->price;
               $pajak=((10/100) * $this->price);
               $discount=((5/100) * $this->price);
               return ($harga + $pajak) - $discount;
            }
            function setDiscount($discount){
                $this->discount=$discount;
            }
        }
            class CDRack extends Product {
                protected $capacity;
                protected $model;
        
                    function getCapacity() {
                        return $this->capacity;
                    }
                    function setCapacity($capacity){
                        $this->capacity=$capacity;
                    }
                    function getModel() {
                        return $this->model;
                    }
                    function setModel($model){
                        $this->model=$model;
                    }
                    function setPrice($price){
                        $this->price=$price;
                    }
                    function getPrice() {
                       $harga=$this->price;
                       $pajak=((15/100) * $this->price);
                       return ($harga + $pajak);
                    }
                   }
    ?>

    <?php 
    $beli=new Product();$beli_cdmusic=new CDMusic();$beli_cdrack=new CDRack();$beli->setName("MANIFESTO : DAY 1");
    $beli->setPrice(365000);
    $beli->setDiscount("- Diskon 5% untuk pembelian CD Musik<br />
    - Tidak ada diskon untuk pembelian CD Rack");

    echo "Nama: ".$beli->getName(). "<br />";
    echo "Harga: Rp ".$beli->getPrice(). "<br />";
    echo $beli->getDiscount(). "<br />";
    $beli_cdmusic->setArtist("ENHYPEN");
    $beli_cdmusic->setGenre("K-POP");
    $beli_cdmusic->setDiscount("5%");
    $beli_cdmusic->setPrice(365000);
    echo "<h1> LOVEADE </h1> <br />";
    
    echo "Nama: ".$beli->getName(). "<br />";
    echo "Artist: " .$beli_cdmusic->getArtist(). "<br />";
    echo "Genre: " .$beli_cdmusic->getGenre(). "<br />";
    echo "Total: Rp " .$beli_cdmusic->getPrice(). "<br />Harga sudah termasuk PPN dan diskon. <br />";

    $beli_cdrack->setCapacity("700 MB");
    $beli_cdrack->setModel("CD-R");
    $beli_cdrack->setPrice(70000);
    echo "<h1> LOVEADE </h1> <br />";
    echo "Model: " .$beli_cdrack->getModel()."<br />";
    echo "Kapasitas: ".$beli_cdrack->getCapacity(). "<br />";
    echo "Total: Rp " .$beli_cdrack->getPrice(). "<br /> Harga sudah termasuk PPN.";
    ?>
</body>
</html>