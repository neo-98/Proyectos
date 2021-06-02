/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controlador;

import ejb.NotasFacade;
import entidades.NotasEntity;
import java.io.Serializable;
import java.util.List;
import java.util.ResourceBundle;
import javax.ejb.EJB;
import javax.enterprise.context.RequestScoped;
import javax.inject.Named;
import utility.Mensajes;

/**
 *
 * @author Nicolas
 */

@Named(value = "NotasController")
@RequestScoped
public class NotasController implements Serializable{
     @EJB//DPI
    private NotasFacade usuarioFacade;
    private NotasEntity _objActual;
    public NotasController() {
    }

    public NotasEntity getCampo() {
        if (this._objActual == null) {
            this._objActual = new NotasEntity();
        }
        return this._objActual;
    }

    public NotasFacade getFacade() {
        return this.usuarioFacade;
    }

    public String grabarEstudiante(){
           String texto, detalle = "Error en el guadado";
        try {
            texto = "Exito";
            detalle = ResourceBundle.getBundle("utility/txtstudent").getString("MsGrabarExitoEmpresa");
            this.getFacade().grabar(this._objActual);
            Mensajes.exito(texto, detalle);
            return "Listar"; //ruta
        } catch (Exception e) {
            texto = "Error";
            //detalle=ResourceBundle.getBundle("/co/edu/usta/inscripcion/utility/txtstudent").getString("MsGrabarError");
            Mensajes.error(texto, detalle);
            return "Listar";//ruta
        }

}

    public List<NotasEntity> getUsuarioList() {
        return this.getFacade().listar();
    }
    
      public String borrarEstudiante(NotasEntity estudiante) {
        String texto, detalle = "Error al eliminar";
        try {
            texto = "Exito";
            detalle = ResourceBundle.getBundle("utility/txtstudent").getString("MsBorrarExitoEmpresa");
            this.getFacade().borrar(estudiante);
            Mensajes.exito(texto, detalle);
            return "Listar";// Ruta
        } catch (Exception e) {
            texto = "Error";
            //detalle=ResourceBundle.getBundle("/co/edu/usta/inscripcion/utility/txtstudent").getString("MsGrabarError");
            Mensajes.error(texto, detalle);
            return "Listar"; // ruta
        }
    }
      
    public String verEstudiante(NotasEntity estudiante) {
        this._objActual = estudiante;
        return "Editar";//ruta
    }
      
      public String editarEstudiante() {
        String texto, detalle = "Error en la actualizacion";
        try {
            texto = "Exito";
            detalle = ResourceBundle.getBundle("/utility/txtstudent").getString("MsGrabarExitoEmpresa");
            this.getFacade().actualizar(_objActual);
            Mensajes.exito(texto, detalle);
            return "Listar"; //ruta
        } catch (Exception e) {
            texto = "Error";
            //detalle=ResourceBundle.getBundle("/co/edu/usta/inscripcion/utility/txtstudent").getString("MsGrabarError");
            Mensajes.error(texto, detalle);
            return "Listar";//ruta
        }
}
}
