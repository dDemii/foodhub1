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
                'recipe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'video_url' => 'https://youtube.com/shorts/5_8FBizbyVo?feature=share',
            ],
            [
                'name' => 'Dimmie',
                'restaurant' => 'AAAAA',
                'recipe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'video_url' => 'https://youtube.com/shorts/5_8FBizbyVo?feature=share',
            ],
            [
                'name' => 'Rylii',
                'restaurant' => 'BBBBB',
                'recipe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'video_url' => 'https://youtube.com/shorts/5_8FBizbyVo?feature=share',
            ],
            [
                'name' => 'Adrey',
                'restaurant' => 'CCCCC',
                'recipe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'video_url' => 'https://youtube.com/shorts/5_8FBizbyVo?feature=share',
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
