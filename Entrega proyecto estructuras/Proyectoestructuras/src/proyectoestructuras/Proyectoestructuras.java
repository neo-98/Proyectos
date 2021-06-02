/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectoestructuras;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

/**
 *
 * @author Nicolas
 */
public class Proyectoestructuras {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws Exception {
//        int cont = 0;
//        BufferedReader b1=new BufferedReader(new FileReader("C://Users//Nicolas//Desktop//escritorio//estructura archivos//Accion.txt"));
//        String br=b1.readLine();
//        String []arreglo = null;
//        System.out.println(br.substring(0, 5));
//        System.out.println(br.substring(6, 7));
//        while(br!=null){
//        br=b1.readLine();
//        arreglo=br.split(",");
//        
//    }
//        System.out.println(arreglo[0]);
//        b1.close();
        
        Genero a=new Genero("Accion");
        Genero b=new Genero("Terror");
        Genero c=new Genero("Comedia");
        Genero d=new Genero("Anime");
        ListaGenero l=new ListaGenero();
        l.Agregar(a);
        l.Agregar(b);
        l.Agregar(c);
        l.Agregar(d);
        System.out.println("" + l.toString());
        l.quitar("Anime");
        System.out.println("" + l.toString());
        System.out.println("" + l.buscar("Accion"));
        
        
//        Pelicula p1 = new Pelicula("Wolverine", 21,"Mayores",120);
//        Pelicula p2 = new Pelicula("Logan", 21,"sdvxdx",120);
//        ListaPelicula p=new ListaPelicula(p1);
//        p.Agregar(p1);
//        p.Agregar(p2);
//        System.out.println(p.toString());
//        p.quitar("Logan");
//        System.out.println(p.toString());
//         
            }
    }
    

