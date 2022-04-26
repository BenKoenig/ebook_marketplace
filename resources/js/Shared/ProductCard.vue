<template>
    <div class="border-2 border-slate-500 bg-slate-200  rounded-2xl grid grid-cols-2 items-center gap-x-2 md:gap-x-3 p-1">

        <!-- Book cover-->
        <img :src="product.cover" :alt="product.name" class="w-full rounded-2xl">

        <!-- Book Title, Author, Link to product page -->
        <div>
            <h3 class="font-bold text-lg md:text-2xl  pb-3">{{product.name}}</h3>
            <p class="uppercase text-md tracking-wider ">Author</p>
            <p class="pb-3">@{{ product.user.username }}</p>
            <CustomLink :href="'/e/' + product.slug" text="Read about it"></CustomLink>
        </div>

    </div>
</template>

<script setup>
import CustomLink from "@/Shared/CustomLink";

const props = defineProps({
    product: Object,
});
</script>
