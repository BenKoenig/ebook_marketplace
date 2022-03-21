<template>


    <form @submit.prevent="submit" class="max-w-4xl mx-auto py-10">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Name</label>
            <input type="text" id="name" v-model="form.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Is HTML a Programming Language?" required>
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product Description</label>
            <textarea id="description" v-model="form.description" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your product"></textarea>
        </div>

        <div class="mb-6">
            <label for="snippet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Snippet</label>
            <textarea id="snippet" v-model="form.snippet" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Favorite quote  of your book"></textarea>
        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
            <input type="text" id="price" v-model="form.price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Give your product a price" required>
        </div>

        <div class="md:grid grid-cols-2 gap-x-3">
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="cover">Upload Book Cover</label>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="cover_help" id="cover" @input="form.cover = $event.target.files[0]" type="file">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="cover_help">The book cover will be seen in the product list</div>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="banner">Upload Banner Image</label>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="banner_help"  id="banner" type="file">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="banner_help">The banner image will be seen on the product page</div>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="epub">Upload ePub file</label>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="epub_help"  id="epub" @input="form.epub = $event.target.files[0]" type="file">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="epub_help">A profile picture is useful to confirm your are logged into your account</div>
            </div>
        </div>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

export default {
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
