<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class ColumnElementCreateElementStyleBackgroundFile extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int
     */
    protected $size;
    /**
     * @var string
     */
    protected $mimeType;
    /**
     * @var bool
     */
    protected $isImage;
    /**
     * @var int|null
     */
    protected $imageWidth;
    /**
     * @var int|null
     */
    protected $imageHeight;
    /**
     * @var \DateTime
     */
    protected $uploadedAt;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var array<string, mixed>
     */
    protected $thumbnails;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $originalName;

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): self
    {
        $this->initialized['mimeType'] = true;
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getIsImage(): bool
    {
        return $this->isImage;
    }

    public function setIsImage(bool $isImage): self
    {
        $this->initialized['isImage'] = true;
        $this->isImage = $isImage;

        return $this;
    }

    public function getImageWidth(): ?int
    {
        return $this->imageWidth;
    }

    public function setImageWidth(?int $imageWidth): self
    {
        $this->initialized['imageWidth'] = true;
        $this->imageWidth = $imageWidth;

        return $this;
    }

    public function getImageHeight(): ?int
    {
        return $this->imageHeight;
    }

    public function setImageHeight(?int $imageHeight): self
    {
        $this->initialized['imageHeight'] = true;
        $this->imageHeight = $imageHeight;

        return $this;
    }

    public function getUploadedAt(): \DateTime
    {
        return $this->uploadedAt;
    }

    public function setUploadedAt(\DateTime $uploadedAt): self
    {
        $this->initialized['uploadedAt'] = true;
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getThumbnails(): iterable
    {
        return $this->thumbnails;
    }

    /**
     * @param array<string, mixed> $thumbnails
     */
    public function setThumbnails(iterable $thumbnails): self
    {
        $this->initialized['thumbnails'] = true;
        $this->thumbnails = $thumbnails;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getOriginalName(): string
    {
        return $this->originalName;
    }

    public function setOriginalName(string $originalName): self
    {
        $this->initialized['originalName'] = true;
        $this->originalName = $originalName;

        return $this;
    }
}
