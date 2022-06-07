<?php
require_once __DIR__ . '/Classes/Prodotto.php';
require_once __DIR__ . '/Classes/Cliente.php';
require_once __DIR__ . '/Classes/ClientePro.php';


$prodotto1 = new Prodotto('Croccantini di pollo','Gatto',5.50);
$prodotto2 = new Prodotto('Croccantini di manzo','Gatto',5.50);
$prodotto3 = new Prodotto('Croccantini di pollo e verdure','Cane',6.50);
$prodotto4 = new Prodotto('Croccantini di manzo e verdure','Cane',8.50);
// var_dump($Prodotto1);
// var_dump($Prodotto2);
// var_dump($Prodotto3);
// var_dump($Prodotto4);
$cliente1 = new Cliente('Marco','Marchini',' Via Roma n.15', '334/3434342','markoko@gmail.com', '2525 6363 8989 1236','10/25');
$cliente2 = new Cliente('Piero','Pierini',' Via Milano n.25', '334/3438842','p.pierini@gmail.com','2525 7777 8989 1478','01/25');
$cliente3 = new Cliente('Luca','Luchini',' Via Bologna n.9', '389/3474442','lukini@gmail.com','2765 6363 4120 1111','10/22');
$cliente4 = new Cliente('Nina','Maggio',' Via Corta n.115', '334/34345555','ninamaggio@gmail.com','1325 1312 8989 1111','08/25');
//  var_dump($Cliente);
//  var_dump($Cliente1);
//  var_dump($Cliente2);
//  var_dump($Cliente3);
$clientePro1 = new ClientePro('Anna','March',' Via Belgio n.15', '334/1234567','annam@gmail.com', '2525 6363 4787 1236','10/25');
$clientePro2 = new ClientePro('Giorgio','Pieri',' Via Colle n.25', '334/7896541','gio.pieri@gmail.com','2525 9999 8989 1478','01/25');
$clientePro3 = new ClientePro('Marino','Luchi',' Via Vai n.9', '389/1417181','marino9@gmail.com','2765 9898 3214 1111','10/22');
//   var_dump($ClientePro);
//   var_dump($ClientePro1);
//   var_dump($ClientePro2);

try{
    $cliente1->setEmail('pippo@mail.com');
}
catch(Exception $e){
    echo 'Errore: ' . $e->getMessage();
    
}
echo $cliente1->getEmail();



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>
<body>
    
</body>
</html>