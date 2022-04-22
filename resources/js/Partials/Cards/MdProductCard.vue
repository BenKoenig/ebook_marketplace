<template>





    <div class="grid grid-cols-12 items-end   w-scale grow border-[1px] border-black rounded-lg">

        <img :src="coverUrl" alt="img" class="  col-span-5">

        <div class="col-span-7">
            <h3 class="text-xl font-semibold py-3 px-1 leading-[1.3rem]">{{ title.length > 50 ?title.slice(0, 50) + '..' : title }}</h3>
            <div class="bg-beige-5 py-5 px-1 rounded-br-lg">
                <p class="text-gray-400">Author</p>
                <p class="text-lg mb-2 leading-[1.3rem] ">@{{authorName}}</p>
                <CustomLink msg="Read about it" init_background-color="#FDB383" init_text-color="#000" init_hoverColor="#FFC7A2" />
            </div>
        </div>
    </div>
</template>


<script>
import YellowBtn from "../YellowBtn";
import CustomLink from "@/Partials/CustomLink";
export default {
    name: 'MdProductCard',
    components: {CustomLink, YellowBtn},
    props: {
        title: String,
        authorName: String,
        coverUrl: String
    },
    filters: {
        truncate: function (text, length, suffix) {
            if (text.length > length) {
                return text.substring(0, length) + suffix;
            } else {
                return text;
            }
        },
    }
}
</script>
