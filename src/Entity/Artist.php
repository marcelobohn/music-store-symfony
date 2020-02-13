<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArtistRepository")
 */
class Artist
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $artist_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twitter_handle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtistName(): ?string
    {
        return $this->artist_name;
    }

    public function setArtistName(string $artist_name): self
    {
        $this->artist_name = $artist_name;

        return $this;
    }

    public function getTwitterHandle(): ?string
    {
        return $this->twitter_handle;
    }

    public function setTwitterHandle(?string $twitter_handle): self
    {
        $this->twitter_handle = $twitter_handle;

        return $this;
    }
}
