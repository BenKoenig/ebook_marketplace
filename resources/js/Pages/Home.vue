<template>
    <Guest :canLogin="canLogin" :canRegister="canRegister">
        <Head title="Home" />

        <div class="flex flex-col gap-y-3">

            <HeroComponent />

            <!-- Headline and featured products -->
            <ProductListComponent
                :products="featuredProducts"
                title="See the light"
                h2="Featured Ebooks"
                description="Explore our recommended eBooks"
            />

            <!-- Headline and featured products -->
            <ProductListComponent
                :products="topRankedProducts"
                title="Lots of people are interested!"
                h2="Most purchased Ebooks"
                description="Explore our recommended eBooks"
            />

            <RandomProductComponent :product="randomProduct"></RandomProductComponent>

            <!-- Headline and recent products  -->
            <ProductListComponent
                :products="latestProducts"
                title="What's new?"
                h2="Recently added Ebooks"
                description="All of our recently added and approved eBooks"
            />
            
            <GuidelinesCard />
        </div>
    </Guest>
</template>

<script setup>
import Guest from "@/Layouts/Guest";
import { Head } from '@inertiajs/inertia-vue3';
import RandomProductComponent from "@/Components/RandomProductComponent";
import ProductListComponent from "@/Components/ProductListComponent";
import GuidelinesCard from "@/Shared/GuidelinesCard";
import HeroComponent from "@/Components/HeroComponent";

const props = defineProps({
    featuredProducts: Object,
    latestProducts: Object,
    topRankedProducts: Object,
    randomProduct: Object,
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

