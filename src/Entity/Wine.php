<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WineRepository")
 */
class Wine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $sugar_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $variety;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="Producer")
     * @ORM\JoinColumn(name="producer_id", referencedColumnName="id", nullable=false)
     */
    private $producer;

    /**
     * @ORM\ManyToOne(targetEntity="GrapeVariety", inversedBy="wines")
     * @ORM\JoinColumn(name="grape_variety_id", referencedColumnName="id")
     */
    private $grape_variety;

    /**
     * Wine variety
     */
    public const AMBER = 1;
    public const RED = 2;
    public const WHITE = 3;
    public const ROSE = 4;
    public const SPARKLING = 5;

    /**
     * Sugar type
     */
    public const DRY = 1;
    public const MEDIUM_DRY = 2;
    public const MEDIUM_SWEET = 3;
    public const SWEET = 4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSugarType(): ?int
    {
        return $this->sugar_type;
    }

    public function setSugarType(int $sugar_type): self
    {
        $this->sugar_type = $sugar_type;

        return $this;
    }

    public function getVariety(): ?int
    {
        return $this->variety;
    }

    public function setVariety(int $variety): self
    {
        $this->variety = $variety;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getProducer(): Producer
    {
        return $this->producer;
    }

    public function setProducer(Producer $producer): self
    {
        $this->producer = $producer;

        return $this;
    }

    public function getGrapeVariety(): ?GrapeVariety
    {
        return $this->grape_variety;
    }

    public function setGrapeVariety(?GrapeVariety $grape_variety): self
    {
        $this->grape_variety = $grape_variety;

        return $this;
    }
}
