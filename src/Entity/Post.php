<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     forceEager=false,
 *     normalizationContext={"groups"={"read"}, "enable_max_depth"=false},
 *     denormalizationContext={"groups"={"write"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"write_content_post", "read", "write"})
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Groups({"write_content_post", "read", "write"})
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"write_content_post", "read", "write"})
     */
    private $tags;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ContentPost", inversedBy="posts")
     */
    private $contentPost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getContentPost(): ?ContentPost
    {
        return $this->contentPost;
    }

    public function setContentPost(?ContentPost $contentPost): self
    {
        $this->contentPost = $contentPost;

        return $this;
    }
}
