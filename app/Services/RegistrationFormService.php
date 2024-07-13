<?php

namespace App\Services;

use App\Repositories\RegistrationFormRepository;
use Illuminate\Support\Facades\DB;

class RegistrationFormService
{
    protected RegistrationFormRepository $registrationFormRepository;

    public function __construct(RegistrationFormRepository $registrationFormRepository){
        $this->registrationFormRepository = $registrationFormRepository;
    }

    /**
     * @param array $data
     * @return void
     * @throws \Exception
     */
    public function store(array $data)
    {
        DB::beginTransaction();

        try {
            $this->registrationFormRepository->store($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

    }

}
