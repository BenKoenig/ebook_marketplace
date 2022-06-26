<template>
    <Guest>
        <Head title="Checkout" />

        <CheckoutComponent :product="product" />
    </Guest>
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import CheckoutComponent from "@/Components/CheckoutComponent";

const props = defineProps({
    product: Object,
});
</script>
