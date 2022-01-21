<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Users extends Component
{
    public $users;
    public Room $room;

    protected function getListeners()
    {
        return [
            "echo-presence:room.chat.{$this->room->id},here" => 'setUsersHere',
            "echo-presence:room.chat.{$this->room->id},joining" => 'setUserJoining',
            "echo-presence:room.chat.{$this->room->id},leaving" => 'setUserLeaving'
        ];
    }

    public function setUsersHere($users)
    {
        $this->users = collect($users);
    }

    public function setUserJoining($user)
    {
        $this->users->push($user);
    }

    public function setUserLeaving($user)
    {
        $this->users = $this->users->filter(function ($item) use($user){
            return $item['id'] != $user['id'];
        });
    }

    public function mount()
    {
        $this->users = collect([]);
    }

    public function render()
    {
        return view('livewire.room.users');
    }
}
