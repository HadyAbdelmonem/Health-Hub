<?php

namespace Modules\Website\database\factories;

use \Modules\Website\app\Models\StoresFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Website\app\Models\Stores;

class StoresFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Stores::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {


        $name = $this->faker->unique()->company;
        return [
            'admin_id' => 1, // or use an existing admin_id
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph,
            'logo_image' => $this->faker->imageUrl(200, 200, 'business', true, 'logo'),
            'cover_image' => $this->faker->imageUrl(1200, 300, 'business', true, 'cover'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'commission_rate' => $this->faker->randomFloat(2, 0, 20),
            'is_approved' => $this->faker->randomElement(['yes', 'no']),
        ];
    }
}
