<template>
    <Guest>
        <Head title="Profile" />

        <!-- start of user profile -->

        <ProductListComponent
            :products="products"
            title="Profile Page"
            :h1="'/u/' + user.username"
            :description="'Discover  ' + user.username + 's products'"
            :hideAuthor="true"
        />

        <!-- end of user profile -->
        <p v-if="products.length === 0" class="component--padding w-full bg-orange-400 rounded-2xl text-2xl font-bold text-white">
            <i class="fa-solid fa-triangle-exclamation mr-1"></i> {{ user.username }} has not published any ebooks yet.
        </p>

    </Guest>
</template>


<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Guest from "@/Layouts/Guest";
import Headline from "@/Shared/Headline";
import ProductListComponent from "@/Components/ProductListComponent";

const props = defineProps({
    user: Object,
    products: Object
});

</script>
