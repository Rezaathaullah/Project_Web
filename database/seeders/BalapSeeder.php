<?php

namespace Database\Seeders;

use App\Models\Balap;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BalapSeeder extends Seeder
{
    public function run(): void
    {
        $balaps =  [
            [
                'id' => 'tt1746090',
                'nama' => 'Marc Márquez',
                'sinopsis' => 'Marc Márquez Alentà (lahir 17 Februari 1993) adalah seorang pembalap Grand Prix Sepeda Motor profesional Spanyol, yang membalap untuk Repsol Honda sejak debutnya di MotoGP pada tahun 2013. Lahir di Cervera, Catalonia, Spanyol, dia dijuluki.',
                'tahun' => 2019,
                'category_id' => 1,
                'tim' => 'HONDA-REPSOL',
                'foto_sampul' => 'macmarques.jpeg',
            ],
            [
                'id' => 'tt0944947',
                'nama' => 'Valentino Rossi',
                'sinopsis' => 'Valentino Rossi (lahir 16 Februari 1979) adalah seorang pembalap MotoGP asal Italia. Dia dikenal dengan sebutan "The Doctor". Valentino Rossi telah menjadi salah satu pembalap paling sukses sepanjang sejarah MotoGP.',
                'tahun' => 2000,
                'category_id' => 1,
                'tim' => 'Yamaha Factory Racing',
                'foto_sampul' => 'rossi.jpeg',
            ],
            [
                'id' => 'tt0111161',
                'nama' => 'Jorge Lorenzo',
                'sinopsis' => 'Jorge Lorenzo Guerrero (lahir 4 Mei 1987) adalah seorang mantan pembalap MotoGP asal Spanyol. Ia merupakan juara dunia MotoGP sebanyak tiga kali (2010, 2012, dan 2015).',
                'tahun' => 2008,
                'category_id' => 1,
                'tim' => 'Ducati Team',
                'foto_sampul' => 'lorenzo.jpeg',
            ],
            [
                'id' => 'tt0108778',
                'nama' => 'Casey Stoner',
                'sinopsis' => 'Casey Joel Stoner (lahir 16 Oktober 1985) adalah mantan pembalap MotoGP asal Australia. Stoner memenangkan dua gelar juara dunia MotoGP pada tahun 2007 dan 2011.',
                'tahun' => 2006,
                'category_id' => 1,
                'tim' => 'Ducati Team',
                'foto_sampul' => 'stoner.jpeg',
            ],
            [
                'id' => 'tt1234567',
                'nama' => 'Dani Pedrosa',
                'sinopsis' => 'Daniel Pedrosa Ramal (lahir 29 September 1985) adalah seorang mantan pembalap Grand Prix Sepeda Motor asal Spanyol. Pedrosa berkompetisi dalam kelas utama MotoGP sepanjang kariernya.',
                'tahun' => 2006,
                'category_id' => 1,
                'tim' => 'Repsol Honda',
                'foto_sampul' => 'danipedrosa.jpeg',
            ],
            [
                'id' => 'tt0109830',
                'nama' => 'Mick Doohan',
                'sinopsis' => 'Michael "Mick" Doohan (lahir 4 Juni 1965) adalah seorang pensiunan pembalap sepeda motor asal Australia yang dikenal sebagai salah satu pembalap terbesar dalam sejarah kelas 500cc/MotoGP. Doohan memenangkan lima gelar juara dunia berturut-turut dari tahun 1994 hingga 1998.',
                'tahun' => 1990,
                'category_id' => 1,
                'tim' => 'Honda Racing Corporation',
                'foto_sampul' => 'nikidohan.jpeg',
            ],
            
        ];
        foreach ($balaps as $balap) {
            Balap::create([
                'id' => $balap['id'],
                'nama' => $balap['nama'],
                'sinopsis' => $balap['sinopsis'],
                'tahun' => $balap['tahun'],
                'category_id' => $balap['category_id'],
                'tim' => $balap['tim'],
                'foto_sampul' => $balap['foto_sampul'],
            ]);
        }

    }
}
