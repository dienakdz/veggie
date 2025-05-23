<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement([
            'Cà chua bi', 'Rau muống', 'Bí đỏ', 'Khoai tây', 'Táo xanh', 
            'Xà lách', 'Dưa leo', 'Ớt chuông đỏ', 'Cà rốt', 'Bắp cải', 
            'Nho đen', 'Chuối chín', 'Bưởi da xanh', 'Cam sành', 'Dưa hấu', 
            'Hành lá', 'Tỏi Lý Sơn', 'Gừng tươi', 'Khoai lang', 'Mướp đắng', 
            'Thịt heo ba rọi', 'Thịt bò Úc', 'Cá hồi phi lê', 'Tôm sú', 'Gà ta nguyên con'
        ]);

        return [
            'name'        => ucfirst($name),
            'slug'        => Str::slug($name) . '-' . $this->faker->unique()->numberBetween(1,1000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'description'  => $this->faker->sentence(10),
            'price'       => $this->faker->randomFloat(2, 10000, 200000),
            'stock'       => $this->faker->numberBetween(0,100),
            'status'      => $this->faker->randomElement(['in_stock', 'out_of_stock']),
            'unit'        => $this->faker->randomElement(['kg', 'bó', 'túi', 'hộp'])
        ];
    }
}
