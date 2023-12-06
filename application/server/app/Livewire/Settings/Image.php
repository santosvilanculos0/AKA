<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Image extends Component {
    use WithFileUploads;

    #[Validate('image|max:5120')]
    public $image;

    public function updatedImage() {
        $user = auth()->user();

        if($user->image && Storage::disk('public')->exists($user->image)) {
            Storage::disk('public')->delete($user->image);
        }

        $user->image = $this->image->store('image', 'public');
        $user->save();


    }

    public function delete() {
        $user = auth()->user();

        if($user->image && Storage::disk('public')->exists($user->image)) {
            Storage::disk('public')->delete($user->image);
            $user->image = null;
            $user->save();
        }

    }

    public function render() {
        return view('livewire.settings.image');
    }
}
