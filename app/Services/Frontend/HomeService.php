<?php

namespace App\Services\Frontend;

class HomeService
{
    public function getGenders()
    {
        return [
            [
                'id' => 'male',
                'name' => 'კაცი',
            ],
            [
                'id' => 'female',
                'name' => 'ქალი',
            ]
        ];
    }

    public function getCitizenships()
    {
        return [
            [
                'id' => 'საქართველო',
                'name' => 'საქართველო'
            ]
        ];
    }
}
