<?php

namespace App\Tables;

use App\Models\RegistrationForm;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class RegistrationForms extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return RegistrationForm::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id', 'first_name', 'last_name',])
            ->column('id', sortable: true)
            ->column('last_name', sortable: true)
            ->column('first_name', sortable: true)
            ->column('personal_id', sortable: true)
            ->column('date_of_birth', sortable: true)
            ->column('gender', sortable: true)
            ->column('citizenship', sortable: true)
            ->column('date_of_entry', sortable: true)
            ->column('purpose_of_visit', sortable: true)
            ->column(
                key: 'country.name',
                label: 'Country',
                sortable: true,
            )
            ->column(
                key: 'city.name',
                label: 'City',
                sortable: true,
            )
            ->column('address', sortable: true)
            ->column('postal_code', sortable: true)
            ->column('email', sortable: true)
            ->column('phone', sortable: true)
            ->column('registered_to_participate_in_elections', sortable: true)
            ->column('registration_help', sortable: true)
            ->column('want_consultation', sortable: true)
            ->column('later_registration', sortable: true)
            ->column('transportation_help', sortable: true)
            ->defaultSort('id', 'desc')
            ->column(label: 'Actions')
            ->paginate(20);
    }
}
