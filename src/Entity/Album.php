<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlbumRepository")
 */
class Album
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Artist", inversedBy="albums")
     */
    private $artist;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $album_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): self
    {
        $this->artist = $artist;

        return $this;
    }

    public function getAlbumName(): ?string
    {
        return $this->album_name;
    }

    public function setAlbumName(string $album_name): self
    {
        $this->album_name = $album_name;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function getAge(): ?int
    {
        return (date("Y") - $this->year);
    }    

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('year', new Assert\Positive());
        $metadata->addPropertyConstraint('year', new Assert\LessThan(date('Y') + 1));
    }    
}
