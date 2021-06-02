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
public class ListaGenero {
    private Genero Tipo;
    public String agregar="";

    public ListaGenero() {
        
    }

    public Genero getTipo() {
        return Tipo;
    }

    public void setTipo(Genero Tipo) {
        this.Tipo = Tipo;
    }
    
    public void Agregar(Genero g){
        Genero aux=Tipo;
        if(Tipo==null){
            Tipo=g;
        }else{
            while(aux.getSig()!=null){
                aux=aux.getSig();
            }
            g.setAnt(aux);
             aux.setSig(g);
    }
    }
    public void getAgregar(String opcion){
        agregar=opcion;
    }
    
    public void quitar(String g1) throws Exception{
    Genero aux=Tipo;
    Genero anterior=null;
    if(g1.compareTo(Tipo.getNombre())==0){
        Tipo=Tipo.getSig();
        Tipo.setAnt(null);
    }else{
        while (aux.getNombre().compareTo(g1)!=0 && aux.getSig()!=null){
            anterior=aux;
            aux=aux.getSig();
            }
        if(aux.getSig()!=null)
            anterior.setSig(aux.getSig());
    }
      
    }
    
    public boolean buscar(String b){
    Genero aux=Tipo;
        Genero a;
        if(b.compareTo(aux.getNombre())==0 || b.compareTo(aux.getNombre())==1){
            return true;
        }else
        while(aux.getSig()!=null){
            aux=aux.getSig();
            if(aux.getNombre().compareTo(b)==0 || aux.getNombre().compareTo(b)==1){
               a=Tipo;
               return true;
            }
    }
        return false;
    }
  
    public boolean esVacia(){
        if(Tipo==null){
            return true;
        }else
            return false;
    }
    public String toString(){
        String res = "";
        Genero aux = Tipo;
        while(aux!=null){
        res+=String.valueOf(aux.getNombre()+ " -> ");
        aux=aux.getSig();
        }
        return res;
    }
}
