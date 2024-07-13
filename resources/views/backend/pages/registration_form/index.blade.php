@extends('backend.layouts.default')
@seoTitle('Registration Forms')
@section('content')
    <x-backend.page-title heading="Registration Forms" can="create registration form" url="{{ route('registration_forms.create')  }}"
                          title="Create"/>
    <div class="mx-4 mt-5 h-full">
        <x-splade-table :for="$registration_forms" as="$registration_form">
            <x-splade-cell registered_to_participate_in_elections>
                {{ $registration_form->registered_to_participate_in_elections ? 'Yes' : 'No' }}
            </x-splade-cell>
            <x-splade-cell registration_help>
                {{ $registration_form->registration_help ? 'Yes' : 'No' }}
            </x-splade-cell>
            <x-splade-cell want_consultation>
                {{ $registration_form->want_consultation ? 'Yes' : 'No' }}
            </x-splade-cell>
            <x-splade-cell later_registration>
                {{ $registration_form->later_registration ? 'Yes' : 'No' }}
            </x-splade-cell>
            <x-splade-cell transportation_help>
                {{ $registration_form->transportation_help ? 'Yes' : 'No' }}
            </x-splade-cell>
            <x-splade-cell actions>
                @can('update registration form')
                    <Link href="{{ route('registration_forms.edit', $registration_form->id) }}"
                          class="mr-2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-sm text-sm inline-flex items-center px-3 py-2 text-center">
                        <i class="fa-solid fa-eye mr-1"></i>
                        View
                    </Link>
                @endcan
                @can('delete registration form')
                    <Link confirm="You are deleting registration form"
                          confirm-text="Are you sure?"
                          confirm-button="Yes"
                          cancel-button="No"
                          method="DELETE"
                          href="{{ route('registration_forms.destroy', $registration_form->id) }}"
                          class="text-white bg-red-700 hover:bg-red-600 focus:ring-4 focus:ring-red-200 font-medium rounded-sm text-sm inline-flex items-center px-3 py-2 text-center">
                        <i class="fa-solid fa-trash-can mr-1"></i>
                        Delete
                    </Link>
                @endcan
            </x-splade-cell>
        </x-splade-table>
    </div>
@endsection
