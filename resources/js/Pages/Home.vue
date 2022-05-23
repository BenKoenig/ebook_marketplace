<template>
    <Guest :canLogin="canLogin" :canRegister="canRegister">
        <Head title="Home" />



        <div class="flex flex-col gap-y-3">

            <ProductListComponent
                :products="featuredProducts"
                title="See the light"
                h2="Featured Ebooks"
                description="Lorem ipsum dolor sit amet, consectetuer magnis dis penatibus et magnis dis sociis"
            />
            <RandomProductComponent :product="randomProduct"></RandomProductComponent>

            <ProductListComponent
                :products="latestProducts"
                title="What's new?"
                h2="Recently added Ebooks"
                description="Lorem ipsum dolor sit amet, consectetuer magnis dis penatibus et magnis dis sociis"
            />

            <GuidelinesCard />
        </div>
    </Guest>
</template>

<script setup>
import Guest from "@/Layouts/Guest";
import RandomProductComponent from "@/Components/RandomProductComponent";
import ProductListComponent from "@/Components/ProductListComponent";
import GuidelinesCard from "@/Shared/GuidelinesCard";

const props = defineProps({
    featuredProducts: Object,
    latestProducts: Object,
    randomProduct: Object,
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

