<script setup>
import ValidationErrors from '@/Shared/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import Label from "@/Shared/Label";
import Input from "@/Shared/Input";
import Button from "@/Shared/Button";
import Headline from "@/Shared/Headline";

const props = defineProps({
    email: String,
    token: String,
});
const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});
const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Guest>
        <Head title="Password Reset" />


        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex flex-col gap-y-3">

            <!-- Start of headline -->
            <div class="bg-beige-400 component--padding rounded-2xl">
                <Headline
                    title=""
                    h1="Reset your password"
                    description="Enter in your email and your new password"
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

                    <div class="mt-4">
                        <Label for="password" value="Password" />
                        <Input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <Label for="password_confirmation" value="Confirm Password" />
                        <Input id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Reset Password
                        </Button>
                    </div>

                </form>
            </div>
            <!-- End of form -->

        </div>


    </Guest>
</template>
