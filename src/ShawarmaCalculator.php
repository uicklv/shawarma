<?php


namespace App;



class ShawarmaCalculator
{
    private $purchase = [];

    public function getPurchase()
    {
        return $this->purchase;
    }

    public function add(ShawarmaInterface $shawarma)
    {
        $array = array('cost' => $shawarma->getCost(), 'ingredients' => $shawarma->getIngredients(), 'title' => $shawarma->getTitle());
        array_push($this->purchase, $array);

    }

    public function ingredients()
    {
        $ing = [];
        foreach ($this->purchase as $key => $value)
        {
             foreach ($value['ingredients'] as $k => $v)
            {
                if (!in_array($v, $ing)) {
                    $ing[] = $v;
                }
            }
        }

        return $ing;

    }

    public function price()
    {
        $price = 0;
      foreach ($this->purchase as $key => $value)
      {
         $price += $value['cost'];
      }

      return $price;

    }





}