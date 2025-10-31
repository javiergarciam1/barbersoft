<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
{
    \App\Models\Cliente::factory()->create([
        'nombre'=>'Carlos Pérez','telefono'=>'3001234567','correo'=>'carlos@example.com'
    ]);

    \App\Models\Barbero::factory()->create([
        'nombre'=>'Andrés Barber','telefono'=>'3007654321'
    ]);

    \App\Models\Servicio::factory()->insert([
        ['nombre'=>'Corte clásico','precio'=>15000,'duracion'=>30],
        ['nombre'=>'Barba','precio'=>10000,'duracion'=>20],
        ['nombre'=>'Corte + Barba','precio'=>23000,'duracion'=>50],
    ]);
}

}



