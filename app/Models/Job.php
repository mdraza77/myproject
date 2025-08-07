<?php

namespace App\Models;

use \Illuminate\Support\Arr;


use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function all($columns = ['*']): array
    {
        return [
            [
                "id" => 1,
                "title" => "SDE",
                "salary" => "50,000",
            ],
            [
                "id" => 2,
                "title" => "Laravel Developer",
                "salary" => "60,000",
            ],
            [
                "id" => 3,
                "title" => "Programmer",
                "salary" => "70,000",
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (! $job) {
            abort(404);
        }
        return $job;
    }
}
