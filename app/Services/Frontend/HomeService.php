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

    public function getPurposeOfVisits()
    {
        return [
            [
                'id' => 'ტურიზმი',
                'name' => 'ტურიზმი'
            ],
            [
                'id' => 'სწავლა უმაღლეს/სხვა სასწავლებელში',
                'name' => 'სწავლა უმაღლეს/სხვა სასწავლებელში'
            ],
            [
                'id' => 'სამუშაო',
                'name' => 'სამუშაო'
            ],
            [
                'id' => 'დროებით/მუდმივად ცხოვრება',
                'name' => 'დროებით/მუდმივად ცხოვრება'
            ],
            [
                'id' => 'მკურნალობა',
                'name' => 'მკურნალობა'
            ],
            [
                'id' => 'სხვა',
                'name' => 'სხვა'
            ],
        ];
    }
}
