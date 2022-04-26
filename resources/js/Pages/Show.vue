<template>
    <Guest>
        <ShowProductComponent :product="product" :reviews="reviews" />
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import ShowProductComponent from "@/Components/ShowProductComponent";

const props = defineProps({
    product: Object,
    reviews: Object,
});

</script>
