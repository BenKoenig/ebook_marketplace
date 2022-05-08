<template>
    <Guest>
        <ShowProductComponent :product="product" :reviews="reviews" :usereHasPurchased="userHasPurchased" :userHasReviewed="userHasReviewed" :errors="errors" />
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import ShowProductComponent from "@/Components/ShowProductComponent";

const props = defineProps({
    product: Object,
    reviews: Object,
    userHasPurchased: Object,
    userHasReviewed: Array,
    errors: Object,
});

</script>
