<?php

namespace App\Http\Livewire\Room;

use App\Events\Room\MessageAdded;
use App\Models\Room;
use Livewire\Component;

class NewMessage extends Component
{
    public $message;
    public Room $room;

    protected $rules = [
        'message' => 'required|string'
    ];

    public function newMessage()
    {
        $this->validate();

        $message = $this->room->messages()->create([
            'body' => $this->message,
            'user_id' => auth()->user()->id
        ]);

        $this->emit('message.added', $message->id);

        broadcast(new MessageAdded($this->room->id, $message->id))->toOthers();

        $this->message = '';
    }

    public function render()
    {
        return view('livewire.room.new-message');
    }
}
