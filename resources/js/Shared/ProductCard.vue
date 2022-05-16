<template>
    <div class="card">



        <!-- Book cover-->
        <div class="w-full rounded-2xl relative overflow-hidden scale-[1.03]">
            <img :src="'../' + product.cover" :alt="product.name" class="w-full rounded-2xl">
            <p v-if="product.is_public === 0" class="text-sm absolute top-0 left-0 z-30 w-auto bg-white p-2 w-full text-center border border-black rounded-2xl"><i class="fa-solid fa-circle-info mr-1"></i>Ebook in review</p>
            <p class="absolute right-2/4 translate-x-2/4 bottom-0 bg-white px-6 pt-2 pb-1 rounded-tl-2xl rounded-tr-2xl whitespace-nowrap tracking-wide"><i class="fa-solid fa-dollar-sign"></i> {{ formattedNumber(product.price) }}</p>
        </div>

        <!-- Book Title, Author, Link to product page -->
        <div>

            <h3 class="font-bold text-lg sm:text-2xl pb-3">{{product.name}}</h3>
            <div class="pb-2 hidden sm:block">
                <p class="text-md tracking-wider text-gray-500 leading-3">Author</p>
                <Link :href="'/u/' + product.user.username">{{product.user.username}}</Link>
            </div>


            <CustomLink
                :href="'/e/' + product.slug"
                text="Read about it"
                class="w-full bg-yellow-200 hover:bg-yellow-100"
            />
        </div>
    </div>
</template>

<script setup>
import CustomLink from "@/Shared/CustomLink";
import { Link } from '@inertiajs/inertia-vue3'


const props = defineProps({
    product: Object,
});

const formattedNumber = (number) => {
    return number.toFixed(2);
}
</script>

<style lang="scss" scoped>
.card {
    @apply rounded-2xl;
    @apply relative;
    @apply grid;
    @apply grid-cols-2;
    @apply gap-x-2;
    @apply md:gap-x-3;
    @apply items-center;
    @apply pr-2;
    @apply border;
    @apply border-black;
    @apply relative;
}
</style>
