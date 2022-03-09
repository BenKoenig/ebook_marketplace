<!--
<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Hero from "@/Layouts/Hero";
import Nav from "@/Layouts/Nav";
import Steps from "@/Layouts/Steps";
import FeaturedProducts from "@/Layouts/FeaturedProducts";
import Banner from "@/Layouts/Banner";
import Footer from "@/Layouts/Footer";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    props: ['foo'],

    products: Object,
</script>
})



<template>
    <Head title="Welcome" />

    <Nav />
    <Hero class="py-[3.5rem] md:py-[7rem]" />
    <FeaturedProducts class="py-[3.5rem] md:py-[7rem]" />
    <Banner class="py-[3.5rem] md:py-[7rem]" />
    <Steps class="py-[3.5rem] md:py-[7rem]"/>
    <Footer />


</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import Nav from "@/Layouts/Nav";
import Hero from "@/Layouts/Hero";
import FeaturedProducts from "@/Layouts/FeaturedProducts";
import Steps from "@/Layouts/Steps";
import Footer from "@/Layouts/Footer";

export default {
    components: {
        Head,
        Nav,
        Hero,
        FeaturedProducts,
        Steps,
        Footer
    },
    props: {
        products: Object,
    },
}
</script>


-->


<template>
    <Head title="Welcome" />

    <Nav />
    <Hero class="py-[3.5rem] md:py-[7rem]" />
    <FeaturedProducts class="py-[3.5rem] md:py-[7rem]" :products="products" />
    <Banner class="py-[3.5rem] md:py-[7rem]" />
    <Steps class="py-[3.5rem] md:py-[7rem]"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>



</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Nav from "@/Layouts/Nav";
import Hero from "@/Layouts/Hero";
import Banner from "@/Layouts/Banner";
import FeaturedProducts from "@/Layouts/FeaturedProducts";
import Steps from "@/Layouts/Steps";
import Footer from "@/Layouts/Footer";


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

    props: {
        products: Object,
    },
}
</script>

