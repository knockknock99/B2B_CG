@extends('masterLayout')

@section('content')
  


<main class="p-4">
  <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-8">

    <div class="flex justify-center rounded-xl pt-10 pb-3 relative">
        <label for="profile-pic-upload" class="cursor-pointer relative">
            <img src="https://abheepay.com/backend/assets/img/avatars/1.png" id="profile-pic" width="90px" height="90px" class="rounded-full" alt="profile-pic">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 bg-black bg-opacity-50 rounded-full transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M17.414 2.586a2 2 0 010 2.828L8.414 14.414a2 2 0 01-.707.707l-4 2a1 1 0 01-1.32-1.32l2-4a2 2 0 01.707-.707l9-9a2 2 0 012.828 0zM6.414 13l7-7L14 7.586l-7 7-1.293-.293a1 1 0 00-.707.707L5.414 13h1z" />
                </svg>
            </div>
            <input type="file" id="profile-pic-upload" accept="image/*" class="hidden">
        </label>
    </div>
    
    {{-- <div class="flex justify-end mt-4 space-x-4">
        <button id="profile-pic-save-btn" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Edit Picture</button>
    </div> --}}
    

    <script>
    
    const profilePicInput = document.getElementById("profile-pic-upload");
    const profilePic = document.getElementById("profile-pic");
    const profilePicSaveBtn = document.getElementById("profile-pic-save-btn");
    let isProfilePicEditing = false;
    
    profilePicSaveBtn.addEventListener("click", function () {
        isProfilePicEditing = !isProfilePicEditing;
    
        if (isProfilePicEditing) {
            profilePicInput.click(); // Open file selector
            profilePicSaveBtn.textContent = "Save Picture";
        } else {
            profilePicSaveBtn.textContent = "Edit Picture";
            if (profilePicInput.files.length > 0) {
                const file = profilePicInput.files[0];
                const reader = new FileReader();
                reader.onload = function (e) {
                    profilePic.src = e.target.result; // Update picture preview
                    console.log("New profile picture URL:", e.target.result); // For debugging
                };
                reader.readAsDataURL(file);
            }
        }
    });
    
    profilePicInput.addEventListener("change", function () {
        if (profilePicInput.files.length > 0) {
            const file = profilePicInput.files[0];
            const reader = new FileReader();
            reader.onload = function (e) {
                profilePic.src = e.target.result; // Update picture preview immediately
            };
            reader.readAsDataURL(file);
        }
    });
</script>    



{{-- <div class="flex-col justify-center flex align-center pt-3 ">
    <h1 class="text-2xl font-bold justify-center flex align-center" id="name">Md Jasim</h1>
    <p class="justify-center flex align-center text-gray-600" id="company">Code Graphi Technologies Pvt. Ltd.</p>
    <p class="justify-center flex align-center" id="address">Alphathum Bhutani, TOWER-S, Sector 90, Noida, Uttar Pradesh 201305</p>
</div> --}}



<div class="text-center px-6 py-4  flex-col  justify-center flex align-center pt-3 ">
    <input type="text" id="name" value="Md Jasim" class="editable-input text-xl font-bold text-center focus:outline-none border-none " readonly>
    <input type="text" id="company" value="Code Graphi Technologies Pvt. Ltd." class="editable-input text-gray-600 text-center focus:outline-none border-none bg-transparent mt-2" readonly>
    <input type="text" id="address" value="Alphathum Bhutani, TOWER-S, Sector 90, Noida, Uttar Pradesh 201305" class="editable-input text-center focus:outline-none border-none bg-transparent mt-2" readonly>
</div>



<script>
const toggleBtn = document.getElementById("toggle-btn");
const profilePicSaveBtn = document.getElementById("profile-pic-save-btn");
const profilePicInput = document.getElementById("profile-pic-upload");
const profilePic = document.getElementById("profile-pic");

const editableInputs = document.querySelectorAll(".editable-input");

let isEditing = false;

// Toggle Edit/Save for Text Fields and Picture
toggleBtn.addEventListener("click", function () {
    isEditing = !isEditing;

    if (isEditing) {
        // Enable text inputs for editing
        editableInputs.forEach(input => {
            input.removeAttribute("readonly");
            input.classList.add("border", "border-gray-300", "rounded", "p-1");
            input.style.backgroundColor = "white";
        });
        toggleBtn.textContent = "Save";
    } else {
        // Disable inputs and save data
        editableInputs.forEach(input => {
            input.setAttribute("readonly", "true");
            input.classList.remove("border", "border-gray-300", "rounded", "p-1");
            input.style.backgroundColor = "transparent";
        });
        toggleBtn.textContent = "Edit";

        // Collect updated details
        const updatedDetails = {
            name: document.getElementById("name").value,
            company: document.getElementById("company").value,
            address: document.getElementById("address").value,
        };

        console.log("Updated Details:", updatedDetails);

        // Send updated data to server (if needed)
        fetch("YOUR_BACKEND_API_ENDPOINT", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(updatedDetails),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Profile updated successfully!");
                } else {
                    alert("Failed to update profile.");
                }
            })
            .catch(error => {
                console.error("Error updating profile:", error);
                alert("An error occurred while saving the profile.");
            });
    }
});

// Edit and Save Profile Picture
profilePicSaveBtn.addEventListener("click", function () {
    profilePicInput.click();
});

profilePicInput.addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            profilePic.src = e.target.result; // Show preview immediately
        };
        reader.readAsDataURL(file);

        // Simulate upload (replace with real API logic)
        const formData = new FormData();
        formData.append("profilePicture", file);

        fetch("YOUR_BACKEND_API_ENDPOINT", {
            method: "POST",
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Profile picture uploaded successfully!");
                    if (data.imageUrl) {
                        profilePic.src = data.imageUrl; // Update to server-provided URL
                    }
                } else {
                    alert("Failed to upload profile picture.");
                }
            })
            .catch(error => {
                console.error("Error uploading profile picture:", error);
            });
    }
});

</script>    


      <div class="px-6 py-4">
          <h2 class="text-xl font-semibold border-b pb-2 bg-blue-900 text-white px-6 rounded-xl py-3">Profile</h2>
          <div class="mt-4 space-y-2 p-6">

              <div class="flex justify-between align-center border-t pt-2 ">
                  <span class="font-medium">User ID:</span>
                  <span class="editable-input focus:outline-none flex-none text-right flex-grow pl-1 lg:pl-4">CG939838</span>
              </div>

              <div class="flex justify-between align-center border-t pt-2">
                  <span class="font-medium ">Email ID:</span>
                  <input type="email" id="email" value="codegraphiinfo.in" class="editable-input focus:outline-none flex-none text-right flex-grow pl-4 " readonly>
                  {{-- <input class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent ..."> --}}
              </div>
              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">Name:</span>
                  <input type="text" id="name-input" value="Md Jasim" class="editable-input focus:outline-none flex-none text-right flex-grow pl-4" readonly>
              </div>

              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">Father's Name:</span>
                  <input type="text" id="father-name" value="Md Shakil" class="editable-input focus:outline-none flex-none text-right flex-grow pl-4" readonly>
              </div>

              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">Mobile:</span>
                  <input type="text" id="mobile" value="8700335031" class="editable-input focus:outline-none flex-none text-right flex-grow pl-4" readonly>
              </div>
              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">Firm Name:</span>
                  <span class="editable-input focus:outline-none flex-none text-right flex-grow p-1 pl-4">Code Graphi Technologies Pvt. Ltd.</span>
              </div>
              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">Date of Birth:</span>
                  <input type="date" id="dob" value="2022-12-21" class="editable-input focus:outline-none flex-none text-right flex-grow pl-1 lg:pl-4 " readonly>
              </div>

              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium pr-2 lg:pr-20 ">Gender:</span>
                  <select id="gender" class="editable-input focus:outline-none  " disabled>
                      <option value="Male mr-2 lg:mr-20" selected>Male</option>
                      <option value="Female">Female</option>
                      <option value="Female">Other</option>
                  </select>
              </div>

              <div class="flex justify-between border-t pt-2">
                <span class="font-medium">Aadhar No:</span>
                <input type="text" id="aadhar" value="XXXXXXXX7382" class="editable-input focus:outline-none flex-none text-right flex-grow pl-1 lg:pl-4" readonly>
            </div>
              

              <div class="flex  justify-between border-t pt-2">
                  <span class="font-medium">PAN No:</span>
                  <input type="text" id="pan" value="CGtyd939838" class="editable-input focus:outline-none flex-none text-right flex-grow pl-1 lg:pl-4" readonly>
              </div>

              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">Address:</span>
                  <input type="text" id="address-input" value="Alphathum Bhutani, TOWER-S, Sector 90, Noida." class="editable-input focus:outline-none flex-none text-right flex-grow pl-1 lg:pl-4" readonly>
              </div>

              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">City:</span>
                  <input type="text" id="city" value="Noida" class="editable-input focus:outline-none flex-none text-right flex-grow pl-4" readonly>
              </div>

              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">State:</span>
                  <input type="text" id="state" value="Utter Pradesh" class="editable-input focus:outline-none flex-none text-right flex-grow pl-4" readonly>
              </div>

              <div class="flex justify-between border-t pt-2">
                  <span class="font-medium">Pin Code:</span>
                  <input type="text" id="pin-code" value="201305" class="editable-input focus:outline-none flex-none text-right flex-grow pl-4" readonly>
              </div>

              {{-- <div class="flex flex-row items-center mt-4">
                  Note : (<span class="flex items-center ">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2 text-blue-900" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.157 3.553a1 1 0 00.95.69h3.735c.969 0 1.371 1.24.588 1.81l-3.022 2.193a1 1 0 00-.364 1.118l1.157 3.553c.3.921-.755 1.688-1.539 1.118L10 13.011l-3.022 2.193c-.784.57-1.838-.197-1.539-1.118l1.157-3.553a1 1 0 00-.364-1.118L3.21 8.98c-.783-.57-.38-1.81.588-1.81h3.735a1 1 0 00.95-.69l1.157-3.553z" />
                      </svg>
                  </span>) <span class="ml-2">mark is Uneditable details</span>
              </div> --}}

              <div class="flex justify-end mt-4 space-x-4">
                  <button id="toggle-btn" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Edit</button>
              </div>

          </div>
      </div>
  </div>
</main>

<script>
  const toggleBtn = document.getElementById("toggle-btn");
  const inputs = document.querySelectorAll(".editable-input");
  let isEditing = false;

  toggleBtn.addEventListener("click", function () {
      isEditing = !isEditing;

      if (isEditing) {
          // Enable inputs for editing
          inputs.forEach(input => {
              input.removeAttribute("readonly");
              input.removeAttribute("disabled");
          });
          toggleBtn.textContent = "Save";
      } else {
          // Disable inputs after saving
          inputs.forEach(input => {
              input.setAttribute("readonly", "true");
              input.setAttribute("disabled", "true");
          });
          toggleBtn.textContent = "Edit";

          // Simulate saving (you can implement actual save functionality here)
          const updatedDetails = {
              email: document.getElementById("email").value,
              name: document.getElementById("name-input").value,
              fatherName: document.getElementById("father-name").value,
              mobile: document.getElementById("mobile").value,
              dob: document.getElementById("dob").value,
              gender: document.getElementById("gender").value,
              aadhar: document.getElementById("aadhar").value,
              pan: document.getElementById("pan").value,
              address: document.getElementById("address-input").value,
              city: document.getElementById("city").value,
              state: document.getElementById("state").value,
              pinCode: document.getElementById("pin-code").value,
          };
          
          console.log(updatedDetails); // Replace this with actual save logic
      }
  });
</script>










@endsection