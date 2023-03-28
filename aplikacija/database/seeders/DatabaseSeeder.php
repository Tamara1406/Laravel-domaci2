<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::truncate();
        \App\Models\Aranzman::truncate();
        \App\Models\TipAranzmana::truncate();
        \App\Models\Mesto::truncate();

        $user = \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $mesto1 = \App\Models\Mesto::create([
            'naziv_mesta'=>'Rim'
        ]);
        $mesto2 = \App\Models\Mesto::create([
            'naziv_mesta'=>'Madrid'
        ]);
        $mesto3 = \App\Models\Mesto::create([
            'naziv_mesta'=>'Berlin'
        ]);

        $tip1 = \App\Models\TipAranzmana::create([
            'naziv_tipa_aranzmana'=>'Izlet'
        ]);
        $tip2 = \App\Models\TipAranzmana::create([
            'naziv_tipa_aranzmana'=>'Obilazak - 7 dana'
        ]);

        $ar1 = \App\Models\Aranzman::create([
            'naziv'=>'Italija',
            'tip_aranzmana_id'=> $tip2->id,
            'mesto_id'=> $mesto1->id,
            'user_id'=> 1
        ]);
        $ar2 = \App\Models\Aranzman::create([
            'naziv'=>'Spanija',
            'tip_aranzmana_id'=> $tip2->id,
            'mesto_id'=> $mesto2->id,
            'user_id'=> 1
        ]);
    }
}
