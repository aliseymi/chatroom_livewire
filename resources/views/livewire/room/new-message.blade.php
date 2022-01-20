<form wire:submit.prevent="newMessage" class="flex items-start space-x-3">
    <div class="flex flex-col w-full">
        <textarea wire:model.defer="message" class="rounded-md p-2 shadow-sm border-gray-300 w-full" placeholder="Your Message" rows="2" width="100%"></textarea>

        <x-room.validation-errors :errors="$errors"/>
    </div>
    <button type="submit" class="bg-blue-500 text-white rounded p-2 px-4">send</button>


</form>
