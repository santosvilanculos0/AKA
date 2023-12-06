<div>
  <div class="row align-items-center">
    <div class="col-auto"><span class="avatar avatar-xl"
        style="background-image: url({{ auth()->user()->image ?? Vite::image('default.png') }})"></span>
    </div>

    <div class="col-auto">
      <input class="d-none" type="file" accept=".jpg,.jpeg,.png"
        wire:model.change="image">
      <button class="btn" type="button" wire:target="image"
        wire:loading.class="disabled"
        onclick="document.querySelector('input[type=\'file\']').click()">
        <span class="spinner-border spinner-border-sm me-2" role="status"
          wire:loading wire:target="image"></span>
        Change avatar
      </button>
    </div>

    @if (auth()->user()->image)
      <div class="col-auto">
        <button class="btn btn-ghost-danger" type="button" wire:click="delete"
          wire:loading.class="disabled" wire:target="delete">
          <span class="spinner-border spinner-border-sm me-2" role="status"
            wire:loading wire:target="delete"></span>
          Delete avatar
        </button>
      </div>
    @endif

  </div>
  <div class="">
    @error('image')
      <p>
        {{ $message }}
      </p>
    @enderror
  </div>

</div>
