<div class="relative float-right m-2">
    <button 
        onclick="togglePopup('statusForm')" 
        class="group relative flex items-center justify-center p-2 h-6 bg-green-500 text-white m-2 cursor-pointer hover:bg-green-400 rounded-lg transition-all duration-300 ease-in-out w-12 hover:w-40">
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="2" 
            stroke="currentColor" 
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" 
                d="M4.5 12a7.5 7.5 0 1115 0m-7.5-4v8" />
        </svg>
        <span 
            class="ml-2 opacity-0 group-hover:opacity-100 overflow-hidden transition-opacity duration-300 text-sm font-medium">
            Change Status
        </span>
    </button>

    <div 
        id="statusForm" 
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        
        <div class="bg-white p-6 rounded shadow-lg w-96 relative">
            <button 
                onclick="togglePopup('statusForm')" 
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
                &times;
            </button>

            <form action="{{route('status')}}" method="POST" class="mx-auto max-w-md rounded bg-gray-50 p-4 shadow">
                @csrf
                    <div class="space-y-4">

                        <label class="flex cursor-pointer items-center gap-4">
                            <input type="radio" name="status" value="pending" id="status-pending" class="peer hidden" checked />
                            <span class="peer-checked:ring-black-300 w-full rounded-full border-2 border-yellow-500 bg-yellow-100 px-4 py-2 text-center text-yellow-500 transition peer-checked:bg-yellow-500 peer-checked:text-white peer-checked:ring-2 hover:bg-yellow-500 hover:text-white hover:ring-2 peer-checked:hover:bg-yellow-300"> Pending </span>
                        </label>

                        <label class="flex cursor-pointer items-center gap-4">
                            <input type="radio" name="status" value="completed" id="status-completed" class="peer hidden" />
                            <span class="peer-checked:ring-black-300 w-full rounded-full border-2 border-green-500 bg-green-100 px-4 py-2 text-center text-green-500 transition peer-checked:bg-green-500 peer-checked:text-white peer-checked:ring-2 hover:bg-green-500 hover:text-white hover:ring-2 peer-checked:hover:bg-green-300"> Completed </span>
                        </label>

                        <label class="flex cursor-pointer items-center gap-4">
                            <input type="radio" name="status" value="dropped" id="status-dropped" class="peer hidden" />
                            <span class="peer-checked:ring-black-300 w-full rounded-full border-2 border-red-500 bg-red-100 px-4 py-2 text-center text-red-500 transition peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-2 hover:bg-red-500 hover:text-white hover:ring-2 peer-checked:hover:bg-red-300"> Dropped </span>
                        </label>
                    </div>
                <button type="submit" 
                    class="mt-6 w-full rounded bg-blue-500 px-4 py-2 text-white transition hover:bg-blue-600">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>
