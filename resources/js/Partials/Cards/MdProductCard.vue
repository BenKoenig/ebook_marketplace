<template>





    <div class="flex items-end   w-scale grow border-2 border-black">
        <img src="{{ coverUrl }}" alt="img">
        <div>
            <h3 class="text-xl font-semibold py-3 px-1 leading-[1.3rem]">{{ title.length > 50 ?title.slice(0, 50) + '..' : title }}</h3>
            <div class="bg-beige-5 py-5 px-1">
                <p class="text-gray-400">Author</p>
                <p class="text-lg mb-2 leading-[1.3rem] ">{{authorName}}</p>
                <YellowBtn msg="Read about it" />

            </div>
        </div>
    </div>
</template>


<script>
import YellowBtn from "../YellowBtn";
export default {
    name: 'MdProductCard',
    components: {YellowBtn},
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
