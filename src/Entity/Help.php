<?php

namespace App\Entity;

use App\Repository\HelpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HelpRepository::class)
 */
class Help
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $answer;

    /**
     * @ORM\Column(type="integer")
     */
    private $counter;

    /**
     * @ORM\Column(type="integer")
     */
    private $positive_rate;

    /**
     * @ORM\Column(type="integer")
     */
    private $negative_rate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getCounter(): ?string
    {
        return $this->counter;
    }

    public function setCounter(string $counter): self
    {
        $this->counter = $counter;

        return $this;
    }

    public function getPositiveRate(): ?string
    {
        return $this->positive_rate;
    }

    public function setPositiveRate(?string $positive_rate): self
    {
        $this->positive_rate = $positive_rate;

        return $this;
    }

    public function getNegativeRate(): ?string
    {
        return $this->negative_rate;
    }

    public function setNegativeRate(?string $negative_rate): self
    {
        $this->negative_rate = $negative_rate;

        return $this;
    }
}
