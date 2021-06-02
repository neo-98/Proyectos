/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejb;

import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.criteria.CriteriaBuilder;
import javax.persistence.criteria.CriteriaQuery;

/**
 *
 * @author nicoe
 * @param <T>
 */
public abstract class Abstract<T> {
    
    private final Class<T> entidad;
    protected abstract EntityManager getAdmEntidad();
    
    public Abstract(Class<T> entidad){
        this.entidad=entidad;
    } 
    
    public void grabar(T entidad){
        getAdmEntidad().persist(entidad);
    }
    
    public void borrar(T entidad){
        getAdmEntidad().remove(getAdmEntidad().merge(entidad));
    }
        
    public void actualizar(T entidad){
        getAdmEntidad().merge(entidad);
    }       
    
    public List<T> listar(){
        CriteriaBuilder cb=getAdmEntidad().getCriteriaBuilder();
        CriteriaQuery cq= cb.createQuery(this.entidad);
        cq.select(cq.from(this.entidad));
        List<T> allData=getAdmEntidad().createQuery(cq).getResultList();
        return allData;
    }
    
    public T buscar(Object id){
        return getAdmEntidad().find(entidad, id);
    }
}
