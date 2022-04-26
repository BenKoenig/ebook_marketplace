<template>
    <Guest>
        <div class="flex flex-col gap-y-3">
            <FeaturedProductsComponent :products="featuredProducts"></FeaturedProductsComponent>
            <RandomProductComponent :product="randomProduct"></RandomProductComponent>
        </div>
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import FeaturedProductsComponent from "@/Components/FeaturedProductsComponent";
import RandomProductComponent from "@/Components/RandomProductComponent";

const props = defineProps({
    featuredProducts: Object,
    randomProduct: Object,
});

</script>
