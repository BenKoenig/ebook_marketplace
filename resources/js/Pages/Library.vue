<template>
    <Guest>
        <Head title="Library" />

        <!-- start of library -->
        <div class="mx-auto component--padding">
            <div class="grid grid-cols-2 xl:grid-cols-3  2xl:grid-cols-5 gap-1 xl:gap-3 px-1">
                <div v-for="product in products" key="product.product_id" class="relative flex flex-col border-[1px] border-black rounded-lg ">
                    <Link :href="'/read/' + product.slug"  class="absolute w-full h-full z-20"></Link>
                    <img :src="product.cover" :alt="product.name" class="mx-1 mt-1 rounded-lg">
                    <div class="mx-2 py-3">
                        <h3 class="text-lg md:text-xl leading-5 font-bold">{{ product.name }}</h3>
                    </div>
                </div>

            </div>
        </div>
        <!-- end of library -->

    </Guest>
</template>


<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Guest from "@/Layouts/Guest";

const props = defineProps({
    user: Object,
    products: Object,
});

</script>
