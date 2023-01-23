<?php

class Author
{
    private ?int $id;
    private ?string $name;

    public function __construct($data = [])
    {
        $this->id= $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
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

    public function toArray() : array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName()
        ];
    }
}