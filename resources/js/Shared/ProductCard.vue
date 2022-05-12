<template>
    <div class="card">

        <!-- Book cover-->
        <div class="w-full rounded-2xl relative overflow-hidden scale-[1.03]">
            <img :src="product.cover" :alt="product.name" class="w-full rounded-2xl">
            <p class="absolute right-2/4 translate-x-2/4 bottom-0 bg-white px-6 pt-2 pb-1 rounded-tl-2xl rounded-tr-2xl whitespace-nowrap">$ {{ formattedNumber(product.price) }}</p>
        </div>

        <!-- Book Title, Author, Link to product page -->
        <div>
            <h3 class="font-bold text-lg sm:text-2xl pb-3">{{product.name}}</h3>
            <div class="pb-2 hidden sm:block">
                <p class="text-md tracking-wider text-gray-500 leading-3">Author</p>
                <p>@{{ product.user.username }}</p>
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

const props = defineProps({
    product: Object,
});

const formattedNumber = (number) => {
    return number.toFixed(2);
}
</script>

<style lang="scss" scoped>
.card {
    @apply bg-white;
    @apply rounded-2xl;
    @apply grid;
    @apply grid-cols-2;
    @apply gap-x-2;
    @apply md:gap-x-3;
    @apply items-center;
    @apply pr-2;
}
</style>
