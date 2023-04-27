<?php

function recursiva($n) {
    if ($n != 0) {
        printf("$n \n");
        recursiva($n-2);
    }
}
recursiva(10);

?>