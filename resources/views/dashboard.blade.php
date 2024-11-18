<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body>
        <div class="bg-gray-700 text-white p-4">
            <div class="flex justify-between items-center">
                <h1 class="font-serif mt-0 p-2">Task Manager</h1>
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
    </body>
</html>
<script>
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