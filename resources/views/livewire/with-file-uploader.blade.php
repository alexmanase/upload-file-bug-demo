<div>
    <form wire:submit.prevent="save">
        <input type="file" wire:model="image">

        <br />

        @error('image') <span class="error">{{ $message }}</span> @enderror

        <br />

        <button type="submit">Save Photo</button>
    </form>
</div>
