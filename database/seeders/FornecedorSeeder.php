<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'fornecedor 01';
        $fornecedor->site = 'fornecedor01.com.br';
        $fornecedor->uf = 'ba';
        $fornecedor->email = 'contato@fornecedor01.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 02',
            'site' => 'fornecedor02.com.br',
            'uf' => 'ba',
            'email' => 'contato@fornecedor02.com.br'

        ]);

        DB::table('fornecedores')->insert([

                'nome' => 'Fornecedor 03',
                'site' => 'fornecedor03.com.br',
                'uf' => 'ba',
                'email' => 'contato@fornecedor03.com.br'


        ]);
    }
}
