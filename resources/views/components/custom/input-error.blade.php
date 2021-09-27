@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-ruby-800']) }}>{{ $message }}</p>
@enderror
