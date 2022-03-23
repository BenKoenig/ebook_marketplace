<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Nav from "@/Components/NavigationComponent";
import Footer from "@/Components/FooterComponent";
import CreateForm from "@/Components/Products/Forms/Create/CreateComponent";


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    products: Object,
    errors: Object,
})
</script>

<template>
    <Head title="Sell an eBook" />


    <Nav :canLogin="canLogin" :canRegister="canRegister"/>

    <CreateForm :products="products" :errors="errors"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>


</template>
