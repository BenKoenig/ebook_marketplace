<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>

<!--    <div class="md:mb-2 px-2 xl:px-0">
        <div class="container mx-auto ">
            <img v-bind:src="'../storage/' + product.banner" class="  w-full rounded-lg" v-bind:alt="product.name + ' banner'" >

        </div>
    </div>-->



    <div>
        <div class="mt-3 container mx-auto sm:grid sm:grid-cols-12 gap-x-5 md:gap-x-7 lg:gap-x-9 xl:gap-x-11 p-2 lg:p-10  rounded-lg  bg-beige-4">
            <div class="sm:sticky sm:top-1 h-fit  w-full sm:col-span-5 xl:col-span-3 sm:order-2  mx-auto relative">

                <!-- Displays book cover -->
                    <img v-bind:src="'../storage/' + product.cover" class="w-full mb-1 rounded-lg" v-bind:alt="product.name + ' cover'" >


                    <div class="flex gap-1">

                        <!-- Link to reviews -->
                        <!--                    <Link :href="route('dashboard')" class="bg-white border-[1px] border-black text-lg flex w-full h-10 justify-center items-center rounded-lg">
                                                Reviews
                                            </Link>-->

                    <!-- Link to buy -->
                    <Link href="/" class="bg-yellow-100 border-[1px] border-black text-lg flex w-full h-10 justify-center items-center rounded-lg">
                        Buy
                    </Link>

                </div>
            </div>

            <div class="w-full sm:col-span-7 xl:col-span-9  sm:order-1">
                <h1 class="text-2xl md:text-5xl font-bold pb-7 pt-8 sm:pt-0">{{ product.name }}</h1>

                <div class="xl:flex grid   items-center   mb-7 flex-wrap">
                    <p class="text-xl py-3 px-4 border-[1px] border-black h-full flex items-center bg-yellow-100 rounded-tl-lg rounded-tr-lg xl:rounded-tr-none xl:rounded-l-lg"><!--<i class="fa-solid fa-tag"></i>-->$ {{ product.price }}</p>
                    <p class="text-xl py-3 px-4  border-[1px] border-black  h-full flex items-center ">@{{ product.user.username }}</p>
                    <div class="flex py-3 px-4 gap-x-1 items-center  text-xl   border-[1px] border-black h-full">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> {{ reviews.total }} Reviews </p>
                    </div>
                    <p class="text-xl py-3 px-4 border-[1px] h-full border-black flex items-center rounded-bl-lg rounded-br-lg xl:rounded-bl-none  xl:rounded-r-lg gap-x-2  "><i class="fa-solid fa-cart-shopping"></i> 53 Purchases</p>

                </div>
                <p class="pb-7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
                <div class="pattern-2 border-[1px] border-black py-10 px-2 md:px-10  relative  rounded-lg">
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

export default {
    props: ['product', 'reviews'],




}
</script>



