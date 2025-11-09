<?php

require_once 'src/clase.php';
$Ope= new Calculadora();

$a=5;
$b=5;

$SUMA_RESULTADO = $Ope->sumar($a,$b);
$RESTA_RESULTADO = $Ope->restar($a,$b);
$MULTIPLICACION_RESULTADO = $Ope->multiplicar($a,$b);
$DIVISION_RESULTADO = $Ope->dividir($a,$b);


test('SUMA', function () use ($SUMA_RESULTADO) {
    expect($SUMA_RESULTADO)->toBe(10);
});

test('RESTA', function () use ($RESTA_RESULTADO) {
    expect($RESTA_RESULTADO)->toBe(0);
});

test('MULTIPLICACION', function () use ($MULTIPLICACION_RESULTADO) {
    expect($MULTIPLICACION_RESULTADO)->toBe(25);
});

test('DIVISION', function () use ($DIVISION_RESULTADO) {
    expect($DIVISION_RESULTADO)->toBe(1);
});

