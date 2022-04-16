<div class=" bg-white">
    <aside class=" " aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3  rounded ">

            <form wire:submit.prevent="add">
                <div class="mb-6 h-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category
                        Name</label>
                    <input wire:model="name" type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>


                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
            </form>

        </div>
    </aside>
</div>
