<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Nav from "@/Components/Structure/NavigationComponent";
import Library from "@/Components/Products/Library";
import Footer from "@/Components/Structure/FooterComponent";
import Headline from "@/Partials/Headline";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    user: Object,
    products: Object,

})
</script>

<template>
    <Head title="Welcome" />

    <Nav :canLogin="canLogin" :canRegister="canRegister"/>
    <div class="pt-12">
        <Headline first-headline="Purchased eBooks" second-headline="All your eBooks at one place."></Headline>

    </div>

    <Library :products="products" />
    <Footer class="py-[3.5rem] md:py-[7rem]"/>


</template>
