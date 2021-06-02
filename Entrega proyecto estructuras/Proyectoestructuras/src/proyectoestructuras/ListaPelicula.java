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
public class ListaPelicula {
    private Pelicula filme;

    public ListaPelicula(Pelicula filme) {
        this.filme=filme;
    }

    public Pelicula getFilme() {
        return filme;
    }

    public void setFilme(Pelicula filme) {
        this.filme = filme;
    } 
    public void Agregar(Pelicula p1){
           Pelicula aux=filme;
        if(filme==null){
            filme=p1;
        }else{
            while(aux.getSig()!=null){
                aux=aux.getSig();
            }
            p1.setAnt(aux);
             aux.setSig(p1);
    }
    }
        public String toString(){
        String res = "";
        Pelicula aux = filme;
        while(aux!=null){
        res+=String.valueOf(aux.getNombre()+ " -> " + "\n");
        aux=aux.getSig();
        }
        return res;
    }
}
