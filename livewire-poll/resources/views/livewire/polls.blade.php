<div>
    @forelse ($polls as $poll)
        <div class="mb-5 bg-indigo-100 p-3 rounded drop-shadow-md">
            <div class="flex justify-between">
                <h3 class="mb-4 text-xl font-bold w-fit">
                    {{ $poll->title }}
                </h3>
                <div class="w-fit">
                    {{-- <button class="btn mr-2 bg-amber-300 hover:text-white hover:bg-amber-600">Edit</button> --}}
                    <button class="btn bg-red-300 hover:text-white hover:bg-red-600" wire:click="delete({{ $poll->id }})">Delete</button>
                </div>
            </div>
            @foreach ($poll->options as $option)
                <div class="mb-2">
                    <button class="btn bg-green-300 mr-2 hover:text-white hover:bg-green-600" wire:click="vote({{ $option->id }})">Vote ({{ $option->votes->count() }})</button>
                    {{ $option->name }} 
                </div>
            @endforeach
            <div class="text-xs text-gray-500"> {{ $poll->created_at->diffForHumans() }}</div>
        </div>
    @empty
        <div class="text-gray-500">No Polls are Available</div>
    @endforelse
</div>
