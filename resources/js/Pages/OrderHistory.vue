<template>
    <Guest>
        <OrderHistoryComponent :orders="orders" />
    </Guest>
</template>

<script setup>
import Guest from "@/Layouts/Guest";
import OrderHistoryComponent from "@/Components/OrderHistoryComponent";

const props = defineProps({
    orders: Object,
});
</script>
