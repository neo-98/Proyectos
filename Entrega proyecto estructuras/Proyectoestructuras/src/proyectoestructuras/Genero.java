/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectoestructuras;

/**
 *
 * @author Nicolas
 */
public class Genero {
 private String nombre;
 private Genero ant;
 private Genero sig;

    public Genero(String nombre) {
        this.nombre = nombre;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public Genero getAnt() {
        return ant;
    }

    public void setAnt(Genero ant) {
        this.ant = ant;
    }

    public Genero getSig() {
        return sig;
    }

    public void setSig(Genero sig) {
        this.sig = sig;
    }
}
