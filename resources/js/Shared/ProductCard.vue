<template>
    <div class="card">

        <!-- Book cover-->
        <img :src="product.cover" :alt="product.name" class="w-full rounded-2xl">

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
                class="w-fit"
            />
        </div>


    </div>
</template>

<script setup>
import CustomLink from "@/Shared/CustomLink";

const props = defineProps({
    product: Object,
});
</script>

<style lang="scss" scoped>
.card {
    @apply border;
    @apply border-slate-500;
    @apply bg-white;
    @apply rounded-2xl;
    @apply grid;
    @apply grid-cols-2;
    @apply gap-x-2;
    @apply md:gap-x-3;
    @apply p-1;
    @apply items-center;
}
</style>
