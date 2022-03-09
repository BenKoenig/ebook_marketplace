<template>
        <Head title="Welcome" />
        <h1>Welcome</h1>
        <div v-for="product in products" :key="product.id">
            <p>Product: {{ product.name }}</p>
        </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
    },
    props: {
        products: Object,
    },
}
</script>
