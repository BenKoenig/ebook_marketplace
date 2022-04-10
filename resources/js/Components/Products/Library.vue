<template>
    <div class="container mx-auto">

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-6 gap-1 xl:gap-3 px-1">
            <div v-for="product in products" key="product.product_id" class="relative">
                <a href="#" class="absolute w-full h-full "></a>

                <img :src="product.cover" :alt="product.name" class="">

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
