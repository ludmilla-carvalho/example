require('./bootstrap');

import 'alpinejs'

import { Editor } from '@tiptap/core'
import StarterKit from '@tiptap/starter-kit'
import Link from '@tiptap/extension-link'

window.setupEditor = function (content) {
  return {
    editor: null,
    content: content,
    
    init(element) {
      this.editor = new Editor({
        element: element,
        extensions: [
          StarterKit,
          Link.configure({
            openOnClick: false,
          }),
        ],
        content: this.content,
        onUpdate: ({ editor }) => {
          this.content = editor.getHTML()
        },
      })

      
      
      this.$watch('content', (content) => {
        // If the new content matches TipTap's then we just skip.
        if (content === this.editor.getHTML()) return
        

        /*
          Otherwise, it means that a force external to TipTap
          is modifying the data on this Alpine component,
          which could be Livewire itself.
          In this case, we just need to update TipTap's
          content and we're good to do.
          For more information on the `setContent()` method, see:
            https://www.tiptap.dev/api/commands/set-content
        */
        this.editor.commands.setContent(content, false)
      })
    }
  }
}

function setLink() {
  alert('zzz');
  /*const previousUrl = this.editor.getAttributes('link').href
  const url = window.prompt('URL', previousUrl)

  // cancelled
  if (url === null) {
    return
  }

  // empty
  if (url === '') {
    this.editor
      .chain()
      .focus()
      .extendMarkRange('link')
      .unsetLink()
      .run()

    return
  }

  // update link
  this.editor
    .chain()
    .focus()
    .extendMarkRange('link')
    .setLink({ href: url })
    .run()*/
}
