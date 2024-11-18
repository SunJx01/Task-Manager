<div class="relative float-right m-2">
        <button 
            onclick="togglePopup('popupForm')" 
            class="group bg-green-500 text-center rounded-full w-12 h-12 flex items-center justify-center cursor-pointer hover:w-40 transition-all duration-300 ease-in-out">
            <svg 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke-width="2" 
                stroke="currentColor"
                class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span 
                class="ml-2 opacity-0 group-hover:opacity-100 overflow-hidden transition-opacity duration-300 text-sm font-medium text-white">
                New Task
            </span>
        </button>
            
        <div 
        id="popupForm" 
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">

        <div class="bg-white p-6 rounded shadow-lg w-96 relative">
        <button 
            onclick="togglePopup('popupForm')" 
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            &times;
        </button>

            <form action="{{route('newTask')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-300" 
                        placeholder="Title" 
                        required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <input 
                        type="text" 
                        id="description" 
                        name="description" 
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-300" 
                        placeholder="Description" 
                        required>
                </div>
                <div class="mb-4">
                    <label for="category" class="block text-gray-700">Category</label>
                    <input 
                        type="text" 
                        id="category" 
                        name="category" 
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-300" 
                        placeholder="Category" 
                        required>
                </div>
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded">
                    Add
                </button>
            </form>
        </div>
    </div>
</div>
