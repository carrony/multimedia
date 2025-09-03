<?php
require_once("ContenidoMultimedia.php");

class Pelicula extends ContenidoMultimedia {

    private $horas;
    private $calidad;

    public function __construct($titulo, $descripcion, $horas, $minutos, $segundos, $calidad, 
                                $valoracion=3){
        parent::__construct($titulo, $descripcion,$minutos, $segundos, $valoracion);
        $this->horas=$horas;
        $this->calidad=$calidad;
    }

    

    /**
     * Get the value of horas
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set the value of horas
     */
    public function setHoras($horas): self
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get the value of calidad
     */
    public function getCalidad()
    {
        return $this->calidad;
    }

    /**
     * Set the value of calidad
     */
    public function setCalidad($calidad): self
    {
        $this->calidad = $calidad;

        return $this;
    }

    public function getSegundosTotales() {
        return parent::getSegundosTotales()+$this->horas*3600;
    }

    public function __toString() {
        return parent::__toString() . <<<END
            <td>{$this->horas}</td>
            <td>{$this->calidad}</td>
        END;
    }

    public function esHD() {
        //if ($this->calidad>720) {return true;} else {return false;}
        switch($this->calidad){
            case '720p': 
            case '1080p':
                return true;
            default:
                return false;
        }
    }

}

?>