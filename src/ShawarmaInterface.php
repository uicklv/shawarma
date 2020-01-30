<?php


namespace App;


interface ShawarmaInterface
{

    public function getCost(): float;

    public function getIngredients(): array;

    public function getTitle(): string;

}