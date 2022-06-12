<script setup>
import ValidationErrors from '@/Shared/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import Label from "@/Shared/Label";
import Input from "@/Shared/Input";
import Checkbox from "@/Shared/Checkbox";
import Button from "@/Shared/Button";
import Headline from "@/Shared/Headline";
defineProps({
    canResetPassword: Boolean,
    status: String,
});
const form = useForm({
    email: '',
    password: '',
    remember: false
});
const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Guest>
        <Head title="Log in" />


        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex flex-col gap-y-3">

            <!-- Start of headline -->
            <div class="bg-pattern bg-cover bg-fixed component--padding">
                <Headline
                    title="Lorem ipsum dolar"
                    h1="Welcome back to readme"
                    description="Lorem ipsum dolar set et it so"
                />
            </div>
            <!-- End of headline -->

            <!-- Start of Form -->
            <div class="component--padding">

                <!-- Validation errors -->
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit" class="max-w-lg ">

                    <!-- email field -->
                    <div>
                        <Label for="email" value="Email" />
                        <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
                    </div>

                    <!-- password field -->
                    <div class="mt-4">
                        <Label for="password" value="Password" />
                        <Input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                    </div>

                    <!-- remember me checkbox -->
                    <div class="block mt-4">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <!-- start of wrapper -->
                    <div class="flex items-center justify-end mt-4">

                        <!-- forgot password link -->
                        <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                            Forgot your password?
                        </Link>'

                        <!-- Form submit button -->
                        <Button class="ml-4 bg-yellow-200" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Log in
                        </Button>
                    </div>
                    <!-- end of wrapper -->

                </form>
            </div>
            <!-- End of form -->

        </div>


    </Guest>
</template>
