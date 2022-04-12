<template>
    <div class="container mx-auto">

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-6 gap-1 xl:gap-3 px-1">
            <div v-for="product in products" key="product.product_id" class="relative flex flex-col border-[1px] border-black rounded-lg">
                <a href="#" class="absolute w-full h-full"></a>

                <img :src="product.cover" :alt="product.name" class="mx-1 mt-1 rounded-lg">
                <div class="mx-2 py-3">
                    <h3 class="text-lg md:text-xl leading-5 font-bold">{{ product.name }}</h3>
<!--                    <p class="text-black h-10 items-center flex rounded-lg font-medium text-lg w-fit focus:outline-none border-[1px] border-black focus:ring-4 focus:black text-sm px-5 ">Read</p>-->
                </div>
            </div>

        </div>
    </div>



</template>


<script>
import Headline from "@/Partials/Headline";
export default {
    components: {Headline},
    props: ['products'],
}
</script>
