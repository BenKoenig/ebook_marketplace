<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <div class="py-36">
        <div class="container mx-auto ">
            <h3 class="font-bold text-4xl mb-4 text-center">Heres what buyers say.</h3>
            <ul id="reviews" class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1  py-10">
                <li v-for="review in reviews" class="bg-white border-2 border-black rounded-lg" >
                    <div class="bg-yellow-100 border-b-2 border-black rounded-t-lg text-center">
                        <p class="border-text text-3xl font-bold p-2">{{ review.rating }} {{ review.rating > 1 ? 'Points' : 'Point' }}</p>
                    </div>
                    <div class="p-2">
                        <p class="text-md text-gray-400">@{{ review.user.username }}</p>

                        <p class="text-xl font-bold">{{ review.title }}</p>
                        <p class="text-lg">{{ review.review }}</p>
                    </div>

                </li>
            </ul>

            <div class="grid grid-cols-12 items-center ">
                <div class="col-span-2">
                    <CustomLink msg="Leave a review" init_background-color="#FDB383" init_text-color="#000" init_hoverColor="#FFC7A2" />
                </div>


                <div class="col-span-8 mx-auto">
                    <ul class="inline-flex -space-x-px">
                        <li>
                            <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </div>


            </div>

        </div>

    </div>

</template>
<script>



import NavigationComponent from "@/Components/Structure/NavigationComponent";
import CustomLink from "@/Partials/CustomLink";

export default {

    props: ['product', 'reviews'],
    components: {CustomLink}

}
</script>
