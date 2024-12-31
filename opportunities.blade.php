<div>
    <div>
        <label for="perPage">Items per page:</label>
        <select wire:model="perPage" id="perPage">
            @foreach($options as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>

    <div>
        @foreach($items as $item)
            <div>{{ $item->name }}</div>
        @endforeach
    </div>

    {{ $items->links() }}
</div>
