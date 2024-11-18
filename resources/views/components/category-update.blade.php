<div class="relative float-right m-2">
    <button 
        onclick="togglePopup('categoryUpdate')" 
        class="group relative flex items-center justify-center h-6 p-2 bg-indigo-500 text-white m-2 cursor-pointer hover:bg-indigo-400 rounded-lg transition-all duration-300 ease-in-out w-12 hover:w-40">
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="2" 
            stroke="currentColor" 
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" 
                d="M9 3.75L20.25 15a3 3 0 01-4.25 4.25L3.75 9V6a3 3 0 013-3h3zm2.25 7.5h.008v.008h-.008V11.25z" />
        </svg>
        <span 
            class="ml-2 opacity-0 group-hover:opacity-100 overflow-hidden transition-opacity duration-300 text-sm font-medium">
            Change Category
        </span>
    </button>
    <div 
        id="categoryUpdate" 
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        
        <div class="bg-white p-6 rounded shadow-lg w-96 relative">
            <button 
                onclick="togglePopup('categoryUpdate')" 
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
                &times;
            </button>

            <form action="{{route('categoryUpdate')}}" method="POST" class="mx-auto max-w-md rounded bg-gray-50 p-4 shadow">
                @csrf
                   <h1></h1>
                <button type="submit" 
                    class="mt-6 w-full rounded bg-blue-500 px-4 py-2 text-white transition hover:bg-blue-600">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>
