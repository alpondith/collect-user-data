<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Collector extends Component {
    public $count = 0;

    public $ipAddress;
    public $time;
    public $path;

    public function render() {
        return view('livewire.collector');
    }

    public function mount() {

        $this->ipAddress = request()->ip();
        $this->time      = now();
        $this->path      = request()->path();
    }

    public function check() {
        $this->count++;
        if ($this->count == 11) {
            return redirect('/');
        }
    }

}
