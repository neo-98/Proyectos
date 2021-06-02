/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package calculadora.controller;

import calculadora.logic.Logica;

/**
 *
 * @author Estudiante
 */
public class ControllerCalc {

    Logica mylogic = new Logica();
    private float num1;
    private float num2;
    private float r;
    private String result = "";

    public ControllerCalc() {
        this.mylogic = new Logica();
    }

    private void converterNumbers(String numberOne, String numberTwo) {
        num1 = Float.parseFloat(numberOne);
        num2 = Float.parseFloat(numberTwo);
    }

    private void converterNumber(String resultado) {
        r = Float.parseFloat(resultado);
    }

    public String add(String numberOne, String numberTwo) {
        converterNumbers(numberOne, numberTwo);
        r = this.mylogic.Suma(num1, num2);
        result = String.valueOf(r);
        return result;
    }

    public String subtraction(String numberOne, String numberTwo) {
        converterNumbers(numberOne, numberTwo);
        r = this.mylogic.Resta(num1, num2);
        result = String.valueOf(r);
        return result;
    }

    public String multiplication(String numberOne, String numberTwo) {
        converterNumbers(numberOne, numberTwo);
        r = this.mylogic.Multiplicacion(num1, num2);
        result = String.valueOf(r);
        return result;
    }

    public String division(String numberOne, String numberTwo) {
        converterNumbers(numberOne, numberTwo);
        if (num2 != 0) {
            r = this.mylogic.Division(num1, num2);
            result = String.valueOf(r);
        } else {
            return "ERROR";
        }
        return result;
    }

}
