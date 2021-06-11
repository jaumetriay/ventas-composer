<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente; 
class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory()->times(100)->create(); 
    }
}
