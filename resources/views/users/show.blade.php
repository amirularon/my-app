<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Users List
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Name
                        </div>
                        <div class="col">
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Email
                        </div>
                        <div class="col">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Created At
                        </div>
                        <div class="col">
                            {{ date('d M Y', strtotime($user->created_at)) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
