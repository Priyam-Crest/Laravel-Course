<?php

namespace App\Livewire;

use App\Models\Option;
use App\Models\Poll;
use Livewire\Component;

class Polls extends Component
{
    protected $listeners = [
        'pollCreated' => 'render'
    ];

    public function render()
    {
        $polls = Poll::with('options.votes')->latest()->get();

        return view('livewire.polls',compact('polls'));
    }

    public function vote(Option $option)
    {
        $option->votes()->create();
    }

    public function delete($pollId)
    {
        $poll = Poll::findOrFail($pollId);

        $poll->delete();
    }
}
