<template>
    <Guest>
        <Head :title="user.username" />

        <!-- start of user profile -->

        <ProductListComponent
            :products="products"
            title="Profile Page"
            :h1="'/u/' + user.username"
            :description="'Discover  products by @' + user.username"
            :hideAuthor="true"
        />

        <!-- end of user profile -->
        <p v-if="products.length === 0" class="component--padding w-full bg-beige-400 text-2xl">
            <i class="fa-solid fa-triangle-exclamation mr-1"></i> {{ user.username }} has not published any ebooks yet.
        </p>

    </Guest>
</template>


<script setup>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Guest from "@/Layouts/Guest";
import Headline from "@/Shared/Headline";
import ProductListComponent from "@/Components/ProductListComponent";

const props = defineProps({
    user: Object,
    products: Object
});

</script>
