<?php

namespace App\Services;

use App\Http\Requests\Backend\StoreRegistrationFormRequest;
use App\Http\Requests\Frontend\FrontendStoreRegistrationFormRequest;
use App\Repositories\RegistrationFormRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\FileUploads\HandleSpladeFileUploads;
use ProtoneMedia\Splade\FileUploads\SpladeFile;

class RegistrationFormService
{
    protected RegistrationFormRepository $registrationFormRepository;

    public function __construct(RegistrationFormRepository $registrationFormRepository){
        $this->registrationFormRepository = $registrationFormRepository;
    }

    /**
     * @param FrontendStoreRegistrationFormRequest|StoreRegistrationFormRequest $data
     * @return void
     * @throws \Exception
     */
    public function store(FrontendStoreRegistrationFormRequest|StoreRegistrationFormRequest $request)
    {
        DB::beginTransaction();


        try {
            $model = $this->registrationFormRepository->store($request->validated());
            foreach($request->file('images') as $image){
                $path = 'uploads/photos/' . $image->getClientOriginalName(); // Use the original name to avoid overwriting
                Storage::disk('public')->put($path, file_get_contents($image->getRealPath()));
                $model->addMedia(storage_path('app/public/'.$path))->toMediaCollection('images');
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

    }

}
