<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>

    <div class="bg-beige-5">
        <div class="container mx-auto">
            <p></p>
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-72  sm:h-64 xl:h-80 2xl:h-96">
                    <div class=" duration-700 ease-in-out" data-carousel-item>
                        <!-- Book banner image -->
                        <img v-bind:src="'../storage/' + product.banner" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" v-bind:alt="product.name + ' banner'" >
                </div>
            </div>
        </div>
    </div>


    <div class="bg-beige-5">
        <div class="container mx-auto sm:grid sm:grid-cols-12 gap-x-14 p-2 lg:p-10    bg-white">
            <div class="sm:sticky sm:top-1 h-fit  w-full sm:col-span-4 md:col-span-3 sm:order-2  mx-auto relative">

                <!-- Displays book cover -->
                <img v-bind:src="'../storage/' + product.cover" class="w-full mb-1" v-bind:alt="product.name + ' cover'" >

                <!-- Review container -->
                <div class="bg-white border-2 border-black mb-1 flex flex-col items-center  py-6 ">
                    <p class="text-xl">Rating</p>
                    <div class="flex -mt-1">
                        <p class="font-bold text-7xl">4.6</p><p class="text-3xl">/5</p>
                    </div>
                </div>

                <div class="flex gap-1">

                    <!-- Link to reviews -->
                    <Link :href="route('dashboard')" class="bg-white border-2 border-black text-lg flex w-full h-10 justify-center items-center">
                        Reviews
                    </Link>

                    <!-- Link to buy -->
                    <Link :href="route('dashboard')" class="bg-yellow-200 border-2 border-black text-lg flex w-full h-10 justify-center items-center">
                        Buy
                    </Link>

                </div>
            </div>

            <div class="w-full sm:col-span-8 md:col-span-9  sm:order-1 ">
                <h1 class="text-2xl md:text-5xl font-bold pb-5 pt-8 sm:pt-0">{{ product.name }}</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
                <div class="bg-beige-5 py-10 px-2 md:px-10  relative my-8 sm:my-16">
                    <svg class="absolute  -bottom-6 right-1 lg:right-4 h-[4.5rem]" viewBox="0.5 1 323.42 115"><text transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"><tspan x="0" y="0">Snippet</tspan></text></svg>
                    <p class="text-xl md:text-3xl ">“{{product.snippet}}“</p>

                </div>
                <div class="unreset">
                    <p  v-html="product.description">
                    </p>
                </div>

            </div>
        </div>



    </div>



</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';


export default {

    props: ['product', 'reviews'],

}
</script>



