<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories=$this->faker->randomElements(['men',"men's",'t-shirt','shoe','trouser',"women","women's","dress","skirt","perfumes","MakeUp"],rand(2,5));
        return [
            
            //
            'name'=>$this->faker->word,
            'price'=>$this->faker->numberBetween(0, 10000),
            'rating'=>$this->faker->numberBetween(1,5),
            'amount' =>$this->faker->numberBetween(0,100),
            'discount' =>$this->faker->optional(0.4)->numberBetween(100, 2000) / 100,
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['new','used']),
            'category'=>implode(',',$categories),//to separate them with comma
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
