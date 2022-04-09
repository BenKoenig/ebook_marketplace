<script setup>
import {Link} from '@inertiajs/inertia-vue3';
</script>

<template>
    <Link :href="route('dashboard')" id="link" type="button" :style="cssVars" class="transition-colors h-10 items-center flex rounded-lg font-medium text-lg w-fit focus:outline-none border-[1px] border-black focus:ring-4 focus:black text-sm px-5 ">{{ msg }}</Link>
</template>

<!--route('dashboard')-->
<script>

export default {

    name: "CustomLink",

    props: {
        init_backgroundColor: {
            required: false,
            type: String,
            default: '#ff0000'
        },
        init_textColor: {
            required: false,
            type: String,
            default: '#000000'
        },
        init_hoverColor: {
            required: false,
            type: String,
            default: '#000000'
        },
        msg: String,
        routeme: String,
    },
    data() {
        return {
            backgroundColor: this.init_backgroundColor,
            textColor: this.init_textColor,
            hoverColor: this.init_hoverColor,
        }
    },
    computed: {
        cssVars () {
            return{
                /* variables you want to pass to css */
                '--backgroundColor': this.backgroundColor,
                '--textColor': this.textColor,
                '--hoverColor': this.hoverColor,
            }
        }
    }
}
</script>

<style lang="scss" scoped>
#link{
    background-color: var(--backgroundColor);
    color: var(--textColor);
}
#link:hover {
    background-color: var(--hoverColor);
}
</style>
