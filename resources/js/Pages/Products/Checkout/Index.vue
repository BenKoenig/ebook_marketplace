<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    product: Object,
})

</script>

<template>

    <Head title="Checkout" />

    <NavigationComponent :canLogin="canLogin" :canRegister="canRegister"/>
    <Checkout :product="product" />
    <FooterComponent class="py-[3.5rem] md:py-[7rem]"></FooterComponent>


</template>


<script >

import FooterComponent from "@/Components/Structure/FooterComponent";
import Headline from "@/Partials/Headline";
import Checkout from "@/Components/Checkout/Index";
import NavigationComponent from "@/Components/Structure/NavigationComponent";
export default {
    components: {NavigationComponent, Headline, FooterComponent}
}

</script>
