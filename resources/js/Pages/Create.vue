<script setup>
import ValidationErrors from '@/Shared/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import Label from "@/Shared/Label";
import Input from "@/Shared/Input";
import Button from "@/Shared/Button";
import Headline from "@/Shared/Headline";
import Editor from '@tinymce/tinymce-vue'


defineProps({
    status: String,
    errors: Object
});
const form = useForm({
    name: '',
    snippet: '',
    cover: '',
    price: '',
    epub: '',
    description: ''
});
const submit = () => {
    form.post('/products');
};
</script>

<template>
    <Guest>
        <Head title="Sell your Ebook" />

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
                        <Input id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
                    </div>

                    <!-- start of rich text editor -->
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
                    <!-- end of rich text editor -->

                    <!-- book snippet input/label -->
                    <div class="mb-4">
                        <Label for="snippet" value="Book Snippet" />
                        <Input id="snippet" type="text" class="mt-1 block w-full" v-model="form.snippet" required autofocus autocomplete="snippet" />
                    </div>

                    <!-- price input/label -->
                    <div class="mb-4">
                        <Label for="price" value="Price" />
                        <div class="relative w-36">
                            <div class="absolute w-10 h-full bg-gray-700 text-white right-0 top-0 rounded-lg flex justify-center items-center text-bold text-xl">
                                <p>$</p>
                            </div>

                            <Input id="price" type="text" class="mt-1 block w-full" v-model="form.price" required autofocus autocomplete="price" />
                        </div>
                    </div>

                    <!-- book cover / epub file upload -->
                    <div class="md:grid grid-cols-2 gap-x-3">
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="cover">Upload Book Cover</label>
                            <input class="rounded-lg block w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="cover_help" id="cover" @input="form.cover = $event.target.files[0]" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="cover_help">The book cover will be seen in the product list</div>
                            <p v-if="errors.cover" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.cover }}</p>

                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="epub">Upload EPUB file</label>
                            <input class="rounded-lg block w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="epub_help"  id="epub" @input="form.epub = $event.target.files[0]" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="epub_help">An EPUB file (short for electronic publication) is in the Open eBook file format. You can download EPUB files and read them on your smartphone, tablet, e-reader, or computer. This freely available eBook standard supports more hardware eBook readers than any other file format. </div>
                            <p v-if="errors.epub" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.epub }}</p>
                        </div>
                    </div>

                    <!-- submit btn -->
                    <div class="flex items-center justify-end mt-4">
                        <Button  :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="bg-yellow-200 hover:bg-yellow-100">
                            Submit
                        </Button>
                    </div>

                </form>
            </div>
            <!-- End of form -->

        </div>


    </Guest>
</template>
