<script setup>
import ValidationErrors from '@/Shared/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import Label from "@/Shared/Label";
import Input from "@/Shared/Input";
import Button from "@/Shared/Button";
import Headline from "@/Shared/Headline";

defineProps({
    status: String,
});
const form = useForm({
    email: '',
});
const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Guest>
        <Head title="Forgot Password" />


        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex flex-col gap-y-3">

            <!-- Start of headline -->
            <div class="bg-beige-400 component--padding rounded-2xl">
                <Headline
                    title="Reset your password"
                    h1="Forgot your password? No problem."
                    description="Enter your email address and we will send you a link to reset your password."
                />
            </div>
            <!-- End of headline -->

            <!-- Start of Form -->
            <div class="bg-beige-400 component--padding rounded-2xl">

                <!-- Validation errors -->
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit" class="max-w-lg mx-auto">

                    <div>
                        <Label for="email" value="Email" />
                        <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Button  :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Email Password Reset Link
                        </Button>
                    </div>

                </form>
            </div>
            <!-- End of form -->

        </div>


    </Guest>
</template>
