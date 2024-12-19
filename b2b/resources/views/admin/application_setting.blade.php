@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Settings</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">
  <div class="bg-white rounded-lg shadow-sm ml-4 mr-4 p-4 mt-6">
    <h1 class="text-2xl font-semibold mb-6">Application Settings</h1>

    <form class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Application Settings Section -->
      <div>
        <label class="block mb-2">App Name<span class="text-red-500">*</span></label>
        <input type="text" class="w-full border rounded-md px-3 py-2" required />
      </div>

      <div>
        <label class="block mb-2">User Id Prefix<span class="text-red-500">*</span></label>
        <input type="text" class="w-full border rounded-md px-3 py-2" required />
      </div>

      <div>
        <label class="block mb-2">Support Contact No<span class="text-red-500">*</span></label>
        <input type="text" class="w-full border rounded-md px-3 py-2" required />
      </div>

      <div>
        <label class="block mb-2">Support Email<span class="text-red-500">*</span></label>
        <input type="email" class="w-full border rounded-md px-3 py-2" required />
      </div>

      <div>
        <label class="block mb-2">Web Logo<span class="text-red-500">*</span></label>
        <input type="file" class="w-full border rounded-md px-3 py-2" accept="image/*" required />
      </div>

      <div>
        <label class="block mb-2">Mobile Logo<span class="text-red-500">*</span></label>
        <input type="file" class="w-full border rounded-md px-3 py-2" accept="image/*" required />
      </div>

      <div>
        <label class="block mb-2">Logo Icon<span class="text-red-500">*</span></label>
        <input type="file" class="w-full border rounded-md px-3 py-2" accept="image/*" required />
      </div>

      <div>
        <label class="block mb-2">App Loader<span class="text-red-500">*</span></label>
        <input type="file" class="w-full border rounded-md px-3 py-2" accept="image/*" required />
      </div>

      <div>
        <label class="block mb-2">Favicon<span class="text-red-500">*</span></label>
        <input type="file" class="w-full border rounded-md px-3 py-2" accept="image/*" required />
      </div>

      <div>
        <label class="block mb-2">Onboarding Charge<span class="text-red-500">*</span></label>
        <input type="number" class="w-full border rounded-md px-3 py-2" placeholder="10.00" required />
      </div>

      <div>
        <label class="block mb-2">Penny Drop Charge<span class="text-red-500">*</span></label>
        <input type="number" class="w-full border rounded-md px-3 py-2" placeholder="1.00" required />
      </div>

      <div>
        <label class="block mb-2">Enable SMS OTP<span class="text-red-500">*</span></label>
        <select class="w-full border rounded-md px-3 py-2" required>
          <option value="activate">Activate</option>
          <option value="deactivate">Deactivate</option>
        </select>
      </div>

      <!-- Certificate Settings Section -->
      <div>
        <label class="block mb-2">Enable Email OTP<span class="text-red-500">*</span></label>
        <select class="w-full border rounded-md px-3 py-2" required>
          <option value="activate">Activate</option>
          <option value="deactivate">Deactivate</option>
        </select>
      </div>

      <div>
        <label class="block mb-2">Theme Primary Color<span class="text-red-500">*</span></label>
        <input type="color" class="w-full border rounded-md px-3 py-2" value="#0000FF" required />
      </div>

      <div>
        <label class="block mb-2">Theme Secondary Color<span class="text-red-500">*</span></label>
        <input type="color" class="w-full border rounded-md px-3 py-2" value="#ADD8E6" required />
      </div>

      <div>
        <label class="block mb-2">Certificate Signature<span class="text-red-500">*</span></label>
        <input type="file" class="w-full border rounded-md px-3 py-2" accept="image/*" required />
      </div>

      <div>
        <label class="block mb-2">Certificate Issuer Name<span class="text-red-500">*</span></label>
        <input type="text" class="w-full border rounded-md px-3 py-2" placeholder="Kanhaiya Kumar" required />
      </div>

      <div>
        <label class="block mb-2">Certificate Issuer Designation<span class="text-red-500">*</span></label>
        <input type="text" class="w-full border rounded-md px-3 py-2" placeholder="Director" required />
      </div>

      <!-- Adding New Image Form -->
      <div>
        <label class="block mb-2">Additional Image<span class="text-red-500">*</span></label>
        <input type="file" class="w-full border rounded-md px-3 py-2" accept="image/*" required />
      </div>
    </form>

    <!-- Certificate Terms & Conditions -->
    <div class="mt-6">
      <label class="block mb-2">Certificate Terms & Conditions<span class="text-red-500">*</span></label>
      <textarea class="w-full border rounded-md px-3 py-2" rows="3" readonly>
The appointment is valid for one year from the date of this certificate and subject to review. "The Banking Point" shall fully adhere to the terms and conditions of agreement to "Business Correspondent Agent" of Dactilar Technologies Pvt Ltd.
      </textarea>
    </div>

    <div class="mt-6">
        <label class="block mb-2">Certificate Terms & Conditions<span class="text-red-500">*</span></label>
        <textarea class="w-full border rounded-md px-3 py-2" rows="3" readonly>
  The appointment is valid for one year from the date of this certificate and subject to review. "The Banking Point" shall fully adhere to the terms and conditions of agreement to "Business Correspondent Agent" of Dactilar Technologies Pvt Ltd.
        </textarea>
      </div>

      <div class="mt-6">
        <label class="block mb-2">Certificate Terms & Conditions<span class="text-red-500">*</span></label>
        <textarea class="w-full border rounded-md px-3 py-2" rows="3" readonly>
  The appointment is valid for one year from the date of this certificate and subject to review. "The Banking Point" shall fully adhere to the terms and conditions of agreement to "Business Correspondent Agent" of Dactilar Technologies Pvt Ltd.
        </textarea>
      </div>
      

  </div>
</body>
</html>

@endsection
