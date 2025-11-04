<?php

require_once 'clase.php';
$SUMA= new Calculadora();



$SUMA_RESULTADO = $SUMA->sumar(1,1);

test('SUMA', function () use ($SUMA_RESULTADO) {
    expect($SUMA_RESULTADO)->toBe(2);
});
