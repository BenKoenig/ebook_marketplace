<template>
    <Guest>
        <Head title="Library" />

        <!-- start of library -->
        <div class="library component--padding">
            <Headline title="All your ebooks at once place"
                      h2="Library"
                      description="View your purchased ebooks"
                      class="within--paddingB"
            />
            <div class="library__grid">
                <div v-for="product in products" key="product.product_id" class="library__grid__item">
                    <Link :href="'/read/' + product.slug"  class="absolute w-full h-full z-20"></Link>
                    <img v-bind:src="'../storage/' + product.cover" :alt="product.name" class="mx-1 mt-1 ">
                    <div class="mx-2 py-3 flex gap-x-2 justify-between">
                        <h3 class="leading-5 tracking-wide">{{ product.name }}</h3>
                        <Link :href="'/d/' +  product.id" class="relative z-30"><i class="fa-solid fa-download"></i> <span class="sr-only">Download ebook</span></Link>
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
import Headline from "@/Shared/Headline";

const props = defineProps({
    user: Object,
    products: Object,
});

</script>

<style lang="scss" scoped>
.library {

    &__grid {
        @apply grid;
        @apply grid-cols-2;
        @apply xl:grid-cols-3;
        @apply 2xl:grid-cols-5;
        @apply gap-1;
        @apply xl:gap-3;

        &__item {
            @apply relative;
            @apply flex;
            @apply flex-col;
            @apply border;
            @apply border-black;
            @apply bg-white;
            @apply box-border;
            @apply transition-transform;
            box-shadow: 5px 5px 0px 0.01px #000000;
            @apply hover:scale-[1.015];  
            @apply rounded-lg;
        }
    }

}

</style>
