<template>
    <div class="bg-beige-5">
        <div class="container mx-auto pt-10">
            <h3 class="font-bold text-4xl mb-4 text-center">Heres what buyers say.</h3>
            <ul id="reviews" class=" grid grid-cols-3 gap-1  ">
                <li v-for="review in reviews" class="bg-white border-2 border-black" >
                    <div class="bg-yellow-100">
                        <p class="border-text text-3xl font-bold p-2">{{ review.rating }} {{ review.rating > 1 ? 'Points' : 'Point' }}</p>
                    </div>
                    <div class="p-2">
                        <p class="text-md text-gray-400">@{{ review.user.username }}</p>

                        <p class="text-xl font-bold">{{ review.title }}</p>
                        <p class="text-lg">{{ review.review }}</p>
                    </div>

                </li>
            </ul>
                <Link :href="route('dashboard')" class=" max-w-10 bg-yellow-200 border-2 border-black text-lg flex  h-10 justify-center items-center">
                    Leave a Review
                </Link>

        </div>

    </div>

</template>
<script>

import { Head, Link } from '@inertiajs/inertia-vue3';


export default {

    props: ['product', 'reviews'],

}
</script>
