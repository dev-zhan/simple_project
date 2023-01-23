<?php

class Book
{
    private ?int $id;
    private ?string $name;
    private ?int $author_id;
    private ?string $description;
    private ?int $page_count;

    public function __construct($data = [])
    {
        $this->id= $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->author_id = $data['author_id'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->page_count = $data['page_count'] ?? null;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getAuthorId(): ?int
    {
        return $this->author_id;
    }

    /**
     * @param int|null $author_id
     */
    public function setAuthorId(?int $author_id): void
    {
        $this->author_id = $author_id;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getPageCount(): ?int
    {
        return $this->page_count;
    }

    /**
     * @param int|null $page_count
     */
    public function setPageCount(?int $page_count): void
    {
        $this->page_count = $page_count;
    }

    public function toArray() : array{
        return[
            'id' =>$this->getId(),
            'name'=>$this->getName(),
            'author_id'=>$this->getAuthorId(),
            'description'=>$this->getDescription(),
            'page_count'=>$this->getPageCount()
        ];
    }


}