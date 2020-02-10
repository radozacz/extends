<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\BaseArticle", mappedBy="category")
     */
    private $baseArticles;

    public function __construct()
    {
        $this->baseArticles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|BaseArticle[]
     */
    public function getBaseArticles(): Collection
    {
        return $this->baseArticles;
    }

    public function addBaseArticle(BaseArticle $baseArticle): self
    {
        if (!$this->baseArticles->contains($baseArticle)) {
            $this->baseArticles[] = $baseArticle;
            $baseArticle->addCategory($this);
        }

        return $this;
    }

    public function removeBaseArticle(BaseArticle $baseArticle): self
    {
        if ($this->baseArticles->contains($baseArticle)) {
            $this->baseArticles->removeElement($baseArticle);
            $baseArticle->removeCategory($this);
        }

        return $this;
    }
}
