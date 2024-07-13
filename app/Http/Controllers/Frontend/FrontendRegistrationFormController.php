<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\FrontendStoreRegistrationFormRequest;
use App\Services\RegistrationFormService;
use ProtoneMedia\Splade\Facades\Toast;

class FrontendRegistrationFormController
{
    protected RegistrationFormService $registrationFormService;

    public function __construct(RegistrationFormService $registrationFormService){
        $this->registrationFormService = $registrationFormService;
    }

    public function store(FrontendStoreRegistrationFormRequest $request)
    {
        try {
            $this->registrationFormService->store($request->validated());
            Toast::title('„მადლობა!“')
                ->autoDismiss(5);
            return redirect()->route('home.index');
        }catch (\Exception $e){
            dd($e);
            Toast::warning()
                ->title('Error creating backend user parameter: ' . $e->getMessage())
                ->autoDismiss(5);
        }
    }
}