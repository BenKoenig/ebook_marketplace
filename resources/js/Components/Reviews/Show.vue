<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <div class="py-36">
        <div class="container mx-auto  px-2 xl:px-0 ">
            <h3 class="font-bold text-3xl md:text-4xl mb-4 text-center">Heres what buyers have to say.</h3>
            <ul id="reviews" class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1  py-10">
                <li v-for="review in reviews" class="bg-white  rounded-lg" >
                    <div class="bg-yellow-100 border-b-2 border-black rounded-t-lg text-center flex items-center gap-x-2 px-2">
                        <svg class="w-10" viewBox="0 0 36 36" fill="none" role="img" xmlns="http://www.w3.org/2000/svg" width="80" height="80"><title>Katharine Lee</title><mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36"><rect width="36" height="36" rx="72" fill="#FFFFFF"></rect></mask><g mask="url(#mask__beam)"><rect width="36" height="36" fill="#ffad08"></rect><rect x="0" y="0" width="36" height="36" transform="translate(7 7) rotate(297 18 18) scale(1)" fill="#73b06f" rx="6"></rect><g transform="translate(3.5 3.5) rotate(7 18 18)"><path d="M13,19 a1,0.75 0 0,0 10,0" fill="#000000"></path><rect x="12" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect><rect x="22" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect></g></g></svg>
                        <p>@{{ review.user.username }}</p>
                        <p> | </p>
                        <div class="flex">
                            <div v-for="review in review.rating">
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                    </div>
                    <div class="p-2">
                        <div>


                        </div>

                        <p class="text-xl font-bold">{{ review.title }}</p>
                        <p class="text-lg">{{ review.review }}</p>

                    </div>

                </li>
            </ul>

            <div class="md:grid grid-cols-12 items-center flex flex-col justify-center gap-y-4">
                <div class="col-span-3">
                    <CustomLink routeme="dashboard"  msg="Leave a review" init_background-color="#FDB383" init_text-color="#000" init_hoverColor="#FFC7A2" />
                </div>


                <div class="col-span-6 mx-auto">
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
