<?php

namespace App\Http\Livewire\Room;

use App\Models\Message;
use Livewire\Component;

class Messages extends Component
{
    public $messages;

    protected $listeners = [
        'message.added' => 'prependMessage'
    ];

    public function prependMessage($messageId)
    {
        $this->messages->prepend(Message::find($messageId));
    }

    public function mount($messages)
    {
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.room.messages');
    }
}
