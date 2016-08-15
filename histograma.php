<?php

    $src        = './imagens/lena.png';

    $im         = imagecreatefrompng($src);
    $size       = getimagesize($src);
    $largura    = $size[0];
    $altura     = $size[1];
    $histograma = array();

    for ($i=0; $i <= 255; $i++) { 
        $histograma[$i] = 0;
    }

    for($x=0;$x<$largura;$x++)
    {
        for($y=0;$y<$altura;$y++)
        {
            $rgb = imagecolorat($im, $y, $x);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8) & 0xFF;
            $b = $rgb & 0xFF;

            // echo $r . "-" . $g . "-" . $b . "<br>";

            $histograma[$b] = $histograma[$b] + 1;

            // if ($r != 255) {
            //     echo ".";
            // } else {
            //     echo "o";
            // }

            //var_dump($r, $g, $b);
        }
        // echo "<br>";
    }


?>