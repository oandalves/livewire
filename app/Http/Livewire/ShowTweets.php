<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message = "Apenas um teste";

    public function render()
    {
        // Recuperar todos os tweets
        $tweets = Tweet::get();
        return view('livewire.show-tweets', compact('tweets'));
    }
}
