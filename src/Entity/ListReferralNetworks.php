<?php

namespace App\Entity;

use App\Repository\ListReferralNetworksRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListReferralNetworksRepository::class)]
class ListReferralNetworks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $referral_networks_id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $owner_id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $owner_name;

    #[ORM\ManyToOne(targetEntity: Pakege::class, inversedBy: 'listReferralNetworks')]
    #[ORM\JoinColumn(nullable: false)]
    private $pakege;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $unique_code;

    #[ORM\Column(type: 'string', nullable: true)]
    private $network_code;

    #[ORM\Column(type: 'string',length: 100, nullable: true)]
    private $client_code;


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

    public function getReferralNetworksId(): ?int
    {
        return $this->referral_networks_id;
    }

    public function setReferralNetworksId(?int $referral_networks_id): self
    {
        $this->referral_networks_id = $referral_networks_id;

        return $this;
    }

    public function getOwnerId(): ?int
    {
        return $this->owner_id;
    }

    public function setOwnerId(?int $owner_id): self
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    public function getOwnerName(): ?string
    {
        return $this->owner_name;
    }

    public function setOwnerName(?string $owner_name): self
    {
        $this->owner_name = $owner_name;

        return $this;
    }

    public function getPakege(): ?Pakege
    {
        return $this->pakege;
    }

    public function setPakege(?Pakege $pakege): self
    {
        $this->pakege = $pakege;

        return $this;
    }
    public function __toString()
    {
      return $this->getPakege();
    }

    public function getUniqueCode(): ?string
    {
        return $this->unique_code;
    }

    public function setUniqueCode(?string $unique_code): self
    {
        $this->unique_code = $unique_code;

        return $this;
    }

    public function getNetworkCode(): ?string
    {
        return $this->network_code;
    }

    public function setNetworkCode(?string $network_code): self
    {
        $this->network_code = $network_code;

        return $this;
    }

    public function getClientCode(): ?string
    {
        return $this->client_code;
    }

    public function setClientCode(?string $client_code): self
    {
        $this->client_code = $client_code;

        return $this;
    }
}