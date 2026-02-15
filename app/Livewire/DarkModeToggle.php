<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class DarkModeToggle extends Component
{
    public bool $isDark = false;

    public function mount(): void
    {
        $this->isDark = session('dark_mode', false);
    }

    #[On('toggle-dark-mode')]
    public function toggle(): void
    {
        $this->isDark = ! $this->isDark;
        session(['dark_mode' => $this->isDark]);
        $this->dispatch('dark-mode-toggled', isDark: $this->isDark);
    }

    public function render()
    {
        return view('livewire.dark-mode-toggle');
    }
}
