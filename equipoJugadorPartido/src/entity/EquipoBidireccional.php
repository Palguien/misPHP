<?php


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * EquipoBidireccional
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity
 */
class EquipoBidireccional
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="socios", type="integer", nullable=true, options={"comment"="numeros socios"})
     */
    private $socios;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fundacion", type="integer", nullable=true)
     */
    private $fundacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ciudad", type="string", length=50, nullable=true)
     */
    private $ciudad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estadio", type="string", length=50, nullable=true)
     */
    private $estadio;

    /**
     * Un equipo tiene muchos jugadores
     * @ORM\OneToMany(targetEntity="JugadorBidireccional",mappedBy="equipo")
     */
    private $jugadores;

    /**
     * Un equipo tiene muchos partidos "local"
     * @ORM\OneToMany(targetEntity="PartidoBidireccional",mappedBy="local")
     */
    private $partidosLocal;

    /**
     * Un equipo tiene muchos partidos "visitante"
     * @ORM\OneToMany(targetEntity="PartidoBidireccional",mappedBy="visitante")
     */
    private $partidosVisitante;


    public function __construct()
    {
        $this -> jugadores = new ArrayCollection();
        $this -> partidosLocal = new ArrayCollection();
        $this -> partidosVisitante = new ArrayCollection();
    }
    // Getters y setters

    /**
     * Get the value of idEquipo
     *
     * @return  int
     */ 
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of socios
     *
     * @return  int|null
     */ 
    public function getSocios()
    {
        return $this->socios;
    }

    /**
     * Set the value of socios
     *
     * @param  int|null  $socios
     *
     * @return  self
     */ 
    public function setSocios($socios)
    {
        $this->socios = $socios;

        return $this;
    }

    /**
     * Get the value of fundacion
     *
     * @return  int|null
     */ 
    public function getFundacion()
    {
        return $this->fundacion;
    }

    /**
     * Set the value of fundacion
     *
     * @param  int|null  $fundacion
     *
     * @return  self
     */ 
    public function setFundacion($fundacion)
    {
        $this->fundacion = $fundacion;

        return $this;
    }

    /**
     * Get the value of ciudad
     *
     * @return  string|null
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @param  string|null  $ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of estadio
     *
     * @return  string|null
     */ 
    public function getEstadio()
    {
        return $this->estadio;
    }

    /**
     * Set the value of estadio
     *
     * @param  string|null  $estadio
     *
     * @return  self
     */ 
    public function setEstadio($estadio)
    {
        $this->estadio = $estadio;

        return $this;
    }

    /**
     * Get un equipo tiene muchos jugadores
     */ 
    public function getJugadores()
    {
        return $this->jugadores;
    }

    /**
     * Set un equipo tiene muchos jugadores
     *
     * @return  self
     */ 
    public function setJugadores($jugadores)
    {
        $this->jugadores = $jugadores;

        return $this;
    }

    /**
     * Get un equipo tiene muchos partidos "local"
     */ 
    public function getPartidosLocal()
    {
        return $this->partidosLocal;
    }

    /**
     * Set un equipo tiene muchos partidos "local"
     *
     * @return  self
     */ 
    public function setPartidosLocal($partidosLocal)
    {
        $this->partidosLocal = $partidosLocal;

        return $this;
    }

    /**
     * Get un equipo tiene muchos partidos "visitante"
     */ 
    public function getPartidosVisitante()
    {
        return $this->partidosVisitante;
    }

    /**
     * Set un equipo tiene muchos partidos "visitante"
     *
     * @return  self
     */ 
    public function setPartidosVisitante($partidosVisitante)
    {
        $this->partidosVisitante = $partidosVisitante;

        return $this;
    }
}
