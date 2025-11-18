<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tiers')->insert([
            [
                'id' => 1,
                'name' => 'Basic',
                'description' => 'La membresía Basic ofrece acceso esencial al coworking con conectividad premium, café y bebidas ilimitadas, espacios de bienestar y soporte tecnológico. Ideal para quienes necesitan un espacio confiable sin requerir servicios avanzados.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Flex',
                'description' => 'La membresía Flex suma versatilidad al permitir mayor acceso a servicios internos como el centro de impresión, opciones de movilidad y un uso más flexible de las áreas comunes. Perfecta para profesionales con rutinas híbridas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Premium',
                'description' => 'El plan Premium está diseñado para usuarios que trabajan diariamente en el cowork. Incluye acceso a salas de reunión equipadas y a la cabina de podcast, además de servicios internos ampliados que facilitan el trabajo profesional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Platinum',
                'description' => 'La membresía Platinum ofrece la experiencia más completa, con prioridad en instalaciones internas, estacionamiento reservado, servicios administrativos premium y acceso extendido a áreas exclusivas. Ideal para empresas y equipos corporativos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
