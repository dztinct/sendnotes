<?php

use Livewire\Volt\Component;

new class extends Component {
    
    public function with(): array {
        $notes = Auth::user()->notes()->orderBy('send_date', 'asc')->get();
        return ['notes' => $notes];
    }
}; ?>

<div>
    @foreach ($notes as $note)
        <p>{{ $note->title }}</p>
    @endforeach
</div>
