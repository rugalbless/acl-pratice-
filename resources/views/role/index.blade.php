<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto ml-12">
            <h1 class="text-4xl font-bold leading-8 text-gray-900">Roles</h1>
            <p class="mt-2 text-base text-gray-500">A list of all the users in your account including their name, title, email and role.</p>
        </div>
        <div class="mt-4 mr-12 sm:ml-auto sm:mt-0 sm:flex-none">
            <a
                href="{{ route('role.create') }}"
                type="button"
                class="block rounded-md bg-sky-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-sky-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                New Role
            </a>
        </div>
    </div>
    <div class="mt-8 flex justify-center">
        <div class="w-full max-w-6xl overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <x-list :items="$roles" :columns="['name']" edit-route="role.edit" destroy-route="role.destroy" />
            </div>
        </div>
    </div>


</x-app-layout>
