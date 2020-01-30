<?php


namespace App;


class ShawarmaOdesskaya implements ShawarmaInterface
{

    private $cost = 69;
    private $ingredients = array(
        'огурцы маринованные',
        'картофель жаренный',
        'чесночный соус',
        'тандырный лаваш',
        'маринованный лук с барбарисом и зеленью',
        'мясо куриное',
        'салат коул слоу',
        'корейская морковь'
    );
    private $title = 'Шаурма Одесская';

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