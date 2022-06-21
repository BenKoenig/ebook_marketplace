<template>
    <div class="relative grid grid-cols-2 sm:grid-cols-1 xl:grid-cols-2 gap-x-2 md:gap-x-3 items-center  border border-black  bg-white rounded-lg">
        <!-- Book cover-->
        <div class="w-full relative overflow-hidden bg-gray-100 rounded-lg">
            <img v-bind:src="'../storage/' + product.cover" :alt="product.name" class="w-full max-w-xs mx-auto">
            <p v-if="product.is_public === 0" class="text-sm absolute top-0 left-0 z-30 bg-white p-2 w-full text-center "><i class="fa-solid fa-circle-info mr-1"></i>Ebook in review</p>
            
            <!-- Price -->
            <p class="absolute right-2/4 translate-x-2/4 bottom-0 bg-white px-6 pt-2 pb-1 whitespace-nowrap tracking-wide rounded-lg"><i class="fa-solid fa-dollar-sign"></i> {{ formattedNumber(product.price) }}</p>
        </div>

        <!-- Book Title, Author, Link to product page -->
        <div class="pr-2 sm:p-2 xl:pl-0 xl:pb-0 xl:pt-0">

            <!-- Displays product name -->
            <h3 class="font-bold text-lg sm:text-2xl pb-3">{{product.name}}</h3>
            <div v-if="$page.props.auth.user ? $page.props.auth.user.id !== product.user_id : true" class="pb-2 hidden sm:block">
                <p class="text-md tracking-wider text-gray-500 leading-3">Author</p>
                <!-- Link to author profile -->
                <Link :href="'/u/' + product.user.username">{{product.user.username}}</Link>
            </div>

            <!-- Link to the product page -->
            <CustomLink
                :href="'/e/' + product.slug"
                text="Read about it"
                class="w-full bg-yellow-200 hover:bg-yellow-100"
            />

            <!-- Link to the edit page -->
            <CustomLink
                v-if="$page.props.auth.user ? $page.props.auth.user.id === product.user_id : false"
                :href="'/edit/' + product.slug"
                text="Edit"
                class="w-full mt-2"
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