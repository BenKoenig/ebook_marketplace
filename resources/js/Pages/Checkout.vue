<template>
    <Guest>
        <CheckoutComponent :product="product" />
    </Guest>
</template>

<script setup>
import Guest from "@/Layouts/Guest";
import CheckoutComponent from "@/Components/CheckoutComponent";

const props = defineProps({
    product: Object,
});
</script>
