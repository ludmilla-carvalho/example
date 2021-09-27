@props(['id' => null, 'maxWidth' => null])

<x-custom.modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="p-5">
        <div class="overflow-y-auto max-h-96" id="mmodal">
            <div class="text-lg font-semibold text-azul-800 dark:text-ruby-600">
                {{ $title }}
            </div>

            <div class="mt-2 text-azul-800 dark:text-white">
                <div class="px-5">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>

    <div class="px-5 pb-5 text-right bg-white dark:bg-gray-800">
        {{ $footer }}
    </div>
</x-custom.modal>
