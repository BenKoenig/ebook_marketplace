<template>
    <Guest>
        <Head title="Profile" />

        <!-- start of library -->
        <div class="mx-auto component--padding">

        </div>
        <!-- end of library -->

    </Guest>
</template>


<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Guest from "@/Layouts/Guest";

const props = defineProps({
    user: Object,
});

</script>
