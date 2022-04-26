<template>
    <Guest>
        <ShowProductComponent :product="product" />
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import ShowProductComponent from "@/Components/ShowProductComponent";

const props = defineProps({
    product: Object,
});

</script>
