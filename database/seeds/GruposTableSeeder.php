<?php

use Illuminate\Database\Seeder;
use App\model\Grupo;

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
      factory(Grupo::class, 20)->create();
    }
}
