<?php

namespace App\Entity;

use DateTime;

class Task
{
    public function __construct(
        private string $name,
        private DateTime $createdAt,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
