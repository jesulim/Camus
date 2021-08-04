<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_museo' => $this->faker->name(),
            'departamento' => $this->faker->state(),
            'provincia' => $this->faker->city(),
            'localidad' => $this->faker->country(),
            'direccion' => $this->faker->streetAddress(),
            'ubicacion' => $this->faker->sentence(6),
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement([1,2]),
            'epoca' => $this->faker->sentence(2),
            'autor' => $this->faker->name(),
            'atribucion' => $this->faker->name(),
            'tecnica' => $this->faker->sentence(4),
            'n_inventario' => $this->faker->ean8(),
            'procedencia' => $this->faker->randomElement([1,2,3,4,5]),
            'estado' => $this->faker->randomElement([1,2,3,4,5,6]),
            'marcas' => $this->faker->sentence(20),
            'alto' => $this->faker->randomFloat(2,0,500),
            'largo' => $this->faker->randomFloat(2,0,500),
            'ancho' => $this->faker->randomFloat(2,0,500),
            'descripcion' => $this->faker->text(500),
            'image' => 'cards/' . $this->faker->image('public/storage/cards', 640, 480, null, false),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
