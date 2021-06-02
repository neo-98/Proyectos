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
public class Pelicula {
    private String nombre;
    private int duracion;
    private String categoria;
    private int anioEstreno;
    private Pelicula ant;
    private Pelicula sig;
    public Pelicula(String nombre, int duracion, String categoria, int anioEstreno) {
        this.nombre = nombre;
        this.duracion = duracion;
        this.categoria = categoria;
        this.anioEstreno = anioEstreno;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public int getDuracion() {
        return duracion;
    }

    public void setDuracion(int duracion) {
        this.duracion = duracion;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public int getAnioEstreno() {
        return anioEstreno;
    }

    public void setAnioEstreno(int anioEstreno) {
        this.anioEstreno = anioEstreno;
    }
    
    public Pelicula getAnt() {
        return ant;
    }

    public void setAnt(Pelicula ant) {
        this.ant = ant;
    }

    public Pelicula getSig() {
        return sig;
    }

    public void setSig(Pelicula sig) {
        this.sig = sig;
    }
}
