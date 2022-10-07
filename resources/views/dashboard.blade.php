<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="px-4">
        <div class="flex justify-end pt-8 pb-3 px-3">
            <a href="{{ route('appointment') }}">
                <button
                    type="button"

                    class="border  justify-end border-indigo-500 bg-indigo-500
             text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none
              hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    Make Appointment
                </button>
            </a>
        </div>


        <!-- table -->
        <div class="overflow-x-auto">
            <div class="min-w-screen min-h-screen bg-gray-100 flex  bg-gray-100 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="bg-white shadow-md rounded my-2">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-3 text-center">Name</th>
                                <th class="py-3 px-3 text-center">Phone</th>
                                <th class="py-3 px-3 text-center">Date</th>
                                <th class="py-3 px-3 text-center">Doctor</th>
                                <th class="py-3 px-3 text-center">Message</th>
                                <th class="py-3 px-3 text-center">Status</th>
                                <th class="py-3 px-3 text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-5 text-center whitespace-nowrap">
                                    <span class="font-medium">React Project</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <span>0757983352</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <div>10/2/2023</div>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <div>Brian Lema</div>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <div>Sneezing</div>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <span
                                        class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
