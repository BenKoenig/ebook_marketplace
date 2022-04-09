<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Nav from "@/Components/Structure/NavigationComponent";
import Library from "@/Components/Products/Library";
import Footer from "@/Components/Structure/FooterComponent";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    user: Object,
    products: Object,

})
</script>

<template>
    <Head title="Welcome" />

    <p v-for="product in products" key="product.product_id">{{ product.product_id }}</p>
    <Nav :canLogin="canLogin" :canRegister="canRegister"/>

    <Library :user="user" />
    <Footer class="py-[3.5rem] md:py-[7rem]"/>


</template>
