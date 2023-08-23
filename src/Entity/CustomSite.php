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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar2 = null;

    #[Vich\UploadableField(mapping: 'post_photos', fileNameProperty: 'avatar2')]
    private $avatar2FileVich;

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

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $about = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkFacebook = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkTwitter = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkLinkedin = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $legaleNotice = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatarColor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slogan = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sloganFooter = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titleAbout = null;

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
            $this->updatedAt = new \DateTimeImmutable();
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
        $this->cvFileVich = $cvFile;

        if ($cvFile) {
            $this->updatedAt = new \DateTimeImmutable();
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

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(?string $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getLinkFacebook(): ?string
    {
        return $this->linkFacebook;
    }

    public function setLinkFacebook(?string $linkFacebook): self
    {
        $this->linkFacebook = $linkFacebook;

        return $this;
    }

    public function getLinkTwitter(): ?string
    {
        return $this->linkTwitter;
    }

    public function setLinkTwitter(?string $linkTwitter): self
    {
        $this->linkTwitter = $linkTwitter;

        return $this;
    }

    public function getLinkLinkedin(): ?string
    {
        return $this->linkLinkedin;
    }

    public function setLinkLinkedin(?string $linkLinkedin): self
    {
        $this->linkLinkedin = $linkLinkedin;

        return $this;
    }

    public function getLegaleNotice(): ?string
    {
        return $this->legaleNotice;
    }

    public function setLegaleNotice(?string $legaleNotice): self
    {
        $this->legaleNotice = $legaleNotice;

        return $this;
    }

    public function getAvatarColor(): ?string
    {
        return $this->avatarColor;
    }

    public function setAvatarColor(?string $avatarColor): self
    {
        $this->avatarColor = $avatarColor;

        return $this;
    }

    public function getAvatar2(): ?string
    {
        return $this->avatar2;
    }

    public function setAvatar2(?string $avatar2): self
    {
        $this->avatar2 = $avatar2;

        return $this;
    }

    public function setAvatar2FileVich(File $avatar2 = null)
    {
        $this->avatar2FileVich = $avatar2;

        if ($avatar2) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }


    /**
     * @return File|null
     */
    public function getAvatar2FileVich()
    {
        return $this->avatar2FileVich;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }

    public function setSlogan(?string $slogan): self
    {
        $this->slogan = $slogan;

        return $this;
    }

    public function getSloganFooter(): ?string
    {
        return $this->sloganFooter;
    }

    public function setSloganFooter(?string $sloganFooter): self
    {
        $this->sloganFooter = $sloganFooter;

        return $this;
    }

    public function getTitleAbout(): ?string
    {
        return $this->titleAbout;
    }

    public function setTitleAbout(?string $titleAbout): self
    {
        $this->titleAbout = $titleAbout;

        return $this;
    }
}
