<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Oop 2</title>
</head>
<body>
    <?php 
        include 'prodotto_informatico.php';

        $ram = new ProdottoInformatico("Ram ddr4",50.0,"Memoria ram", "http://....",4000,1600.0);
        $cpu = new ProdottoInformatico("Cpu i5",70.0,"Processore 9Th Generation", "http://....", 0,3.5);
        $libro = new Prodotto("Giallo Zafferano",30.0,"Ricette di cucina", "http://....");


        $prodotti[] = $ram;
        $prodotti[] = $cpu;
        $prodotti[] = $libro; 
    ?>

    <h1>Prodotti Oop</h1>

    <ul>
            <?php foreach($prodotti as $prodotto) { ?>

                    <li> <?php var_dump($prodotto) ?></li>

            <?php }?>

    </ul>
</body>
</html>