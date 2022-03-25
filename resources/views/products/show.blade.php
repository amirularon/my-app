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
                    Showing Products 
                
        <td class="d-flex flex-row-reverse bd-highlight">
          <button class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index')}}" title="Create product" class="fas fa-plus-circle">Back
                </a></button></td></div>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            Name
                        </div>
                        <div class="col">
                            {{ $product->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Price (RM)
                        </div>
                        <div class="col">
                            {{ $product->price }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Details
                        </div>
                        <div class="col">
                            {{ $product->details }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Publish
                        </div>
                        <div class="col">
                            {{ $product->publish }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
