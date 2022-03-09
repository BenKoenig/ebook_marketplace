<template>
    <a href="#" class="bg-[#FFEF80] border-2 border-black  text-lg flex w-full max-w-[14rem]  h-10 justify-center items-center  "> {{ msg }} </a>
</template>


<script>
export default {
    name: 'YellowBtn',
    props: {
        msg: String,
    }
}
</script>
