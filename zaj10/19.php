<pre>

<?php
        $fp = fopen('plik2.txt', "r") or die ("Blad");
        $tekst = fread($fp, filesize("plik2.txt"));
        echo $tekst;
    fclose($fp);
?>
</pre>