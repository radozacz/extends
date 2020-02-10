<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NewsRepository")
 */
class News
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
    private $newsParam;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNewsParam(): ?string
    {
        return $this->newsParam;
    }

    public function setNewsParam(?string $newsParam): self
    {
        $this->newsParam = $newsParam;

        return $this;
    }
}
