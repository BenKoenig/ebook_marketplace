<template>
    <Guest>
        <Head title="Profile" />

        <!-- start of user profile -->

        <ProductListComponent
            :products="products"
            title="Profile Page"
            :h1="'/u/' + user.username"
            :description="'Discover  ' + user.username + 's products'"
        />

        <!-- end of user profile -->

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
