<?php

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados[] = ["nome" => "Acre", "uf" => "AC", "regiao" => "Norte", "pais_id" => 26];
        $estados[] = ["nome" => "Alagoas", "uf" => "AL", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Amapá", "uf" => "AP", "regiao" => "Norte", "pais_id" => 26];
        $estados[] = ["nome" => "Amazonas", "uf" => "AM", "regiao" => "Norte", "pais_id" => 26];
        $estados[] = ["nome" => "Bahia", "uf" => "BA", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Ceará", "uf" => "CE", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Distrito Federal", "uf" => "DF", "regiao" => "Centro-Oeste", "pais_id" => 26];
        $estados[] = ["nome" => "Espírito Santo", "uf" => "ES", "regiao" => "Sudeste", "pais_id" => 26];
        $estados[] = ["nome" => "Goiás", "uf" => "GO", "regiao" => "Centro-Oeste", "pais_id" => 26];
        $estados[] = ["nome" => "Maranhão", "uf" => "MA", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Mato Grosso", "uf" => "MT", "regiao" => "Centro-Oeste", "pais_id" => 26];
        $estados[] = ["nome" => "Mato Grosso do Sul", "uf" => "MS", "regiao" => "Centro-Oeste", "pais_id" => 26];
        $estados[] = ["nome" => "Minas Gerais", "uf" => "MG", "regiao" => "Sudeste", "pais_id" => 26];
        $estados[] = ["nome" => "Pará", "uf" => "PA", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Paraíba", "uf" => "PB", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Paraná", "uf" => "PR", "regiao" => "Sul", "pais_id" => 26];
        $estados[] = ["nome" => "Pernambuco", "uf" => "PE", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Piauí", "uf" => "PI", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Rio de Janeiro", "uf" => "RJ", "regiao" => "Sudeste", "pais_id" => 26];
        $estados[] = ["nome" => "Rio Grande do Norte", "uf" => "RN", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Rio Grande do Sul", "uf" => "RS", "regiao" => "Sul", "pais_id" => 26];
        $estados[] = ["nome" => "Rondônia", "uf" => "RO", "regiao" => "Norte", "pais_id" => 26];
        $estados[] = ["nome" => "Roraima", "uf" => "RR", "regiao" => "Norte", "pais_id" => 26];
        $estados[] = ["nome" => "Santa Catarina", "uf" => "SC", "regiao" => "Sul", "pais_id" => 26];
        $estados[] = ["nome" => "São Paulo", "uf" => "SP", "regiao" => "Sudeste", "pais_id" => 26];
        $estados[] = ["nome" => "Sergipe", "uf" => "SE", "regiao" => "Nordeste", "pais_id" => 26];
        $estados[] = ["nome" => "Tocantins", "uf" => "TO", "regiao" => "Norte", "pais_id" => 26];

        DB::table('estados')->insert($estados);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete("DELETE FROM estados");
    }
}
