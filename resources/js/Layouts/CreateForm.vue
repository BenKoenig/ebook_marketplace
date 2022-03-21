<template>
  <form @submit.prevent="submit">
    <label for="name">Name:</label>
    <input id="name" v-model="form.name" />
    <label for="description">Description:</label>
    <input id="description" v-model="form.description" />
    <label for="snippet">Snippet:</label>
    <input id="snippet" v-model="form.snippet" />

      <label for="price">Price:</label>
      <input id="price" type="number" v-model="form.price" />


      <!-- Cover-->
      <div>
          <label for="cover">Cover Upload</label>
          <input type="file" id="cover" @input="form.cover = $event.target.files[0]" />
          <progress v-if="form.progress" :value="form.progress.percentage" max="100">
              {{ form.progress.percentage }}%
          </progress>
      </div>

      <!-- ePub -->
      <div>
          <label for="epub">ePub Upload</label>
          <input type="file" id="epub" @input="form.epub = $event.target.files[0]" />
          <progress v-if="form.progress" :value="form.progress.percentage" max="100">
              {{ form.progress.percentage }}%
          </progress>
      </div>


    <button type="submit">Submit</button>
  </form>
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

export default {
  setup () {
    const form = reactive({
      name: null,
      description: null,
      snippet: null,
        cover: null,
        epub: null
    })

    function submit() {
        Inertia.post('/products', form, {
            forceFormData: true,
        })
    }

    return { form, submit }
  },
}
</script>


























































<!--<template>
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

</script>-->
