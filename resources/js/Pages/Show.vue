<template>
    <Guest>
        <ShowProductComponent :product="product" :reviews="reviews" :userHasPurchased="userHasPurchased" :userHasReviewed="userHasReviewed" :errors="errors" />
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import ShowProductComponent from "@/Components/ShowProductComponent";

const props = defineProps({
    product: Object,
    reviews: Object,
    userHasPurchased: Boolean,
    userHasReviewed: Boolean,
    errors: Object,
});

</script>
