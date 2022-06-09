<div>
    <form wire:submit.prevent="save">
        <input type="file" wire:model="photo">

        <br />

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <br />

        <button type="submit">Save Photo</button>
    </form>
</div>
