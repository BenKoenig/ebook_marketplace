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
    name: props.product.name,
    snippet: props.product.snippet,
    sale_price: props.product.sale_price,
    description: props.product.description
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

        <div class="flex flex-col gap-y-3 mt-3">

            <!-- Start of headline -->
            <div class="bg-pattern bg-cover component--padding rounded-2xl">
                <Headline
                    title="Educate other developers"
                    h1="Sell your Ebook."
                    description="Enter everything there is to know about your ebook!"
                />
            </div>
            <!-- End of headline -->

            <!-- Start of Form -->
            <div class="bg-beige-400 component--padding rounded-2xl">

                <!-- Validation errors -->
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit" class="max-w-3xl mx-auto">

                    <div class="mb-4">
                        <Label for="name" value="Book Title" />
                        <Input id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" :value="product.name" />
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
                        required autofocus 
                        autocomplete="snippet" 
                        :value="product.snippet"/>
                        <!-- end of snippet input -->
                    </div>


                    <div class="flex gap-x-2">
                        <!-- price input/label -->
                        <div class="mb-4">


                            <p class="text-sm text-bold mb-2">Original Price: ${{product.price}}</p>

                            <Label for="sale_price" value="Sale Price" />

                            <div class="relative w-36">
                                <div class="absolute w-10 h-full bg-gray-700 text-white 
                                right-0 top-0 rounded-lg flex justify-center items-center text-bold text-xl">
                                    <p>$</p>
                                </div>

                                <Input 
                                id="sale_price" 
                                type="text" 
                                class="mt-1 block w-full" 
                                v-model="form.sale_price" required autofocus 
                                autocomplete="price" 
                                :value="product.sale_price" />
                            </div>
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
