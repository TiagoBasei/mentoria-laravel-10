<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    
    public function run(): void
    {
       produto::create([
            'nome_produto' => 'Corretor de Imóveis',
            'valor' => '20.00',
       ]);
    }
}
