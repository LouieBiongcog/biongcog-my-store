<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Smart Home Devices', 'description' => 'AI assistants, smart lights, and home automation'],
            ['name' => 'Outdoor & Adventure', 'description' => 'Camping gear, hiking equipment, and travel essentials'],
            ['name' => 'Pet Supplies', 'description' => 'Food, toys, and accessories for pets'],
            ['name' => 'Music & Instruments', 'description' => 'Guitars, keyboards, and DJ equipment'],
            ['name' => 'DIY & Crafting', 'description' => 'Art supplies, tools, and DIY kits'],
            ['name' => 'Office & Workspaces', 'description' => 'Desks, chairs, and productivity tools'],
            ['name' => 'Automotive Tech', 'description' => 'GPS devices, car chargers, and dash cams'],
            ['name' => 'Collectibles & Memorabilia', 'description' => 'Action figures, trading cards, and rare items'],
            ['name' => 'Photography & Videography', 'description' => 'Cameras, tripods, and lighting equipment'],
            ['name' => 'Eco-Friendly Products', 'description' => 'Reusable bags, solar gadgets, and sustainable items'],
        ];

        foreach($categories as $category) {
            \App\Models\Categories::create($category);
        }
    }
}
