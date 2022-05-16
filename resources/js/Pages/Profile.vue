<template>
    <Guest>
        <Head title="Profile" />

        <!-- start of library -->


        <ProductListComponent
            :products="products"
            title="Profile Page"
            :h1="user.username"
            :description="'Discover  ' + user.username + 's products'"
        />

        <!-- end of library -->

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
