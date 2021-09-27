@props(['disabled' => false, 'options' => array(), 'action' => null])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full text-sm dark:border-gray-600 dark:bg-gray-700 dark:focus:border-gray-500 focus:border-azul-400 focus:outline-none dark:text-gray-300 form-select']) !!} style="width:100%">
    @if ($action == 'create')
        <option value="">Selecione...</option>
    @endif
    @foreach ($options as $item)
        @if (is_array($options))
            <option value="{{ $item['id'] }}">{{ $item['title'] }}</option>
        @else
            <option value="{{ $item->id }}">{{ $item->title }}</option>
        @endif
        
    @endforeach
</select>

