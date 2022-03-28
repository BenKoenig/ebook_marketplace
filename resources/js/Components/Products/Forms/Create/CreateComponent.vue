

<template>
    <div class="w-full bg-white">
        <form @submit.prevent="submit" class="max-w-4xl mx-auto py-10" novalidate>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Book Title</label>
                <input type="text" id="name" v-model="form.name" class="bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Is HTML a Programming Language?" required>
                <p v-if="errors.name" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.name }}</p>

            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product Description</label>
                <editor
                    content_style="div { margin: 10px; border: 5px solid red; padding: 3px; }"
                    class="opacity-0"
                    v-model="form.description"
                    apiKey="1b47gx6ut5u6v0f3x3bppqtt1zv2omav3ub0kss3mb0s3iqo"
                    :init="{
         height: 500,
         menubar: true,
         plugins: [
           'advlist autolink lists link image charmap print preview anchor',
           'searchreplace visualblocks code fullscreen',
           'insertdatetime media table paste code help wordcount'
         ],
         toolbar:
           'undo redo | formatselect | bold italic backcolor | \
           alignleft aligncenter alignright alignjustify | \
           bullist numlist outdent indent code image link | removeformat | help'
       }"
                />
                <p v-if="errors.description" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.description }}</p>
            </div>

            <div class="mb-6">
                <label for="snippet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Snippet</label>
                <textarea id="snippet" v-model="form.snippet" rows="4" class="bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Favorite quote  of your book"></textarea>
                <p v-if="errors.snippet" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.snippet }}</p>
            </div>

            <div class="mb-6">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                <input type="text" id="price" v-model="form.price" class="bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give your product a price" required>
                <p v-if="errors.price" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.price }}</p>
            </div>

            <div class="md:grid grid-cols-2 gap-x-3">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="cover">Upload Book Cover</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="cover_help" id="cover" @input="form.cover = $event.target.files[0]" type="file">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="cover_help">The book cover will be seen in the product list</div>
                    <p v-if="errors.cover" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.cover }}</p>

                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="banner">Upload a banner</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="banner_help"  id="banner" @input="form.banner = $event.target.files[0]" type="file">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="banner_help">The banner image will be seen on the product page</div>
                    <p v-if="errors.banner" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.banner }}</p>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="epub">Upload EPUB file</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="epub_help"  id="epub" @input="form.epub = $event.target.files[0]" type="file">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="epub_help">An EPUB file (short for electronic publication) is in the Open eBook file format. You can download EPUB files and read them on your smartphone, tablet, e-reader, or computer. This freely available eBook standard supports more hardware eBook readers than any other file format. </div>
                    <p v-if="errors.epub" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.epub }}</p>
                </div>
            </div>


            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import Editor from '@tinymce/tinymce-vue'


export default {
    components: {
        'editor': Editor
    },
    props: {
        errors: Object,
    },


  setup () {
    const form = reactive({
      name: null,
      description: null,
      snippet: null,
        cover: null,
        epub: null
    })

    function submit() {
        Inertia.post('/products', form, {
            forceFormData: true,
        })
    }

    return { form, submit }
  },
}
</script>

























































<!--<template>
    <form @submit.prevent="submit">
        <div>
            <label for="name">Name:</label>
            <input id="name" v-model="form.name" class="border-2 border-black" />
        </div>

        <div>
            <label for="description">Description:</label>
            <input id="description" v-model="form.description" class="border-2 border-black" />
        </div>

        <div>
            <label for="snippet">Snippet:</label>
            <input id="snippet" v-model="form.snippet" class="border-2 border-black" />
        </div>


        <button type="submit">Submit</button>

    </form>
</template>

<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

    let form = reactive({
        name: '',
        description: '',
        snippet: '',

    });

    let submit = () => {
        Inertia.post('/products', form);
    }

</script>-->
