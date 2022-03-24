<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Add New Product

      <div class="d-flex flex-row-reverse bd-highlight">
          <button class="pull-right">
                <a class="btn btn-success" href="{{ route('products.index')}}" title="Create product" class="fas fa-plus-circle">Back
                </a></button></div></div>

                        {{ Form::open(['route' => ['products.create']]) }}
                            @include('products.form')

        <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        {{ Form::close() }}
                    </div>
    </div></div></div>
</x-app-layout>
