<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity
 */
class Equipo
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="socios", type="integer", nullable=true)
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
     * @ORM\Column(name="ciudad", type="string", length=100, nullable=true)
     */
    private $ciudad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estadio", type="string", length=100, nullable=true)
     */
    private $estadio;
    
    



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
     * Set the value of idEquipo
     *
     * @param  int  $idEquipo
     *
     * @return  self
     */ 
    public function setIdEquipo(int $idEquipo)
    {
        $this->idEquipo = $idEquipo;

        return $this;
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
}
