<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $menus = [
            [
                'name' => 'MiloDino',
                'restaurant' => 'SERENITEA',
                'price' => '50.00',
                'video_url' => 'https://youtube.com/shorts/5_8FBizbyVo?feature=share',
                'assets' => 'milodino.jpg',
            ],
        ];

        foreach ($menus as $menu) {
            // Check if the menu already exists in the database
            $existingMenu = Menu::where('name', $menu['name'])->first();
    
            if (!$existingMenu) {
                Menu::create($menu);
            }
        }
}
}
