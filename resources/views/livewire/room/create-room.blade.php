<form wire:submit.prevent="create">
    Create Your Chat Room :
    <input type="text" wire:model.defer="name" placeholder="chat room name" class="rounded-md p-2 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">Create</button>

{{--    validation errors--}}
    <x-auth-validation-errors class="mt-3" :errors="$errors"/>
</form>
