<?php declare(strict_types=1);

namespace Game\Model;

class Gladiator
{
    private string $name;
    private int $attackDamage;
    private int $armor;
    private int $health;


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAttackDamage(): int
    {
        return $this->attackDamage;
    }

    public function setAttackDamage(int $attackDamage): void
    {
        $this->attackDamage = $attackDamage;
    }

    public function getArmor(): int
    {
        return $this->armor;
    }

    public function setArmor(int $armor): void
    {
        $this->armor = $armor;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }


}
