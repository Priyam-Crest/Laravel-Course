<div>
    <form wire:submit.prevent="createPoll">
        <label>Poll Title</label>
        <input class="bg-indigo-100 rounded ring-2 ring-indigo-200 ring-inset" type="text" wire:model="title" />
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="my-4">
            <button class="btn bg-white" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div class="my-4">
            @foreach ($options as $index => $option)
                <div class="my-4">
                    <label>Option {{ $index + 1 }} </label>
                </div>
                <div class="flex gap-2">
                    <input class="bg-indigo-100 rounded ring-2 ring-indigo-300 ring-inset" type="text" wire:model="options.{{ $index }}">
                    
                    <button class="btn bg-white {{ count($options) === 1 ? 'opacity-50 cursor-not-allowed' : '' }}" 
                            {{ count($options) === 1 ? 'disabled' : '' }}
                            wire:click.prevent="removeOption({{ $index }})">
                        Remove
                    </button>
                </div>
                @error("options.{$index}")
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            @endforeach
        </div>

        <button class="btn bg-white" type="submit">Create Poll</button>
    </form>
    <hr class="md:hidden border-2 border-indigo-200 border-b-indigo-500 mt-4" />
</div>
