<template>
    <Focused>
        <Head title="eReader" />
        <div class="">
            <div id="epub-render" ></div>

            <div class="flex gap-x-2 justify-center fixed w-full bottom-0 py-2 items-center">
                <Link href="/" class=" ">
                    <i class="fa-solid fa-house"></i> Home
                </Link>
                <Button :type="button" @click="previousPage()">Previus Page</Button>
                <Button :type="button" @click="nextPage()">Next Page</Button>
                <p>{{ product.id }}</p>

            </div>
        </div>
    </Focused>
</template>

<script>
import ePub from "epubjs";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Focused from "@/Layouts/Focused";
import Button from "@/Shared/Button";
import axios from "axios";
const URL_EPUB = "http://lv.test/";

export default {
    props: ['product'],
    components: {
        Head,
        Link,
        Focused,
        Button
    },

    data() {
        return {
            /* epub: `http://lv.test/df/${this.product.id}`, */
            epub: `http://lv.test/df/${this.product.id}`,
            newEpub: [],
            show: false,
            book: {},
            rendition: {},
            chapter: "",
            coverUrl: "",
        };
    },

    beforeMount() {
        axios({
            url: 'http://lv.test/serve/104',
            method: 'GET',
            responseType: 'blob',
        }).then((response) => {
            const fileURL = window.URL.createObjectURL(new Blob([response.data]));
            this.epub = fileURL;
        });
    },
    
    mounted() {
        

        this.loadEpub();

        console.log(this.epub)
    },

    methods: {
        getCover() {
            return this.book.coverUrl()
        },

        loadEpub(e) {
            this.book = ePub(e ? e.target.result : this.epub);
            this.book.loaded.navigation.then(({ toc }) => {
                this.toc = toc;
            });
            this.book.ready.then(() => {
                this.show = true;
            });
            this.rendition = this.book.renderTo("epub-render", {
                height: '80vh',
                width: "100%",
            });
            this.rendition.display();
            document.getElementById("add");
        },
        uploadFile() {
            this.show = false;
            var reader = new FileReader();
            reader.readAsArrayBuffer(this.newEpub);
            reader.onload = this.loadEpub;
        },
        nextPage() {
            this.rendition.next();
        },
        previousPage() {
            this.rendition.prev();
        },
        touchMoveToPage({ ...info }) {
            if (info.direction === "left") {
                this.nextPage();
            } else {
                this.previousPage();
            }
        },
        goToExcerpt() {
            if (this.chapter.toLowerCase().indexOf("xhtml") > 0) {
                this.rendition.display(this.chapter);
            } else {
                this.rendition.display("epubcfi(" + this.chapter + ")");
                this.rendition.annotations.highlight("epubcfi(" + this.chapter + ")");
            }
        },
    },
};
</script>