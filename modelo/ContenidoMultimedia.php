<?php
    class ContenidoMultimedia {

        protected $titulo;
        protected $descripcion;
        protected $minutos;
        protected $segundos;
        protected $valoracion;

        public function __construct($titulo, $descripcion, $minutos, $segundos, $valoracion=3)
        {
            $this->titulo=$titulo;
            $this->descripcion=$descripcion;
            $this->minutos=$minutos;
            $this->segundos=$segundos;
            $this->setValoracion($valoracion);
        }

        /**
         * Get the value of valoracion
         */
        public function getValoracion()
        {
                return $this->valoracion;
        }

        /**
         * Set the value of valoracion
         */
        public function setValoracion($valoracion): self
        {
                if ($valoracion >=1 && $valoracion<=5) {
                    $this->valoracion = $valoracion;
                }
                return $this;
        }

        /**
         * Get the value of titulo
         */
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         */
        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of descripcion
         */
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         */
        public function setDescripcion($descripcion): self
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of minutos
         */
        public function getMinutos()
        {
                return $this->minutos;
        }

        /**
         * Set the value of minutos
         */
        public function setMinutos($minutos): self
        {
                $this->minutos = $minutos;

                return $this;
        }

        /**
         * Get the value of segundos
         */
        public function getSegundos()
        {
                return $this->segundos;
        }

        /**
         * Set the value of segundos
         */
        public function setSegundos($segundos): self
        {
                $this->segundos = $segundos;

                return $this;
        }

        public function getSegundosTotales() {
            return ($this->minutos*60) + $this->segundos;
        }

        public function __toString() {
            return <<<END
                <td>{$this->titulo}</td>
                <td>{$this->descripcion}</td>
                <td>{$this->valoracion}</td>
                <td>{$this->minutos}</td>
                <td>{$this->segundos}</td>
            END;
        }

    }
?>