<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeederTable extends Seeder
{
    private $record;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->record = [
            [
                'name' => 'admin',
                'email'=> 'admin@gmail.com',
                'password' => bcrypt(123456),
            ],
            [
                'name' => 'writer',
                'email'=> 'writer@gmail.com',
                'password' => bcrypt(123456),
            ],
            [
                'name' => 'editor',
                'email'=> 'editor@gmail.com',
                'password' => bcrypt(123456),
            ],
            [
                'name' => 'publisher',
                'email'=> 'publisher@gmail.com',
                'password' => bcrypt(123456),
            ],
        ];
        User::insert($this->record);
    }
}
