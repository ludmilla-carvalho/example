<div class="col-span-2">
    <x-custom.label for="name" value="Nome" required />
    <x-custom.input id="name" type="text" class="" wire:model="user.name" autocomplete="name" />
    <x-custom.input-error for="user.name" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="email" value="E-mail" required />
    <x-custom.input id="email" type="text" class="" wire:model="user.email" autocomplete="email" />
    <x-custom.input-error for="user.email" class="mt-2" />
</div>

<div class="col-span-2">
    @if ($type == 'add')
        <x-custom.label for="password" value="Senha" required/>
    @else
    <x-custom.label for="password" value="Senha" />
    @endif
    <x-custom.input id="password" type="password" class="" wire:model="user.password" />
    <x-custom.input-error for="user.password" class="mt-2" />
</div>
