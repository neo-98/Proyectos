/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

/**
 *
 * @author Nicolas
 */
public class SessionBD {
    public static final String BD_TEST = "TestJEEPU";
    public static final String BD_PRODUCCION = "TestJEEPU2";
    private static EntityManager entityManager;
    
    public static void persistenceCreate(String id){
        EntityManagerFactory  emf = Persistence.createEntityManagerFactory(id);
        entityManager = emf.createEntityManager();
    }
    
    public static void persistenceClose(){
        entityManager.close();
    }
    
    public static EntityManager getEntityManager(){
        return entityManager;
    }
}
