<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Jaworski
 * Date: 04.03.2018
 * Time: 23:15
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="movie")
 * @Vich\Uploadable
 */
class Movie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $movie;

    /**
     * @Vich\UploadableField(mapping="movie", fileNameProperty="movie")
     * @var File
     */
    private $movieFile;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param string $movie
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;
    }

    /**
     * @return File
     */
    public function getMovieFile()
    {
        return $this->movieFile;
    }

    /**
     * @param File $movieFile
     */
    public function setMovieFile($movieFile)
    {
        $this->movieFile = $movieFile;
    }
}