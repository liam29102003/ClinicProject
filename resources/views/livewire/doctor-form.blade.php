<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <a href="/doctor" wire:navigate>Go</a>


            <form class="max-w-sm mx-auto" wire:submit='save'>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        name</label>
                    <input type="text" id="name" wire:model.live='name'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Dr John Doe" required>
                </div>
                <div class="mb-5">
                    <label for="speciality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        speciality</label>
                    <input type="text" id="speciality" wire:model.live='speciality'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="qualification" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        qualification</label>
                    <input type="text" id="qualification" wire:model.live='qualification'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div class="mb-5">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        your country</label>
                    <select id="gender" name='gender' wire:model.live='gender'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-5 flex justify-between">
                    <span>
                        <label for="time" class="block text-sm font-medium text-gray-700">From</label>
                        <input type="time" id="time" name="time" wire:model.live='from'
                        class="mt-1 p-2 border rounded-md focus:outline-none focus:border-blue-500">
                        
                    </span>
                    <span>
                        <label for="time" class="block text-sm font-medium text-gray-700">To</label>
                        <input type="time" id="time" name="time" wire:model.live='to'
                            class="mt-1 p-2 border rounded-md focus:outline-none focus:border-blue-500">
                    </span>
                   
                </div>
                
                <div class="mb-5">
                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        bio</label>
                    <textarea id="message" rows="4" name='bio' wire:model.live='bio'
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
{{-- 
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                            required>
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                        me</label>
                </div> --}}
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </div>

</div>
