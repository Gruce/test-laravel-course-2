<div class="bg-white w-full ">
    <div class="flex flex-row">


        <div class="basis-1/4">
            @livewire('category.add')
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
                            Products Count
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr class="text-center bg-white border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $loop->iteration }}
                            </th>
                            @if ($editId == $category->id)
                            <td class="px-6 py-4 text-right">
                                <input wire:model="name" type="text" id="name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    placeholder="" required>
                            </td>
                            <td>
                                :)
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button wire:click="update({{ $category->id }})"
                                   
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Save</button>
                            </td>
                            <td> <button  wire:click="$set('editId', {{ null }})" 
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Close</button>
                            </td>
                            <td class="px-6 py-4 text-right">
                                
                            </td>
                        @else
                        <td class="px-6 py-4">
                            {{ $category->name }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($category->products->count() > 0)
                                {{ $category->products->count() }}
                            @else
                                No Products
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button wire:click="edit({{ $category->id }})"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                        </td>
                        <td> <button wire:click="delete({{ $category->id }})"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </td>
                        @endif

                            
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
