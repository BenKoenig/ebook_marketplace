<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Hero from "@/Layouts/Hero";
import Nav from "@/Layouts/Nav";
import Steps from "@/Layouts/Steps";
import FeaturedProducts from "@/Layouts/FeaturedProducts";
import Banner from "@/Layouts/Banner";
import Footer from "@/Layouts/Footer";
import Headline from "@/Partials/Headline";
import CreateForm from "@/Layouts/CreateForm";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    products: Object,
})
</script>

<template>
    <Head title="Sell an eBook" />
    <Nav />
    <CreateForm :products="products"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>


</template>
