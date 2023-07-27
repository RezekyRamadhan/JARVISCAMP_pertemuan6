<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tesk extends Model
{
    use HasFactory;

    private static $taskss = [
        [
            'id' => 1,
            'name' => 'Tugas 3 statistik',
            'description' => 'Menghitung Probabilitas pada data yang di berikan',
            'deadline' => '2023-02-27',
            'status' => 'Selesai',
        ],
        [
            'id' => 2,
            'name' => 'Tugas Matematik',
            'description' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas accusamus, voluptates tempora vel nihil numquam autem eveniet, ducimus sequi veritatis deleniti voluptatem perspiciatis quo expedita, rerum laborum atque asperiores. Rem.',
            'deadline' => '2023-02-27',
            'status' => 'Selesai',
        ],
        [
            'id' => 3,
            'name' => 'Tugas Ips',
            'description' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas accusamus, voluptates tempora vel nihil numquam autem eveniet, ducimus sequi veritatis deleniti voluptatem perspiciatis quo expedita, rerum laborum atque asperiores. Rem.',
            'deadline' => '2023-02-27',
            'status' => 'Selesai',
        ],
        ];

        public static function getAll()
        {
            return collect(self::$taskss);

        }

        public static function getById($id) 
        {
            $posts = static::getAll();
            return $posts->firstWhere('id', $id);
            



        }
}
