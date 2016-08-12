<pre><small>
<?php

    $src    = './imagens/geometricas.jpg';
    $im     = imagecreatefromjpeg($src);
    $size   = getimagesize($src);
    $width  = $size[0];
    $height = $size[1];

    echo "Altura : " . $height . "<br>";
    echo "Largura: " . $width . "<br>";
    echo "<br>";

    for($x=0;$x<$width;$x++)
    {
        for($y=0;$y<$height;$y++)
        {
            $rgb = imagecolorat($im, $y, $x);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8) & 0xFF;
            $b = $rgb & 0xFF;

            if ($r == 255) {
                echo "o";
            } else {
                echo ".";
            }

            //var_dump($r, $g, $b);
        }
        echo "<br>";
    }
