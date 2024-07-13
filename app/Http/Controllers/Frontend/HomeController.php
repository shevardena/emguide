<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\SaveFormRequest;
use App\Models\City;
use App\Models\Country;
use App\Services\Frontend\HomeService;

class HomeController
{
    protected HomeService $homeService;

    public function __construct(HomeService $homeService){
        $this->homeService = $homeService;
    }

    public function index(){
        return view('frontend.pages.home',[
            'countries' => Country::all()
        ]);
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function saveForm(SaveFormRequest $request){

    }

    public function getCities(int $country_id)
    {
        return  City::where('country_id', $country_id)->get();
    }

}
