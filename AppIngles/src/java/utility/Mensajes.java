/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package utility;

import java.util.ResourceBundle;
import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;

/**
 *
 * @author nicoe
 */
public class Mensajes {
    
    public static void error(String texto, String detalle){
        FacesMessage mensaje= new FacesMessage(FacesMessage.SEVERITY_FATAL,texto,detalle);
        FacesContext.getCurrentInstance().addMessage(null, mensaje);
    }
    
    public static void exito(String texto, String detalle){
        texto=ResourceBundle.getBundle("/utility/txtstudent").getString("Exiiiito");
        FacesMessage mensaje= new FacesMessage(FacesMessage.SEVERITY_INFO,texto,detalle);
        FacesContext.getCurrentInstance().addMessage("successInfo", mensaje);
    }
}
