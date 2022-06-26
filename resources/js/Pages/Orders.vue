<template>
    <Guest>
        <Head title="Orders" />
        <ApprovalComponent :products="unapprovedProducts" />
    </Guest>
</template>

<script setup>
import Guest from "@/Layouts/Guest";
import ApprovalComponent from "@/Components/Admin/ApprovalComponent";
import { Head } from '@inertiajs/inertia-vue3'

const props = defineProps({
    unapprovedProducts: Object,
});
</script>
