<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "admin",
            "email" => "admin@ad.com",
            "admin" => "true",
            "password" => bcrypt('123456')
        ]);
        
        DB::table('users')->insert([
            "name" => "user",
            "email" => "user@us.com",
            "password" => bcrypt('123456')
        ]);

        $categories = ["Informática", "Desarrollo", "Programación"];

        foreach ($categories as $c) {    
            DB::table('categorias')->insert([
                "nombre" => $c
            ]);
        }
        
        $prioridad = ["Alta", "Media", "Baja"];

        foreach ($prioridad as $p){
            DB::table('priorities')->insert([
                "nombre" => $p
            ]);
        }

        $titles = ["Lorem", "Ipsum", "Sit", "Amet", "Consectetur"];
        $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac commodo justo. Phasellus purus purus, condimentum eu tellus quis, suscipit malesuada purus. Quisque turpis lacus, congue at scelerisque dignissim, aliquet et augue. Nulla suscipit nec eros at pellentesque. Sed vitae accumsan nibh. Proin pharetra, enim non placerat pulvinar, quam arcu aliquam odio, sit amet aliquam neque arcu non risus. Cras ex turpis, egestas nec purus consectetur, lobortis consectetur sapien. Suspendisse tristique accumsan purus ut vehicula. Praesent suscipit, massa quis varius finibus, leo ex auctor nisl, at suscipit velit justo quis nibh. Quisque euismod sem nisl, eu scelerisque nulla pellentesque sit amet. Donec at nulla nibh. Aenean id velit condimentum, pulvinar neque eu, pharetra libero.";

        foreach ($titles as $title) {
            DB::table("tickets")->insert([
                "title" => $title,
                "mensaje" => $lorem,
                "priority_id" => rand(1,3),
                "categoria_id" => rand(1,3),
                "user_id" => rand(1, 2)
            ]);
        }
        
    }
}
