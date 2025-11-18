<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'id' => 1,
                'title' => 'El coworking impulsa a los emprendedores en 2025',
                'cover' => 'covers/article01.png',
                'summary' => 'Cada vez más profesionales eligen espacios colaborativos para potenciar sus proyectos',
                'content' => 'En los últimos años, los espacios de coworking se consolidaron como una opción ideal para emprendedores, freelancers y pequeñas startups. Según un estudio reciente, el 70% de los trabajadores independientes considera que el coworking mejora su productividad y su red de contactos. En Zyra-Cowork acompañamos este cambio, ofreciendo planes flexibles y un ambiente diseñado para crecer en comunidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Tendencias 2025: el trabajo híbrido llegó para quedarse',
                'cover' => 'covers/article02.png',
                'summary' => 'Las empresas combinan home office y coworking para optimizar la experiencia laboral',
                'content' => 'El modelo híbrido continúa transformando la manera de trabajar. Muchas compañías adoptan el coworking como alternativa al alquiler de oficinas fijas, priorizando la flexibilidad y la comodidad de sus equipos. En Zyra-Cowork, los espacios compartidos permiten a los equipos mantener la cultura de trabajo mientras disfrutan de instalaciones modernas, salas de reuniones y zonas de relax.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Cómo mejorar tu productividad en un espacio de coworking',
                'cover' => 'covers/article03.png',
                'summary' => 'Consejos prácticos para aprovechar al máximo tu membresía en Zyra-Cowork',
                'content' => 'El entorno influye directamente en la concentración y la motivación. Para sacar el máximo provecho de un coworking, se recomienda establecer rutinas, definir objetivos diarios y aprovechar los espacios comunes para el networking. Zyra-Cowork ofrece áreas de trabajo ergonómicas, zonas de descanso y eventos que inspiran nuevas ideas y colaboraciones.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Zyra-Cowork lanza su nueva sala de creatividad',
                'cover' => 'covers/article04.png',
                'summary' => 'Un nuevo espacio pensado para diseñadores, artistas y equipos creativos',
                'content' => 'Zyra-Cowork presenta una nueva sala equipada con pizarras interactivas, iluminación natural y herramientas digitales para fomentar la innovación. El espacio está diseñado para equipos que buscan un entorno inspirador para brainstormings, talleres o producción de contenido. La sala estará disponible para todos los planes de membresía desde diciembre de 2025.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Eventos y networking: claves del éxito en Zyra-Cowork',
                'cover' => 'covers/article05.png',
                'summary' => 'Los encuentros presenciales fortalecen los lazos entre profesionales y generan nuevas oportunidades',
                'content' => 'Más allá del trabajo diario, los eventos de Zyra-Cowork son el corazón de la comunidad. Charlas, afterworks y workshops reúnen a personas con intereses comunes, fomentando la colaboración y el intercambio de conocimientos. Participar en estos encuentros no solo amplía tu red de contactos, sino que también impulsa tu desarrollo profesional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Promo especial: 20% OFF en membresías de verano 2025',
                'cover' => 'covers/article06.png',
                'summary' => 'Zyra-Cowork lanza descuentos exclusivos para nuevos miembros durante enero y febrero',
                'content' => 'Para acompañar a emprendedores y profesionales en el inicio del año, Zyra-Cowork presenta una promoción especial: 20% de descuento en todas las membresías mensuales contratadas entre enero y febrero de 2025. La promo incluye acceso a salas de reuniones, áreas comunes, café ilimitado y participación en eventos exclusivos. Es el momento ideal para sumarte a la comunidad y potenciar tu trabajo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
