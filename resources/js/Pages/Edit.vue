<script setup>
import ValidationErrors from '@/Shared/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import Label from "@/Shared/Label";
import Input from "@/Shared/Input";
import Button from "@/Shared/Button";
import Headline from "@/Shared/Headline";
import Editor from '@tinymce/tinymce-vue'


const props = defineProps({
    status: String,
    errors: Object,
    product: Object,
});
const form = useForm({
    id: props.product.id,
    snippet: props.product.snippet,
    price: props.product.price,
    description: props.product.description,
    short_description: props.product.short_description
});
const submit = () => {
    form.put('/products/' + props.product.id);
};
</script>

<template>
    <Guest>
        <Head title="Edit your Ebook" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex flex-col gap-y-3">

            <!-- Start of headline -->
            <div class="bg-pattern bg-fixed bg-cover component--padding">
                <Headline
                    title="Educate other developers"
                    h1="Update your Ebook."
                    description="Enter everything there is to know about your ebook!"
                />
            </div>
            <!-- End of headline -->

            <!-- Start of Form -->
            <div class="component--padding ">

                <!-- Validation errors -->
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit" class="max-w-3xl">

                    <h3 class="text-sm text-gray-600">Title (can't be changed)</h3>
                    <h2 class="text-2xl text-bold mb-4">{{product.name}}</h2>


                    <div class="mb-4">
                        <Label for="short_description" value="Short description" />
                        <Input id="short_description" type="text" class="mt-1 block w-full" v-model="form.short_description" required  />
                    </div>

                    <div class="mb-4">
                        <Label  value="Product Description" />

                        <editor
                            content_style="div { margin: 10px; border: 5px solid red; padding: 3px; }"
                            class="opacity-0"
                            v-model="form.description"
                            apiKey="1b47gx6ut5u6v0f3x3bppqtt1zv2omav3ub0kss3mb0s3iqo"
                            :init="{
                            height: 500,
                            menubar: true,
                             plugins: [
                               'advlist autolink lists link image charmap print preview anchor',
                               'searchreplace visualblocks code fullscreen',
                               'insertdatetime media table paste code help wordcount'
                             ],
                             toolbar:
                               'undo redo | formatselect | bold italic backcolor | \
                               alignleft aligncenter alignright alignjustify | \
                               bullist numlist outdent indent code image link | removeformat | help'
                             }"
                        />
                    </div>

                    <div class="mb-4">
                        <Label for="snippet" value="Book Snippet" />

                        <!-- start of snippet input -->
                        <Input id="snippet" 
                        type="text" 
                        class="mt-1 block w-full" 
                        v-model="form.snippet" 
                        required  
                        autocomplete="snippet" 
                        />
                        <!-- end of snippet input -->
                    </div>

                    <!-- price input/label -->
                    <div class="mb-4">
                        <Label for="price" value="Price" />
                        <div class="relative w-36">
                            <div class="absolute w-10 h-full bg-gray-700 text-white right-0 top-0 rounded-lg flex justify-center items-center text-bold text-xl">
                                <p>$</p>
                            </div>

                            <Input id="price" type="text" class="mt-1 block w-full" v-model="form.price" required  />

                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Button  :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="bg-yellow-200 hover:bg-yellow-100">
                            Submit changes
                        </Button>
                    </div>

                </form>
            </div>
            <!-- End of form -->

        </div>
    </Guest>
</template>
