<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * JugadorBidireccional
 *
 * @ORM\Table(name="jugador", indexes={@ORM\Index(name="jugador_equipo_FK", columns={"equipo"})})
 * @ORM\Entity
 */
class JugadorBidireccional
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_jugador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJugador;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellidos", type="string", length=100, nullable=true)
     */
    private $apellidos;

    /**
     * @var int|null
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var \EquipoBidireccional
     *
     * @ORM\ManyToOne(targetEntity="EquipoBidireccional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo", referencedColumnName="id_equipo")
     * })
     */
    private $equipo;

    

    /**
     * Get the value of idJugador
     *
     * @return  int
     */ 
    public function getIdJugador()
    {
        return $this->idJugador;
    }

    /**
     * Set the value of idJugador
     *
     * @param  int  $idJugador
     *
     * @return  self
     */ 
    public function setIdJugador(int $idJugador)
    {
        $this->idJugador = $idJugador;

        return $this;
    }

    /**
     * Get the value of nombre
     *
     * @return  string|null
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string|null  $nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     *
     * @return  string|null
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @param  string|null  $apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of edad
     *
     * @return  int|null
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @param  int|null  $edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of EquipoBidireccional
     *
     * @return  \EquipoBidireccional
     */ 
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Set the value of equipo
     *
     * @param  \EquipoBidireccional  $equipo
     *
     * @return  self
     */ 
    public function setEquipo(\EquipoBidireccional $equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }
}
