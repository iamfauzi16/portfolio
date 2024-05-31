@props(['link', 'name_button', 'type'])

@switch($type)
    @case('primary')
        <a href="{{ $link }}"
           class="bg-tertiary px-8 py-2 text-secondary font-text rounded-full font-semibold shadow-xl hover:bg-primary border border-2 border-white hover:text-text transition focus:ring" target="_blank" rel="noopener noreferrer">
            {{ $name_button }}
        </a>
    @break

    @case('secondary')
        <a href="{{ $link }}"
           class="border border-2 border-text px-8 py-2 rounded-full text-text font-semibold shadow-xl" target="_blank" rel="noopener noreferrer">
            {{ $name_button }}
        </a>
    @break

    @default
        <a href="{{ $link }}"
           class="px-8 py-2 rounded-full font-semibold shadow-xl" target="_blank" rel="noopener noreferrer">
            {{ $name_button }}
        </a>
@endswitch
