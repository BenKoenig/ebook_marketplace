<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Nav from "@/Components/Structure/NavigationComponent";
import Footer from "@/Components/Structure/FooterComponent";
import CreateForm from "@/Components/Products/Forms/Create/CreateComponent";
import SuccessComponent from "@/Components/Products/Forms/Create/SuccessComponent";


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

    <SuccessComponent class="h-[70vh]"/>

    <Footer class="py-[2rem] md:py-[3.5rem]"/>


</template>
