<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5">
    <table class="min-w-full divide-y divide-gray-300">
        <thead class="bg-gray-50">
        <tr>
            @foreach($columns as $column)
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                Name
                </th>
            @endforeach
            <th scope="col" class="py-3.5 pl-3 pr-4 text-center text-sm font-semibold text-gray-900 sm:pr-6 align-middle">
                Edit
            </th>
            <th scope="col" class="py-3.5 pl-3 pr-4 text-center text-sm font-semibold text-gray-900 sm:pr-6 align-middle">
                Remove
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
        @foreach($items as $key => $row)
            <tr>
                @foreach($columns as $column)
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                        {{ $row[$column] }}
                    </td>
                @endforeach
                <td class="whitespace-nowrap py-4 pl-3 pr-4 text-center align-middle text-sm font-medium sm:pr-6">
                    <a href="{{ route($editRoute, $row->id) }}" class="text-yellow-500 hover:text-yellow-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 inline-block align-middle">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg>
                    </a>
                </td>
                <td class="whitespace-nowrap py-4 pl-3 pr-4 text-center align-middle text-sm font-medium sm:pr-6">
                    <form action="{{ route($destroyRoute, $row->id) }}" method="post">
                        @csrf @method('delete')
                        <button class="text-red-600 hover:text-red-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 inline-block align-middle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
