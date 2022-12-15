<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\Groupe;
use App\Models\Apprenant;
use App\Models\Formateur;
use Illuminate\Support\Str;
use App\Models\Annee_formation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 0; $i < 5; $i++) {
        //     Formateur::create(
        //         [
                   
        //             "Nom _formateur"=> Str::random(8),
        //             "Prenom_formateur"=> Str::random(8),
        //             "Email_formateur"=> Str::random(8).'@gmail.com',
        //             "Telephone"=> Str::random(8),
        //             "Adress"=> Str::random(8),
        //             "CIN"=> Str::random(8),
        //             "Image"=> Str::random(8),
                                
        //             // 'date_recuperation' => Carbon::now()
        //         ]
        //     );
        //     Apprenant::create(
        //         [
        //             'Nom'=> Str::random(8),
        //             'Prenom'=> Str::random(8),
        //             'Email'=> Str::random(8),
        //             'Date_naissance'=> Carbon::parse(8),
        //             'Telephone'=> Str::random(8),
        //             'Adress'=> Str::random(8),
        //             'CIN'=> Str::random(8),
        //             'Image'=> Str::random(8),
                   
                   
        //         ]
        //     );
        //     Groupe::create(
                
        //         [
        //         'Nom_groupe'=> Str::random(8),
        //         'id_Annee_formation'=> rand(1,8),
        //             "Formateur_id"=> rand(1,8),
        //             'Logo'=> Str::random(8),
        //         ]
        //     );

        //     Annee_formation::create(
                
        //         [
        //         'Annee_scolaire'=> Carbon::parse(8)
               
        //         ]
        //     );

        // }












        foreach (range(1,10) as $index) {

            DB::table('formateur')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);

            DB::table('teachers')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);

            DB::table('courses')->insert([
                'title' => $faker->sentence(4),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
}

        foreach (range(1,50) as $index) {
            DB::table('course_student')->insert([
                'course_id' => rand(1,10),
                'student_id' => rand(1,10),
            ]);
        }

    }
}