<div class=" bg-white">
    <aside class=" " aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3  rounded ">

            <form wire:submit.prevent="add">
                <div class="mb-6 h-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product
                        Name</label>
                    <input wire:model="name" type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mb-6 h-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category Name</label>
                    <select wire:model="categoryId" id="countries" class="mb-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value = '0' selected>Select Category </option>
                    @foreach($categories as $item)    
                        <option value = '{{$item->id}}'>{{$item->name}}</option>
                    @endforeach
                </div>
                
                <div class="mb-6">
                    <label for="name" class="">Pieces Count</label>
                    <input wire:model="pieces_count" placeholder="Pieces Count" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                    <input wire:model="price" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6 h-full">
                    <label for="Description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                    <input wire:model="description" type="text" id="Description"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>


                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
            </form>

        </div>
    </aside>
</div>
