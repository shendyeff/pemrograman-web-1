<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multi Dimensi</title>
</head>

<body>
    <?php 
        print"CARA MENDEKLARASIKAN ARRAY MULTIDIMENSI";
        $buah = array(
                "apel" => array("warna"=> "merah", "rasa" => "manis"),
                "pisang" => array("warna"=>"kuning", "rasa" => "manis"));
        
        print "Warna buah apel adalah";
        print $buah["apel"]["warna"]."<br>";
        print "Warna buah pisang adalah";
        print $buah["pisang"]["warna"]."<br>";

        echo"<br><br><br>";

        print"CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI";
        $buah = array(
            array("apel", "merah", "manis"),
            array("pisang", "kuning", "manis")
        );
        
        echo $buah[0][0]." warna: ".$buah[0][1]." rasa: ".$buah[0][2]."<br>";
        echo $buah[1][0]." warna: ".$buah[1][1]." rasa: ".$buah[1][2]."<br>";
    ?>
</body>

</html>