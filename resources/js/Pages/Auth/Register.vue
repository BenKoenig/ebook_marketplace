<script setup>
import ValidationErrors from '@/Shared/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import Label from "@/Shared/Label";
import Input from "@/Shared/Input";
import Button from "@/Shared/Button";
import Headline from "@/Shared/Headline";
defineProps({
    canResetPassword: Boolean,
    status: String,
});
const form = useForm({
    firstname: '',
    lastname: '',
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});
const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Guest>
        <Head title="Register" />


        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex flex-col gap-y-3">

            <!-- Start of headline -->
            <div class="bg-pattern bg-cover bg-fixed component--padding">
                <Headline
                    title="Happy to have you on board!"
                    h1="Welcome to readme"
                    description="Enter in your personal information."
                />
            </div>
            <!-- End of headline -->

            <!-- Start of Form -->
            <div class="component--padding">

                <!-- Validation errors -->
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit" class="max-w-lg">

                    <div class="mb-4">
                        <Label for="firstname" value="First Name" />
                        <Input id="firstname" type="text" class="mt-1 block w-full" v-model="form.firstname" required autocomplete="firstname" />
                    </div>

                    <div class="mb-4">
                        <Label for="lastname" value="Last Name" />
                        <Input id="lastname" type="text" class="mt-1 block w-full" v-model="form.lastname" required autocomplete="lastname" />
                    </div>

                    <div class="mb-4">
                        <Label for="username" value="Username" />
                        <Input id="username" type="text" class="mt-1 block w-full" v-model="form.username" required autocomplete="username" />
                    </div>

                    <div class="mb-4">
                        <Label for="email" value="Email" />
                        <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="username" />
                    </div>

                    <div class="mb-4">
                        <Label for="password" value="Password" />
                        <Input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                    </div>

                    <div class="mb-4">
                        <Label for="password_confirmation" value="Confirm Password" />
                        <Input id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                    </div>



                    <!-- start of wrapper -->
                    <div class="flex items-center justify-end mt-4">
                        <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                            Already registered?
                        </Link>

                        <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Register
                        </Button>
                    </div>
                    <!-- end of wrapper -->

                </form>
            </div>
            <!-- End of form -->

        </div>


    </Guest>
</template>
