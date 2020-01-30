<?php


namespace App;


class ShawarmaBaranina implements ShawarmaInterface
{

    private $cost = 85;
    private $ingredients = array(
        'острый соус',
        'огурцы маринованные',
        'кинза',
        'помидоры свежие',
        'маринованный лук с барбарисом и зеленью',
        'мясо баранины',
        'лаваш арабский',
    );
    private $title = 'Шаурма из Баранины';

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

}