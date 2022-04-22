<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

</script>

<template>

    <!--
        <tr v-for="review in reviews.data" :key="review.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
            <td class="border-t">
                <p>{{ review.title }}</p>
            </td>

        </tr>
        <pagination class="mt-6" :links="reviews.links" />
    -->



    <div class="">
        <div class="container mx-auto  px-2 xl:px-0 ">
            <h3 class="font-bold text-3xl md:text-4xl text-center">Heres what buyers have to say.</h3>
            <ul id="reviews" class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1  py-7">
                <li v-for="review in reviews.data" :key="review.id"  class="bg-white  rounded-lg" >
                    <div class="bg-yellow-100 border-b-[1px] border-black rounded-t-lg text-center flex items-center gap-x-2 px-2">
                        <svg class="w-10" viewBox="0 0 36 36" fill="none" role="img" xmlns="http://www.w3.org/2000/svg" width="80" height="80"><title>Katharine Lee</title><mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36"><rect width="36" height="36" rx="72" fill="#FFFFFF"></rect></mask><g mask="url(#mask__beam)"><rect width="36" height="36" fill="#ffad08"></rect><rect x="0" y="0" width="36" height="36" transform="translate(7 7) rotate(297 18 18) scale(1)" fill="#73b06f" rx="6"></rect><g transform="translate(3.5 3.5) rotate(7 18 18)"><path d="M13,19 a1,0.75 0 0,0 10,0" fill="#000000"></path><rect x="12" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect><rect x="22" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect></g></g></svg>
                        <p>@{{ review.user_id }}</p>
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

                        <p class="text-xl font-bold mb-2">{{ review.title }}</p>
                        <p class="text-lg">{{ review.review }}</p>

                    </div>

                </li>
            </ul>

            <div class="flex justify-center">
                <pagination class="mt-6" :links="reviews.links" />
            </div>

        </div>

    </div>

</template>
<script>



import NavigationComponent from "@/Components/Structure/NavigationComponent";
import CustomLink from "@/Partials/CustomLink";
import Pagination from '@/Shared/Pagination'



export default {

    props: {
        product: String,
        reviews: Object,
    },
    components: {
        CustomLink,
        Pagination,
    }

}
</script>
