<?php

namespace App\Classes;

class Category
{
    public function index()
    {
        return [
            0 =>
            [
                'id'   => 1,
                'name' => 'Man Fashion',
            ],
            1 =>
            [
                'id'   => 2,
                'name' => 'Woman Fasion',
            ],
            2 =>
            [
                'id'   => 3,
                'name' => 'kids Fashion',
            ],
        ];
    }
}