

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    products: Object,
})
</script>


<template>

    <Nav :canLogin="canLogin" :canRegister="canRegister"/>


    <Hero class="py-[3.5rem] md:py-[8rem]" />

    <FeaturedProducts class="py-[3.5rem] md:py-[7rem] bg-white" :products="products" />
    <Banner class="py-[3.5rem] md:py-[7rem]" />
    <Steps class="py-[3.5rem] md:py-[7rem] bg-white"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>

</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Nav from "@/Components/NavigationComponent";
import Hero from "@/Components/HeroComponent";
import Banner from "@/Components/BannerComponent";
import FeaturedProducts from "@/Components/Products/FeaturedComponent";
import Steps from "@/Components/StepsComponent";
import Footer from "@/Components/FooterComponent";


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

