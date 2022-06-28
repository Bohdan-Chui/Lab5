<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $doctor = Doctor::create([
            'name' => 'Басанько Наталія',
            'profession' => 'Ендокринолог',
            'description' => 'Лікар ендокринолог найвищої категорії. Великий досвід роботи з найкращими відгуками.'
        ]);
        $doctor = Doctor::create([
            'name' => 'Колесник Тарас',
            'profession' => 'Отоларинголог',
            'description' => 'Лікар отоларинголог найвищої категорії. Великий досвід роботи з найкращими відгуками.'
        ]);
        $doctor = Doctor::create([
            'name' => 'Корчака Олег',
            'profession' => 'Хірург',
            'description' => 'Лікар хірург найвищої категорії. Великий досвід роботи з найкращими відгуками.'
        ]);
        $doctor = Doctor::create([
            'name' => 'Лізогуб Інна',
            'profession' => 'Дерматолог',
            'description' => 'Лікар дерматолог найвищої категорії. Великий досвід роботи з найкращими відгуками.'
        ]);
    }
}
