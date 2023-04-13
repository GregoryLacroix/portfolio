<?php

namespace App\Entity;

use App\Repository\CustomSiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Gedmo\Mapping\Annotation as Gedmo;

#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: CustomSiteRepository::class)]
class CustomSite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $navColor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $footerColor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $copyrightColor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contentColor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logoFile = null;

    #[Vich\UploadableField(mapping: 'post_logos', fileNameProperty: 'logoFile')]
    private $logoFileVich;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photoFile = null;

    #[Vich\UploadableField(mapping: 'post_photos', fileNameProperty: 'photoFile')]
    private $photoFileVich;

    #[Gedmo\Timestampable(on: 'create')]
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[Gedmo\Timestampable(on: 'update')]
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hoverLinkColor = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isActive = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $skills = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cvFile = null;

    #[Vich\UploadableField(mapping: 'post_cv', fileNameProperty: 'cvFile')]
    private $cvFileVich;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNavColor(): ?string
    {
        return $this->navColor;
    }

    public function setNavColor(?string $navColor): self
    {
        $this->navColor = $navColor;

        return $this;
    }

    public function getFooterColor(): ?string
    {
        return $this->footerColor;
    }

    public function setFooterColor(?string $footerColor): self
    {
        $this->footerColor = $footerColor;

        return $this;
    }

    public function getCopyrightColor(): ?string
    {
        return $this->copyrightColor;
    }

    public function setCopyrightColor(?string $copyrightColor): self
    {
        $this->copyrightColor = $copyrightColor;

        return $this;
    }

    public function getContentColor(): ?string
    {
        return $this->contentColor;
    }

    public function setContentColor(?string $contentColor): self
    {
        $this->contentColor = $contentColor;

        return $this;
    }

    public function getLogoFile(): ?string
    {
        return $this->logoFile;
    }

    public function setLogoFile(?string $logoFile): self
    {
        $this->logoFile = $logoFile;

        return $this;
    }

    public function setLogoFileVich(File $logoFile = null)
    {
        $this->logoFileVich = $logoFile;

        if ($logoFile) {
            // $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getLogoFileVich()
    {
        return $this->logoFileVich;
    }


    public function getPhotoFile(): ?string
    {
        return $this->photoFile;
    }

    public function setPhotoFile(?string $photoFile): self
    {
        $this->photoFile = $photoFile;

        return $this;
    }

    public function setPhotoFileVich(File $photoFile = null)
    {
        $this->photoFileVich = $photoFile;

        if ($photoFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getPhotoFileVich()
    {
        return $this->photoFileVich;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getHoverLinkColor(): ?string
    {
        return $this->hoverLinkColor;
    }

    public function setHoverLinkColor(?string $hoverLinkColor): self
    {
        $this->hoverLinkColor = $hoverLinkColor;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(?string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getCvFile(): ?string
    {
        return $this->cvFile;
    }

    public function setCvFile(?string $cvFile): self
    {
        $this->cvFile = $cvFile;

        return $this;
    }

    public function setCvFileVich(File $cvFile = null)
    {
        $this->logoFileVich = $cvFile;

        if ($cvFile) {
            // $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getCvFileVich()
    {
        return $this->cvFileVich;
    }
}
