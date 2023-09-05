<?php

namespace App\Entity;

use App\Repository\BobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BobRepository::class)]
class Bob
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $tst = null;

    #[ORM\OneToMany(mappedBy: 'bob', targetEntity: Pol::class, orphanRemoval: true)]
    private Collection $pols;

    public function __construct()
    {
        $this->pols = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTst(): ?string
    {
        return $this->tst;
    }

    public function setTst(string $tst): static
    {
        $this->tst = $tst;

        return $this;
    }

    /**
     * @return Collection<int, Pol>
     */
    public function getPols(): Collection
    {
        return $this->pols;
    }

    public function addPol(Pol $pol): static
    {
        if (!$this->pols->contains($pol)) {
            $this->pols->add($pol);
            $pol->setBob($this);
        }

        return $this;
    }

    public function removePol(Pol $pol): static
    {
        if ($this->pols->removeElement($pol)) {
            // set the owning side to null (unless already changed)
            if ($pol->getBob() === $this) {
                $pol->setBob(null);
            }
        }

        return $this;
    }
}
