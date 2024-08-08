<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $toppingChoices = [
            "extra cheese",
            "pepperoni",
            "mushrooms",
            "onions",
            "green peppers",
            "extra olives",
            "bacon",
            "ham",
            "pineapple",
            "artichokes",
            "anchovies",
            "meatballs"
        ];

        for ($i=0; $i < rand(1,4) ; $i++) { 
            # code...
            $toppings[] = Arr::random($toppingChoices);
        }

        $toppings = array_unique($toppings);

        return [
            //
            'id' => rand(1111,99999),
            'user_id' => rand(1,10),
            'size'    => Arr::random(['small', 'medium', 'large' , 'extra-large']),
            'crust'   => Arr::random(['normal','thin' , 'garlic']),
            'toppings' => Arr::random($toppingChoices, rand(1, 5)),
            'status' => Arr::random(['ordered' , 'preparing' , 'baking' , 'checking' , 'ready']),
        ];
    }
}
