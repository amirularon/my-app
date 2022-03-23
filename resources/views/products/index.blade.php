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
                    Products List
                
                <div class="d-flex flex-row-reverse bd-highlight">
                    <button class="pull-right">
                        <a class="btn btn-success" href="create" title="Create product"> <i class="fas fa-plus-circle">Create New Product</i>
                    </a></button></div>

                <div class="d-flex flex-row-reverse bd-highlight">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                </form></div>


                </div>

                <div>
                    <table class="table table-bordered table-responsive-lg">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price (RM)</th>
                                <th scope="col">Details</th>
                                <th scope="col">Publish</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead> 
                        @foreach ($products as $product)
                        <tr>    
                            <td>{{ (($products->currentPage() - 1 ) * $products->perPage()) + $loop->iteration }}.</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price  }}</td>
                            <td>{{ $product->details }}</td>
                            <td>{{ $product->publish }}</td>
                            <td>{{ $product->action }}

                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <div><button type="button" class="btn btn-info">Show</button></div>
                                <div><button type="button" class="btn btn-primary">Edit</button></div>
                                <div><button type="button" class="btn btn-danger">Delete</button></div>
                            </div>


                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="text-center">
                        <ul class="list-inline small text-muted">
                            <li>
                                Page {{ $products->currentPage() }} of
                                {{ $products->lastPage() }}, showing
                                {{ $products->lastItem() - $products->firstItem() + 1 }}
                                records out of {{ $products->total() }} total,
                                starting on record {{ $products->firstItem() }}, ending on
                                {{ $products->lastItem() }}
                            </li>
                        </ul>
                        {{ $products->appends(Request::except('page'))->links() }}
                    </div
            </div>
        </div>
    </div>
</x-app-layout>
