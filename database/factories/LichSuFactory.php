<?php

namespace Database\Factories;

use App\Models\NguoiDung;
use App\Models\Truyen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LichSu>
 */
class LichSuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition():array
    {
        return [
            'MaNguoiDung' => NguoiDung::query()->inRandomOrder()->value('id'),
            'MaTruyen' => Truyen::query()->inRandomOrder()->value('id'),
        ];
    }
}