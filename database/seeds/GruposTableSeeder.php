<?php

use Illuminate\Database\Seeder;
use App\Model\Grupo;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('grupos')->insert([
        'id' => 1,
        'nome' => 'Raiz',
        'descricao' => 'Raiz dos diretórios',
        'grupo_id' => 1,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      DB::table('grupos')->insert([
        'nome' => 'Xadrez',
        'descricao' => 'Tudo que preciso para me tornar um grande jogador de xadrez',
        'grupo_id' => 1,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      DB::table('grupos')->insert([
        'nome' => 'Cursos',
        'descricao' => 'Todos os cursos: os pagos e os não pagos',
        'grupo_id' => 1,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      DB::table('grupos')->insert([
        'nome' => 'Laravel',
        'descricao' => 'Laravel Framework, php, artisan, eloquent, tinker e outras excelentes ideias.',
        'grupo_id' => 3,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      DB::table('grupos')->insert([
        'nome' => 'Java',
        'descricao' => 'Linguagem Java, Spring Framework, JSF, Angular e outras. ',
        'grupo_id' => 3,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      DB::table('grupos')->insert([
        'nome' => 'Le pouvoir de votre l\'esprit',
        'descricao' => 'Tous que vous devoir apprendre pour aller plus loin sur votre vie',
        'grupo_id' => 3,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      DB::table('grupos')->insert([
        'nome' => 'Docker',
        'descricao' => 'Peut-être le cours le plus important parmi eux tous',
        'grupo_id' => 3,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      DB::table('grupos')->insert([
        'nome' => 'Linux Mint',
        'descricao' => 'Mint est la distribution Linux la plus facile à utiliser parmi toutes les autres',
        'grupo_id' => 3,
        'created_at' => now(-3),
        'updated_at' => now(-3),
      ]);
      factory(Grupo::class, 20)->create();
    }
}
