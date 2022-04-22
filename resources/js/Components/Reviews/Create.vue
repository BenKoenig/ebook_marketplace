

<template>
    <div v-if="!userHasReviewed.length">
        <h3 class="font-bold text-3xl md:text-4xl text-center  mb-7">You have purchased this ebook. Share your experience.</h3>
        <div class=" container mx-auto  items-center">
            <div class="w-full">
                <form @submit.prevent="submit" class="max-w-4xl mx-auto " novalidate>
                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                        <input type="text" id="title" v-model="form.title" class="rounded-lg bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="The title of your review" required>
                        <p v-if="errors.title" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.title }}</p>
                    </div>

                    <div class="mb-6">
                        <label for="review" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Review</label>
                        <textarea id="review" v-model="form.review" rows="4" class="rounded-lg bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Review this ebook"></textarea>
                        <p v-if="errors.review" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.review }}</p>
                    </div>


                    <div class="mb-6">
                        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rating</label>
                        <input type="text" id="rating" v-model="form.rating" class="rounded-lg bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give your product a price" required>
                        <p v-if="errors.rating" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.rating }}</p>
                    </div>


                    <button type="submit" class="rounded-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>

        </div>

    </div>


</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'



export default {

    props: {
        errors: Object,
        product: Object,
        username: String,
        userHasReviewed: Array,
    },


    setup () {
        const form = reactive({
            title: null,
            review: null,
            rating: null,
        })

        function submit() {
                Inertia.post('/reviews/' , form, {
                forceFormData: true,
            })
        }

        return { form, submit }
    },
}
</script>
