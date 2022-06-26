<template>
    <Guest>
        <Head title="Order History" />

        <OrderHistoryComponent :orders="orders" />
    </Guest>
</template>

<script setup>
import Guest from "@/Layouts/Guest";
import OrderHistoryComponent from "@/Components/OrderHistoryComponent";
import { Head } from '@inertiajs/inertia-vue3'


const props = defineProps({
    orders: Object,
});
</script>
