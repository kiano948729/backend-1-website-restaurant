<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Dish;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $orders = Order::all();
        $dishes = Dish::all();

        foreach ($orders as $order) {
            $order->items()->createMany([
                [
                    'dish_id' => $dishes->random()->id,
                    'quantity' => 2,
                    'price' => 8.50,
                ],
                [
                    'dish_id' => $dishes->random()->id,
                    'quantity' => 1,
                    'price' => 6.50,
                ],
            ]);
        }
    }
}
