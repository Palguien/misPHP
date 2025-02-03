# -- Creación y uso de Partido --

## 1 - Creación de la tabla 

partido(id_partido (PK), local (FK), visitante(FK), goles_local, goles_visitante, fecha)

## 2 - Escribe una entidad para la tabla partido incluyendo las relaciones.

./vendor/bin/doctrine orm:convert-mapping --from-database annotation src/entity --filter Partido

Añadir getters y setters.

## 3 - Escribe un programa para probarla.

Test: probandoPartido.php

## 4 - Modifica Equipo para que la relación con Partido sea bidireccional (PartidoBidireccional) y escribe un programa para probarla.

En EquipoBidireccional hay que crear dos atributos $partidosLocal y $partidosVisitante.

    /**
     * Un equipo tiene muchos partidos "local"
     * @ORM\OneToMany(targetEntity="PartidoBidireccional",mappedBy="equipo")
     */
    private $partidosLocal;

    /**
     * Un equipo tiene muchos partidos "visitante"
     * @ORM\OneToMany(targetEntity="PartidoBidireccional",mappedBy="equipo")
     */
    private $partidosVisitante;


    public function __construct()
    {
        $this -> jugadores = new ArrayCollection();
        $this -> partidosLocal = new ArrayCollection();
        $this -> partidosVisitante = new ArrayCollection();
    }

En PartidoBidireccional $local y $visitantes invierten $partidosLocal y $partidosVisitante.

    /**
     * @var \EquipoBidireccional
     *
     * @ORM\ManyToOne(targetEntity="EquipoBidireccional", inversedBy = "partidosLocal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo", referencedColumnName="id_equipo")
     * })
     */
    private $local;

    /**
     * @var \EquipoBidireccional
     *
     * @ORM\ManyToOne(targetEntity="EquipoBidireccional", inversedBy = "partidosVisitante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo", referencedColumnName="id_equipo")
     * })
     */
    private $visitante;

Además hay que cambiar las instancias de Partido por PartidoBidireccional.

Test: probarPartidoBidireccional.php


## 5 - Añade un repositorio con 3 consultas que inventes (por ejemplo, que devuelva todos los partidos en los que el equipo x jugó como visitante). Escribe un programa para probarlas (probar-partido.php).

Test: repositoriosPartido.php