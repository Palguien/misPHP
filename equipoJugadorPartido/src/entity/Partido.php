<?php


use Doctrine\ORM\Mapping as ORM;

/**
 * Partido
 *
 * @ORM\Table(name="partido", indexes={@ORM\Index(name="partido_equipo_FK", columns={"local"}), @ORM\Index(name="partido_equipo_FK_1", columns={"visitante"})})
 * @ORM\Entity(repositoryClass="PartidoRepository")
 */
class Partido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_partido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPartido;

    /**
     * @var int|null
     *
     * @ORM\Column(name="goles_local", type="integer", nullable=true)
     */
    private $golesLocal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="goles_visitante", type="integer", nullable=true)
     */
    private $golesVisitante;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id_equipo")
     * })
     */
    private $local;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitante", referencedColumnName="id_equipo")
     * })
     */
    private $visitante;



    /**
     * Get the value of idPartido
     *
     * @return  int
     */ 
    public function getIdPartido()
    {
        return $this->idPartido;
    }

    /**
     * Set the value of idPartido
     *
     * @param  int  $idPartido
     *
     * @return  self
     */ 
    public function setIdPartido(int $idPartido)
    {
        $this->idPartido = $idPartido;

        return $this;
    }

    /**
     * Get the value of golesLocal
     *
     * @return  int|null
     */ 
    public function getGolesLocal()
    {
        return $this->golesLocal;
    }

    /**
     * Set the value of golesLocal
     *
     * @param  int|null  $golesLocal
     *
     * @return  self
     */ 
    public function setGolesLocal($golesLocal)
    {
        $this->golesLocal = $golesLocal;

        return $this;
    }

    /**
     * Get the value of golesVisitante
     *
     * @return  int|null
     */ 
    public function getGolesVisitante()
    {
        return $this->golesVisitante;
    }

    /**
     * Set the value of golesVisitante
     *
     * @param  int|null  $golesVisitante
     *
     * @return  self
     */ 
    public function setGolesVisitante($golesVisitante)
    {
        $this->golesVisitante = $golesVisitante;

        return $this;
    }

    /**
     * Get the value of fecha
     *
     * @return  \DateTime|null
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @param  \DateTime|null  $fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of local
     *
     * @return  \Equipo
     */ 
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set the value of local
     *
     * @param  \Equipo  $local
     *
     * @return  self
     */ 
    public function setLocal(\Equipo $local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get the value of visitante
     *
     * @return  \Equipo
     */ 
    public function getVisitante()
    {
        return $this->visitante;
    }

    /**
     * Set the value of visitante
     *
     * @param  \Equipo  $visitante
     *
     * @return  self
     */ 
    public function setVisitante(\Equipo $visitante)
    {
        $this->visitante = $visitante;

        return $this;
    }
}
