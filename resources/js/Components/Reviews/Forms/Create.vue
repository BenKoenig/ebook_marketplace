

<template>
    <div class="w-full bg-white">
        <form @submit.prevent="submit" class="max-w-4xl mx-auto py-10" novalidate>
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Title</label>
                <textarea id="title" v-model="form.title" rows="4" class="bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Favorite quote  of your book"></textarea>
                <p v-if="errors.title" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.title }}</p>
            </div>

            <div class="mb-6">
                <label for="review" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Review</label>
                <input type="text" id="review" v-model="form.review" class="bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give your product a price" required>
                <p v-if="errors.review" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.review }}</p>
            </div>

            <div class="mb-6">
                <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rating</label>
                <input type="text" id="rating" v-model="form.rating" class="bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give your product a price" required>
                <p v-if="errors.rating" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.rating }}</p>
            </div>


            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'


export default {

    props: {
        errors: Object,
    },


    setup () {
        const form = reactive({
            title: null,
            review: null,
            rating: null,
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
