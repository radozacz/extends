<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogRepository")
 */
class Blog
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
    private $blogParam;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlogParam(): ?string
    {
        return $this->blogParam;
    }

    public function setBlogParam(?string $blogParam): self
    {
        $this->blogParam = $blogParam;

        return $this;
    }
}
