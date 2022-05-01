<template>
    <Guest>

        <ProductListComponent
            :products="products"
            title="See the light"
            h2="Featured Ebooks"
            description="Lorem ipsum dolor sit amet, consectetuer magnis dis penatibus et magnis dis sociis"
        />
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import ProductListComponent from "@/Components/ProductListComponent";

const props = defineProps({
    user: Object,
    products: Object,
});

</script>
