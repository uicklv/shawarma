<?php


namespace App;


class ShawarmaGovyazhaya implements ShawarmaInterface
{

    private $cost = 75;
    private $ingredients = array(
        'чесночный соус',
        'говяжый окорок',
        'огурцы маринованные',
        'маринованный лук с барбарисом и зеленью',
        'мясо куриное',
        'салат коул слоу',
        'тандырный лаваш',
        'помидоры свежие',
        'хумус',
        'соус тахин'
    );
    private $title = 'Шаурма говяжья';

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