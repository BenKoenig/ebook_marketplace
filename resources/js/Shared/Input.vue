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
    @apply border-slate-500;
    @apply focus:border-indigo-300;
    @apply focus:ring;
    @apply focus:ring-indigo-200;
    @apply focus:ring-opacity-50;
    @apply rounded-lg;
    @apply shadow-sm;
}
</style>
