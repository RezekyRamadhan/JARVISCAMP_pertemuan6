<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 3 statistik',
            'description' => 'Menghitung Probabilitas pada data yang di berikan',
            'deadline' => '2023-02-27',
            'status' => 'Selesai',
        ],
        [
            'id' => 2,
            'name' => 'Tugas 3 statistik',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur itaque a? Illo, explicabo veritatis? Voluptate quo magnam soluta doloribus eligendi necessitatibus vitae sunt culpa nulla eius. Nam, ut consequuntur.',
            'deadline' => '2023-02-28',
            'status' => 'Selesai',
        ],
        [
            'id' => 3,
            'name' => 'Tugas 3 statistik',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur itaque a? Illo, explicabo veritatis? Voluptate quo magnam soluta doloribus eligendi necessitatibus vitae sunt culpa nulla eius. Nam, ut consequuntur.',
            'deadline' => '2023-02-29',
            'status' => 'Belum Selesai',
        ],
    ];

    public static function getAll()
     {
        return self::$tasks;
    }

    public static function getById($id)
    {
        
    
    }
}
