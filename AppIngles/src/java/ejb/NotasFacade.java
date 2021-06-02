/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejb;

import entidades.NotasEntity;
import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

/**
 *
 * @author nicoe
 */
@Stateless
public class NotasFacade extends Abstract<NotasEntity>{
    
    @PersistenceContext(unitName="AppInglesPU")
    private EntityManager em;
    
    @Override
    protected EntityManager getAdmEntidad(){
        return this.em;
    }

    public NotasFacade() {
       super(NotasEntity.class);
    }
    
    
}
