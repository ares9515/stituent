<!--Modal-->
  <div class="modal pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-darkest opacity-50"></div>
    
    <div class="modal-container bg-white w-5/6 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <!-- <span class="text-sm">(Esc)</span> -->
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Group Emails</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!------------------------------------/ CONTENT / ------------------------------------>

        <div class="py-2 mb-2 cursor-text">

            <div class="font-bold mt">
              Full list:
            </div>
            <div x-text="emails"
                 class="text-blue text-sm">
            </div>

            <div class="font-bold mt-4">
              Missing Emails:
            </div>
            <div x-text="missing_emails"
                 class="text-red text-sm">
            </div>

        </div>

         <!----------------------------------/ END CONTENT / ---------------------------------->

        <!--Footer-->
        <div class="flex justify-end pt-2">
<!--           <button class="px-4 bg-transparent p-3 rounded-lg text-indigo hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button> -->
          <button class="modal-close px-4 bg-blue p-3 rounded-lg text-white hover:bg-indigo-400 cursor-pointer">Close</button>
        </div>
        
      </div>
    </div>
  </div>

			