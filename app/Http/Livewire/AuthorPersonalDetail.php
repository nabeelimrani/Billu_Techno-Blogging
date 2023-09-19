<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class AuthorPersonalDetail extends Component
{
    public $author;
    public $name,$username,$email,$biography;

    public function mount()
    {
        $this->author = User::find(auth('web')->id());
        $this->name = $this->author->name;
        $this->username = $this->author->username;
        $this->email = $this->author->email;
        $this->biography = $this->author->biography;
    }
    public function UpdateDetail()
    {
        $this->validate([
            'name' => 'required|string',
            'username' => 'required|unique:users,username,'.auth('web')->id(),
           
        ],
    [
        'name.required' => 'Name is Required *',
        'name.string' => 'Name must be Alphabets *',
        'username.required' => 'Username is Required *',
        'username.unique' => 'This Username Already Exists *',
       
    ]);

        User::where('id', auth('web')->id())->update([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'biography' => $this->biography,
        ]);

        $this->emit('updateAuthorProfileHeader');
    $this->emit('updateTopHeader');
    
    }
    public function render()
    {
        return view('livewire.author-personal-detail');
    }
}
