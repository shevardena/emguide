<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreRegistrationFormRequest;
use App\Http\Requests\Backend\UpdateRegistrationFormRequest;
use App\Interfaces\PermissionRepositoryInterface;
use App\Models\Country;
use App\Repositories\RegistrationFormRepository;
use App\Tables\RegistrationForms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FileUploads\ExistingFile;

class RegistrationFormController extends Controller
{
    protected RegistrationFormRepository $registrationFormRepository;

    /**
     * @param RegistrationFormRepository $registrationFormRepository
     */
    public function __construct(RegistrationFormRepository $registrationFormRepository)
    {
        $this->registrationFormRepository = $registrationFormRepository;
    }

    /**
     * Registration form list page
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        return view('backend.pages.registration_form.index', [
            'registration_forms' => RegistrationForms::class,
        ]);
    }

    /**
     * Registration form create page
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        return view('backend.pages.registration_form.create', [
            'countries' => Country::all()
        ]);
    }

    /**
     * Store registration form
     * @param StoreRegistrationFormRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRegistrationFormRequest $request): RedirectResponse
    {
        try {
            $this->registrationFormRepository->store($request->validated());
            Toast::title('Registration form created successfully')
                ->autoDismiss(5);
            return redirect()->route('registrationforms.index');
        } catch (\Exception $e) {
            Toast::warning()
                ->title('Error creating registration form: ' . $e->getMessage())
                ->autoDismiss(5);
            return redirect()->back();
        }
    }

    /**
     * Registration form edit page
     * @param int $registration_form
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(int $registration_form): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $model = $this->registrationFormRepository->find($registration_form);
        $model->images = ExistingFile::fromMediaLibrary($model->getMedia('images'));

        return view('backend.pages.registration_form.edit',[
            'registration_form' => $model,
            'countries' => Country::all()
        ]);
    }

    /**
     * Update registration form
     * @param UpdateRegistrationFormRequest $request
     * @param int $registration_form
     * @return RedirectResponse
     */
    public function update(UpdateRegistrationFormRequest $request, int $registration_form): RedirectResponse
    {
        try {
            $this->permissionRepository->update($registration_form, $request->validated());
            Toast::title('Registration form updated successfully')
                ->autoDismiss(5);
            return redirect()->back();
        } catch (\Exception $e) {
            Toast::warning()
                ->title('Error updating registration form: ' . $e->getMessage())
                ->autoDismiss(5);
            return redirect()->back();
        }
    }


    /**
     * Delete registration form
     * @param int $registration_form
     * @return RedirectResponse
     */
    public function destroy(int $registration_form): RedirectResponse
    {
        $this->permissionRepository->delete($registration_form);
        Toast::title('Registration form deleted')
            ->autoDismiss(5);
        return redirect()->back();
    }
}
