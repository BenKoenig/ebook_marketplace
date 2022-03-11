<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    product: Object,
})
</script>


<template>
    <h2>Product name</h2>
    <p>{{ product.name }}</p>
</template>