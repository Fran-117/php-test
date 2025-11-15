<?php

require_once 'src/Calculadora.php';



describe('Calculadora PHP', function () {
    $Ope = new Calculadora();

    $a = 5;
    $b = 5;
    it('SUMA de 5 y 5 debe ser 10', function () use ($Ope, $a, $b) {
        $SUMA_RESULTADO = $Ope->sumar($a, $b);

        expect($SUMA_RESULTADO)->toBe(10);
    });

    it('RESTA de 5 y 5 debe ser 0', function () use ($Ope, $a, $b) {
        $RESTA_RESULTADO = $Ope->restar($a, $b);

        expect($RESTA_RESULTADO)->toBe(0);
    });

    it('MULTIPLICACION de 5 y 5 debe ser 25', function () use ($Ope, $a, $b) {
        $MULTIPLICACION_RESULTADO = $Ope->multiplicar($a, $b);

        expect($MULTIPLICACION_RESULTADO)->toBe(25);
    });

    it('DIVISION de 5 y 5 debe ser 1', function () use ($Ope, $a, $b) {
        $DIVISION_RESULTADO = $Ope->dividir($a, $b);

        expect($DIVISION_RESULTADO)->toBe(1);
    });
});
