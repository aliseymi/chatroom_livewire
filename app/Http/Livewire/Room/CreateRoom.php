<?php

namespace App\Http\Livewire\Room;

use Illuminate\Support\Str;
use Livewire\Component;

class CreateRoom extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|string|min:2|unique:rooms,name'
    ];

    public function create()
    {
        $this->validate();

        auth()->user()->rooms()->create([
            'name' => $this->name,
            'slug' => Str::slug($this->name)
        ]);

        $this->emit('room-added');

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.room.create-room');
    }
}
