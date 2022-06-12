<script setup>
import { onMounted, ref } from 'vue';
defineProps(['modelValue']);
defineEmits(['update:modelValue']);
const input = ref(null);
onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});
</script>

<template>
    <input class="input" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
</template>

<style scoped>
.input {
    @apply border-gray-300;
    @apply focus:border-indigo-300;
    @apply focus:ring;
    @apply rounded-lg;
    @apply focus:ring-indigo-200;
    @apply focus:ring-opacity-50;
    @apply shadow-sm;
}
</style>
