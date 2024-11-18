<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body>
        <div class="bg-gray-700 text-white p-4">
            <div class="flex justify-between items-center">
                <h1 class="font-serif mt-0 p-2">Task Manager</h1>
                <a href="{{route('logout')}}" class="group flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-gray-500 text-center transition-all duration-300 ease-in-out hover:w-40">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-7.5A2.25 2.25 0 003.75 5.25v13.5A2.25 2.25 0 006 21h7.5a2.25 2.25 0 002.25-2.25V15M9 12h12m0 0l-3-3m3 3l-3 3" />
                    </svg>
                    <span class="ml-2 overflow-hidden text-sm font-medium text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100"> Logout </span>
                </a>
            </div>
        </div>
        <div>
            @include('components.new-task')
            <h3 class="font-serif text-center mt-4 text-2xl">Your Task List</h3>
            <table class="table-auto border-collapse border border-gray-400 w-full text-left mt-4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-400 px-4 py-2">Title</th>
                        <th class="border border-gray-400 px-4 py-2">Description</th>
                        <th class="border border-gray-400 px-4 py-2">Status</th>
                        <th class="border border-gray-400 px-4 py-2">Category</th>
                        <th class="border border-gray-400 px-4 py-2">Created</th>
                        <th class="border border-gray-400 px-4 py-2">Updated</th>
                        <th class="border border-gray-400 px-2 py-2 w-1/6 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">Task 1</td>
                        <td class="border border-gray-400 px-4 py-2">Task Manager 1</td>
                        <td class="border border-gray-400 px-4 py-2">Pending</td>
                        <td class="border border-gray-400 px-4 py-2">Personal</td>
                        <td class="border border-gray-400 px-4 py-2">2024-11-15</td>
                        <td class="border border-gray-400 px-4 py-2">2024-11-16</td>
                        <td class="border border-gray-400 px-2 py-2 w-[20%] text-center whitespace-normal">
                            @include('components.status')   
                            @include('components.category-update') 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="auth-component" class="hidden" data-value = {{$authData}}>
            @include('components.auth', ['data' => $data])
        </div>

    </body>
</html>
<script>
     function toggleAuthComponent() {
        const authComponent = document.getElementById('auth-component');
        authComponent.classList.toggle('hidden');
    }

    document.addEventListener("DOMContentLoaded", function () {
        const authComponent = document.getElementById('auth-component');
        const value = authComponent ? authComponent.getAttribute('data-value') : null;

        if (value === 'auth!') {
            toggleAuthComponent();
        }
    });

    function togglePopup(popupId) {
    const popupForm = document.getElementById(popupId);
    popupForm.classList.toggle("hidden");
}
  tailwind.config = {
    theme: {
      extend: {},
    },
    plugins: [],
  };

</script>