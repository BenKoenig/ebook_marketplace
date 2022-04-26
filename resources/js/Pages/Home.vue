<template>
    <Guest>
        <FeaturedProductsComponent :products="featuredProducts"></FeaturedProductsComponent>
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import FeaturedProductsComponent from "@/Components/FeaturedProductsComponent";

const props = defineProps({
    featuredProducts: Object,
});

</script>
