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
    <div class="flex justify-center pt-10">
        <Headline first-headline="Library" second-headline="Purchased eBooks"></Headline>

    </div>

    <Library  :products="products" />
    <Footer class="py-[3.5rem] md:py-[7rem]"/>


</template>
