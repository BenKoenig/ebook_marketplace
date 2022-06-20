<template>
    <Guest>
        <ApprovalComponent :products="unapprovedProducts" />
    </Guest>
</template>

<script setup>
import Guest from "@/Layouts/Guest";
import ApprovalComponent from "@/Components/Admin/ApprovalComponent";

const props = defineProps({
    unapprovedProducts: Object,
});
</script>
