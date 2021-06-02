/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package persistence;

import entity.Product;
import entity.Student;
import java.util.List;
import model.AbstractModel;
import model.SessionBD;

/**
 *
 * @author Nicolas
 */
public class FindAll {
    public static void main(String[] args){
        SessionBD.persistenceCreate(SessionBD.BD_PRODUCCION);
        //SessionBD.persistenceCreate(SessionBD.BD_TEST);
        AbstractModel am = new AbstractModel();
        
        
        //List<Product> products = am.findAll("Product");
        //products.forEach((Products)-> {
        //    System.out.println(products);
        //});
        
        List<Student> products = am.findAll("Student");
        products.forEach((Student)-> {
            System.out.println(products);
        });
    }
}
