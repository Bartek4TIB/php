<?php
    function setHeight( $mineheight = 50){
    echo "The height is : $mineheight <br>";
}

setHeight(350);
setHeight();

// wartosc domyslna jezeli w wywolaniu funkcji
// nie podamy parametru to zostanie uzyta wartosc
// domyslna, którą wcześniej zdefiniowaliśmy