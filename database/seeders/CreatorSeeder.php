<?php

namespace Database\Seeders;

use App\Models\Creator;
use Illuminate\Database\Seeder;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Creator::create(['id' => '1', 'nome' => 'Igor Jeuhan', 'especialidade' => 'wf', 'contato' => '38 998559690', 'tipo' => '2']);
    }
}
