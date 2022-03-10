<template>
    <form @submit.prevent="submit">
        <div>
            <label for="name">Name:</label>
            <input id="name" v-model="form.name" class="border-2 border-black" />
        </div>

        <div>
            <label for="description">Description:</label>
            <input id="description" v-model="form.description" class="border-2 border-black" />
        </div>

        <div>
            <label for="snippet">Snippet:</label>
            <input id="snippet" v-model="form.snippet" class="border-2 border-black" />
        </div>


        <button type="submit">Submit</button>

    </form>
</template>

<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

    let form = reactive({
        name: '',
        description: '',
        snippet: '',

    });

    let submit = () => {
        Inertia.post('/products', form);
    }

</script>
