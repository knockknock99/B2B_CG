@extends('admin.master_admin_layout')
@section('content_admin')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Ticket Types Table</title>
  <script>
    // Handle Delete button click and show confirmation modal
    function openDeleteModal(ticketId) {
      document.getElementById('deleteModal').classList.remove('hidden');
      document.getElementById('deleteTicketId').value = ticketId;
    }

    function closeDeleteModal() {
      document.getElementById('deleteModal').classList.add('hidden');
    }
  </script>
</head>
<body class="bg-blue-50 py-10">
  <div class="p-6 max-w-5xl mx-auto bg-white rounded-lg shadow mt-8">
    <!-- Header -->
    <a href="{{route('admin.add_ticket_department')}}"> <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-bold text-gray-800">View Ticket Types</h1>
      <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2 hover:bg-blue-800">
        <!-- Plus Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        ADD NEW
      </button>
    </div>
  </a>

    <!-- Search Bar -->
    <div class="mb-4">
      <label for="search" class="block text-sm font-medium text-gray-700">Search:</label>
      <input
        type="text"
        id="search"
        class="border border-gray-300 rounded px-3 py-2 w-full max-w-sm focus:outline-none focus:ring focus:ring-blue-200"
        placeholder="Type to search..."
      />
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="w-full border border-gray-300">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="py-2 px-4 text-left">#</th>
            <th class="py-2 px-4 text-left">Department</th>
            <th class="py-2 px-4 text-left">Status</th>
            <th class="py-2 px-4 text-left">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="border-b border-gray-200">
            <td class="py-2 px-4">1</td>
            <td class="py-2 px-4">General</td>
            <td class="py-2 px-4">
              <span class="bg-green-800 text-white px-4 py-2 rounded-full text-xs">Active</span>
            </td>
            <td class="py-2 px-4">
              <div class="flex items-center gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <!-- Pencil Icon -->
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <button class="text-red-600 hover:text-red-800" onclick="openDeleteModal(1)">
                  <!-- Trash Icon -->
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6h15m-3.75 0V4.5c0-.414-.336-.75-.75-.75h-6c-.414 0-.75.336-.75.75V6m-3.75 0v12.75c0 .414.336.75.75.75h9c.414 0 .75-.336.75-.75V6m-10.5 0h9" />
                  </svg>
                </button>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="py-2 px-4">2</td>
            <td class="py-2 px-4">Support</td>
            <td class="py-2 px-4">
              <span class="bg-green-800 text-white px-4 py-2 rounded-full text-xs">Active</span>
            </td>
            <td class="py-2 px-4">
              <div class="flex items-center gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <!-- Pencil Icon -->
                  <i class="fas fa-edit w-5 h-5"></i>
                  </svg>
                </button>
                <button class="text-red-600 hover:text-red-800" onclick="openDeleteModal(2)">
                  <!-- Trash Icon -->
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6h15m-3.75 0V4.5c0-.414-.336-.75-.75-.75h-6c-.414 0-.75.336-.75.75V6m-3.75 0v12.75c0 .414.336.75.75.75h9c.414 0 .75-.336.75-.75V6m-10.5 0h9" />
                  </svg>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-4 text-sm text-gray-600">
      <div>Showing 1 to 2 of 2 entries</div>
      <div class="flex gap-2">
        <button class="px-3 py-1 border rounded text-gray-600 hover:bg-gray-100 disabled:opacity-50" disabled>Previous</button>
        <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
        <button class="px-3 py-1 border rounded text-gray-600 hover:bg-gray-100 disabled:opacity-50" disabled>Next</button>
      </div>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div id="deleteModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
      <h2 class="text-lg font-semibold text-gray-700">Are you sure you want to delete this ticket type?</h2>
      <form action="#" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" id="deleteTicketId" name="ticket_id">
        <div class="mt-4 flex justify-between gap-4">
          <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded" onclick="closeDeleteModal()">Cancel</button>
          <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Delete</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

@endsection
