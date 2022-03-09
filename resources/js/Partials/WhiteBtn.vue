<template>
    <a href="#" class="bg-white border-2 border-black text-lg flex w-full max-w-[13rem]  h-10 justify-center items-center ">{{ msg }}</a>
</template>


<script>
export default {
    name: 'WhiteBtn',
    props: {
        msg: String,
    }
}
</script>
