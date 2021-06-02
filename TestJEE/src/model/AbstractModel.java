/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.Query;

/**
 *
 * @author Nicolas
 */
public class AbstractModel {
    private final EntityManager entityManager= SessionBD.getEntityManager();
    
    public List findAll(String nomClase){
        entityManager.getEntityManagerFactory().getCache().evictAll();
        Query q = entityManager.createNamedQuery(nomClase + ".findAll");
        return q.getResultList();
    }
}
