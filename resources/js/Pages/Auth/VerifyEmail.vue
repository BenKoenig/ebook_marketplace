<script setup>
import ValidationErrors from '@/Shared/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import Button from "@/Shared/Button";
import Headline from "@/Shared/Headline";

const props = defineProps({
    status: String,
});
const form = useForm();
const submit = () => {
    form.post(route('verification.send'));
};
const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <Guest>
        <Head title="Verify Email" />


        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex flex-col gap-y-3">

            <!-- Start of headline -->
            <div class="bg-beige-400 component--padding rounded-2xl">
                <Headline
                    title="Almost complete!"
                    h1="Verify your email address"
                    description="All you need to to is verify your email adress"
                />
            </div>
            <!-- End of headline -->

            <!-- Start of Form -->
            <div class="bg-beige-400 component--padding rounded-2xl">

                <!-- Validation errors -->
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit" class="max-w-lg mx-auto">

                    <div class="mt-4 flex items-center justify-between">
                        <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Resend Verification Email
                        </Button>

                        <Link :href="route('logout')" method="post" as="button" class="underline text-sm text-gray-600 hover:text-gray-900">Log Out</Link>
                    </div>

                </form>
            </div>
            <!-- End of form -->

        </div>


    </Guest>
</template>
