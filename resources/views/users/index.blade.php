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
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">email</th>
                              <th scope="col">Created Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ (($users->currentPage() - 1 ) * $users->perPage()) + $loop->iteration }}.</th>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}">
                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ date('d M Y', strtotime($user->created_at)) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <ul class="list-inline small text-muted">
                            <li>
                                Page {{ $users->currentPage() }} of
                                {{ $users->lastPage() }}, showing
                                {{ $users->lastItem() - $users->firstItem() + 1 }}
                                records out of {{ $users->total() }} total,
                                starting on record {{ $users->firstItem() }}, ending on
                                {{ $users->lastItem() }}
                            </li>
                        </ul>
                        {{ $users->appends(Request::except('page'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
