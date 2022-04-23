

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import CustomLink from "@/Partials/CustomLink";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    products: Object,
})
</script>


<template>
    <Nav :canLogin="canLogin" :canRegister="canRegister"  />

    <Hero class="py-[2.5rem] md:py-[6rem]" />



    <FeaturedProducts class="py-[3.5rem] md:py-[7rem] bg-white" :products="products" />
    <Banner class="py-[3.5rem] md:py-[7rem]" />
    <Steps class="py-[3.5rem] md:py-[7rem] bg-white"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>

</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Nav from "@/Components/Structure/Nav";
import Hero from "@/Components/Index/Hero";
import Banner from "@/Components/Index/Banner";
import FeaturedProducts from "@/Components/Products/Featured";
import Steps from "@/Components/Index/Steps";
import Footer from "@/Components/Structure/Footer";


export default {

    components: {
        Nav,
        Footer,
        Banner,
        Hero,
        Steps,
        Head,
        FeaturedProducts
    },
}
</script>

