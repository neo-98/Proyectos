/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entidades;

import java.io.Serializable;
import java.util.Objects;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.Size;

/**
 *
 * @author Nicolas
 */
@Entity
@Table(name="listadonotas")
public class NotasEntity implements Serializable {
    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    @Basic(optional=false)
    
    @Column(name="idnotas")
    private Integer IdeNotas;
   
    @Size(min=1, max=80)
    @Column(name="nombreestudiante")
    private String nombreEs;
    
    @Size(min=1, max=80)
    @Column(name="apellidoestudiante")
    private String apell;
    
    //@Size(min=1,max=50)
    @Column(name="codigoestudiante")
    private Integer cod;
    
    @Size(min=1,max=80)
    @Column(name="carreraestudiante")
    private String carrera;
    
    @Size(min=1,max=80)
    @Column(name="semestreestudiante")
    private String semestre;
    
    @Size(min=1,max=80)
    @Column(name="nommateria")
    private String nomMateria;
    
    //@Size(min=1,max=50)
    @Column(name="nota")
    private float nota;
    
    //@Size(min=1,max=50)
    @Column(name="numcreditos")
    private Integer creditos;
    
    @Size(min=1,max=80)
    @Column(name="nomdocente")
    private String nomDocente;

    public Integer getIdeNotas() {
        return IdeNotas;
    }

    public void setIdeNotas(Integer IdeNotas) {
        this.IdeNotas = IdeNotas;
    }

    public String getNombreEs() {
        return nombreEs;
    }

    public void setNombreEs(String nombreEs) {
        this.nombreEs = nombreEs;
    }

    public String getApell() {
        return apell;
    }

    public void setApell(String apell) {
        this.apell = apell;
    }

    public Integer getCod() {
        return cod;
    }

    public void setCod(Integer cod) {
        this.cod = cod;
    }

    public String getCarrera() {
        return carrera;
    }

    public void setCarrera(String carrera) {
        this.carrera = carrera;
    }

    public String getSemestre() {
        return semestre;
    }

    public void setSemestre(String semestre) {
        this.semestre = semestre;
    }

    public String getNomMateria() {
        return nomMateria;
    }

    public void setNomMateria(String nomMateria) {
        this.nomMateria = nomMateria;
    }

    public float getNota() {
        return nota;
    }

    public void setNota(float nota) {
        this.nota = nota;
    }

    public Integer getCreditos() {
        return creditos;
    }

    public void setCreditos(Integer creditos) {
        this.creditos = creditos;
    }

    public String getNomDocente() {
        return nomDocente;
    }

    public void setNomDocente(String nomDocente) {
        this.nomDocente = nomDocente;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 83 * hash + Objects.hashCode(this.IdeNotas);
        hash = 83 * hash + Objects.hashCode(this.nombreEs);
        hash = 83 * hash + Objects.hashCode(this.apell);
        hash = 83 * hash + Objects.hashCode(this.cod);
        hash = 83 * hash + Objects.hashCode(this.carrera);
        hash = 83 * hash + Objects.hashCode(this.semestre);
        hash = 83 * hash + Objects.hashCode(this.nomMateria);
        hash = 83 * hash + Float.floatToIntBits(this.nota);
        hash = 83 * hash + Objects.hashCode(this.creditos);
        hash = 83 * hash + Objects.hashCode(this.nomDocente);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final NotasEntity other = (NotasEntity) obj;
        if (Float.floatToIntBits(this.nota) != Float.floatToIntBits(other.nota)) {
            return false;
        }
        if (!Objects.equals(this.nombreEs, other.nombreEs)) {
            return false;
        }
        if (!Objects.equals(this.apell, other.apell)) {
            return false;
        }
        if (!Objects.equals(this.carrera, other.carrera)) {
            return false;
        }
        if (!Objects.equals(this.semestre, other.semestre)) {
            return false;
        }
        if (!Objects.equals(this.nomMateria, other.nomMateria)) {
            return false;
        }
        if (!Objects.equals(this.nomDocente, other.nomDocente)) {
            return false;
        }
        if (!Objects.equals(this.IdeNotas, other.IdeNotas)) {
            return false;
        }
        if (!Objects.equals(this.cod, other.cod)) {
            return false;
        }
        if (!Objects.equals(this.creditos, other.creditos)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "NotasEntity{" + "IdeNotas=" + IdeNotas + ", nombreEs=" + nombreEs + ", apell=" + apell + ", cod=" + cod + ", carrera=" + carrera + ", semestre=" + semestre + ", nomMateria=" + nomMateria + ", nota=" + nota + ", creditos=" + creditos + ", nomDocente=" + nomDocente + '}';
    }

    
    }
