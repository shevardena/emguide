<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\FrontendStoreRegistrationFormRequest;
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
            'countries' => Country::all(),
            'genders' => $this->homeService->getGenders(),
            'citizenships' => $this->homeService->getCitizenShips(),
            'purpose_of_visits' => $this->homeService->getPurposeOfVisits(),
        ]);
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function agreement(){
        return view('frontend.pages.agreement');
    }

    public function saveForm(FrontendStoreRegistrationFormRequest $request){

    }

    public function getCities(int $country_id)
    {
        return  City::where('country_id', $country_id)->get();
    }

}
