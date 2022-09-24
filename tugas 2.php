<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas Konsep OOP 2</title>
   <style>
      body {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         background: #FFE3E1;
         font-family: "Duru Sans", Verdana, sans-serif;
      }

      .kotak {
         position: absolute;
         top: 50%;
         left: 50%;
         background: #FF9494;
         width: 400px;
         height: auto;
         border-radius: 10px;
         padding: 0 12px;
      }

      h3 {
         text-align: center;
         font-weight: 600;
      }

      p {
         background: #eee;
         padding: 2px 8px;
         font-weight: 500;
         font-size: 16px;
         text-align: justify;
      }
   </style>
</head>

<body>
   <?php

   interface Hewan
   {
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }
   class Monyet implements Hewan
   {
      public function Makan()
      {
         return "Monyet suka makan pisang<br/>";
      }

      public function Berjalan()
      {
         return "Monyet berjalan dengan kedua kakinya<br/>";
      }

      public function Bersuara()
      {
         return "Monyet bersuara <i>'uuaak...uuaak'</i><br/>";
      }
      public function Sepeda()
      {
         return "Bisa menaiki sepeda<br/>";
      }
   }
   ?>
   <div class="kotak">
      <h3>MONYET</h3>
      <p>
         <?php
         $Monyet = new Monyet;
         echo "<b>Kemampuan yang dimiliki Monyet : </b><br/>";
         echo $Monyet->Makan();
         echo $Monyet->Berjalan();
         echo $Monyet->Bersuara();

         echo "<b>Kemampuan yang dimiliki Monyet jika dilatih : </b><br/>";
         echo $Monyet->Sepeda();
         ?>
      </p>
   </div>
</body>
</html>