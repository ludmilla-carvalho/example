@props(['list' => false, 'link' => false])

<div x-data="setupEditor( @entangle($attributes->wire('model')).defer )" x-init="() => init($refs.editor)" wire:ignore {{ $attributes->whereDoesntStartWith('wire:model') }}>
  <template x-if="editor">
    <div class="menu">
      {{-- 
          Componente:
          https://www.tiptap.dev/

          Ícones:
          https://icons.getbootstrap.com/    
      --}}


      
      <button @click="editor.chain().toggleBold().focus().run()" :class="{ 'is-active': editor.isActive('bold') }" class="px-2 py-1 text-white transition-colors duration-150 bg-azul-900 dark:bg-ruby-600 border border-transparent rounded-sm active:bg-azul-600 hover:bg-azul-800 dark:active:bg-ruby-500 dark:hover:bg-ruby-700 focus:outline-none" title="Negrito">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-type-bold" viewBox="0 0 16 16">
              <path d="M8.21 13c2.106 0 3.412-1.087 3.412-2.823 0-1.306-.984-2.283-2.324-2.386v-.055a2.176 2.176 0 0 0 1.852-2.14c0-1.51-1.162-2.46-3.014-2.46H3.843V13H8.21zM5.908 4.674h1.696c.963 0 1.517.451 1.517 1.244 0 .834-.629 1.32-1.73 1.32H5.908V4.673zm0 6.788V8.598h1.73c1.217 0 1.88.492 1.88 1.415 0 .943-.643 1.449-1.832 1.449H5.907z"/>
          </svg>
      </button>

      <button @click="editor.chain().toggleItalic().focus().run()" :class="{ 'is-active': editor.isActive('italic') }" class="px-2 py-1 text-white transition-colors duration-150 bg-azul-900 dark:bg-ruby-600 border border-transparent rounded-sm active:bg-azul-600 hover:bg-azul-800 dark:active:bg-ruby-500 dark:hover:bg-ruby-700 focus:outline-none" title="Itálico">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-type-italic" viewBox="0 0 16 16">
              <path d="M7.991 11.674 9.53 4.455c.123-.595.246-.71 1.347-.807l.11-.52H7.211l-.11.52c1.06.096 1.128.212 1.005.807L6.57 11.674c-.123.595-.246.71-1.346.806l-.11.52h3.774l.11-.52c-1.06-.095-1.129-.211-1.006-.806z"/>
            </svg>
      </button>

      @if ($list == true)
          <button @click="editor.chain().focus().toggleBulletList().run()" :class="{ 'is-active': editor.isActive('italic') }" class="px-2 py-1 text-white transition-colors duration-150 bg-azul-900 dark:bg-ruby-600 border border-transparent rounded-sm active:bg-azul-600 hover:bg-azul-800 dark:active:bg-ruby-500 dark:hover:bg-ruby-700 focus:outline-none" title="Lista desordenada">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
          </button>

          <button @click="editor.chain().focus().toggleOrderedList().run()" :class="{ 'is-active': editor.isActive('italic') }" class="px-2 py-1 text-white transition-colors duration-150 bg-azul-900 dark:bg-ruby-600 border border-transparent rounded-sm active:bg-azul-600 hover:bg-azul-800 dark:active:bg-ruby-500 dark:hover:bg-ruby-700 focus:outline-none" title="Lista ordenada">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
              <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
            </svg>
          </button>
      @endif

      @if ($link == true)
          <button @click="editor
          .chain()
          .focus()
          .extendMarkRange('link')
          .setLink({ href: window.prompt('URL', editor.getAttributes('link').href) })
          .run()" :class="{ 'is-active': editor.isActive('link') }" class="px-2 py-1 text-white transition-colors duration-150 bg-azul-900 dark:bg-ruby-600 border border-transparent rounded-sm active:bg-azul-600 hover:bg-azul-800 dark:active:bg-ruby-500 dark:hover:bg-ruby-700 focus:outline-none" title="Link">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
              <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
              <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
            </svg>
          </button>
      @endif

    </div>
  </template>

  <div class="" x-ref="editor"></div>
</div>