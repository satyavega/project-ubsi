<div class="flex flex-col min-h-max">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-min shadow overflow-hidden rounded-lg border-b border-gray-200">
            <table class="min-w-[80%]">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            No</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Category Name</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Action</th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    {{ $loop->iteration }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $category->name }}
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post">
                                    <div class="flex gap-2">
                                        <a href="{{ route('category.edit', ['category' => $category->slug]) }}"><x-heroicon-m-pencil-square
                                                class="w-8 h-7 p-1 bg-amber-600 hover:bg-amber-900 text-gray-100 rounded-md" />

                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure?')" type="submit"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor"
                                                class="w-8 h-7 p-1 bg-red-600 hover:bg-red-900 text-gray-100 rounded-md">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                </form>
        </div>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
