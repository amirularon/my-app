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
                
                <td class="d-flex flex-row-reverse bd-highlight">
                    <button class="pull-right">
                        <a class="btn btn-success" href="{{ route('products.create')}}" title="Create product" class="fas fa-plus-circle">Create New Product
                    </a></button></td>

                <form action="{{ route('products.index') }}" method="GET" role="search">
                        <div class="form-group">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button style='margin-bottom:16px' class="btn btn-outline-secondary" 
                                type="submit">Search
                            </button>

                            {{ Form::input('text', 'search', null, ['placeholder' => 'Search', 'required' => true, 'style' => 'margin-bottom:16px']) }}

                            <a href="{{ route('products.index') }}" class=" mt-1">
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</a>
                        <div></div>
                        
                        
                    </div></div>
                </form>
                    
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
                                <div><a style='margin-right:16px' type="button" href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a></div>
                                <div><a style='margin-right:16px' type="button" href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a></div>
                                <div><form method="post" action="{{route('products.destroy',$product->id)}}">
                                    @method('delete')
                                    @csrf
                            <button type="submit" class="btn btn-danger btn">Delete</button>


                        </form>
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
