## Migration/Seed 

<p>Contem as migrations e seeds de Cidade(Brasil), Estado(Brasil) e Pais (Mundo)</p>
<p>Para executar copiar os arquivos no seu projeto laravel, rodar : </p>

`php artisan migrate` 
para criar as tabelas depois de configuradas

`composer dump-autoload  ` depois de configurar o DatabaseSeeder.php para
 
`         
$this->call([
      PaisSeeder::class,
      EstadosSeeder::class,
      CidadesSeeder::class,
 ]);
`

Rodar o seed.