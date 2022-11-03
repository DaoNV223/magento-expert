<?php
declare(strict_types=1);

namespace DaoNguyen\Playground\Model;

class Person
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get name of the person.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
