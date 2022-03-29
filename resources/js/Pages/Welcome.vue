

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
    <div class="gradient-bg">
        <Nav :canLogin="canLogin" :canRegister="canRegister"  />
        <Hero class="py-[2.5rem] md:py-[6rem]" />
    </div>



    <FeaturedProducts class="py-[3.5rem] md:py-[7rem] bg-white" :products="products" />
    <Banner class="py-[3.5rem] md:py-[7rem]" />
    <Steps class="py-[3.5rem] md:py-[7rem] bg-white"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>

</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Nav from "@/Components/Structure/NavigationComponent";
import Hero from "@/Components/Index/HeroComponent";
import Banner from "@/Components/Index/BannerComponent";
import FeaturedProducts from "@/Components/Products/FeaturedComponent";
import Steps from "@/Components/Index/StepsComponent";
import Footer from "@/Components/Structure/FooterComponent";


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

