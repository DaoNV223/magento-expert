<?php
declare(strict_types=1);

namespace DaoNguyen\DependencyInjection\Helper;

class Helper
{
    /**
     * @var string
     */
    private string $text;

    /**
     * @var int
     */
    private int $randomNumber;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
        $this->randomNumber = rand(1, 100);
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->randomNumber;
    }
}
