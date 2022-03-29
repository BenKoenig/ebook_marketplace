<template>
    <div class="relative">
        <div class="max-w-3xl mx-auto gap-x-16 items-center relative text-center px-2 xl:px-0">
            <div class="flex flex-col gap-y-5 pb-10 lg:pb-0 ">
                <h1 class="leading-tight text-4xl md:text-6xl md:leading-[4rem] font-bold ">Join the eBook Marketplace for Developers</h1>
                <p class="mb-3">
                    Lorem ipsum dolor sit amet, consectetuer magnis dis penatibus et magnis dis sociis natoque adipiscing elit. Aenean bus et magnis discommodo sociis natoque atibus et magnis dis natoque. sociis natoque bus et magnis dis penatibus et magnis.
                </p>
                <div class="mx-auto">
                    <CustomLink msg="Get started" init_background-color="#FDB383" init_text-color="#000" init_hoverColor="#FFC7A2" />
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import CustomLink from "@/Partials/CustomLink";
import NavigationComponent from "@/Components/Structure/NavigationComponent";
export default {
    components: {NavigationComponent, CustomLink}
}
</script>
