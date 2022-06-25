<script setup>
import Guest from "@/Layouts/Guest";
import Button from "@/Shared/Button";
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    status: String,
    errors: Object
});

const deleteProfile = () => {
    useForm({}).post('/delete-profile');
};
</script>


<template>
    <Guest>
       <form @submit.prevent="deleteProfile" class="max-w-3xl" novalidate>
            <Button :type="submit" class="bg-red-400 hover:bg-red-300">
                Delete Profile
            </Button>
        </form>
    </Guest>
</template>

