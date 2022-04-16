<div>
    <div class="bg-white w-full ">
        <div class="flex flex-row">
            <div class="basis-1/4">
                @livewire('product.add')
            </div>
            <div class="basis-3/4 relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pieces Count
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr class="text-center bg-white border-b ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </th>
                                
                                    <td class="px-6 py-4">
                                        {{ $product->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$product->category->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$product->pieces_count}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$product->price}}
                                    </td>
                                    
                                    <td> <button wire:click="delete({{ $product->id }})"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                    </td>
                                


                            @empty
                                <td colspan="4" class="px-6 py-4 text-center">
                                    No Data
                                </td>
                        @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
