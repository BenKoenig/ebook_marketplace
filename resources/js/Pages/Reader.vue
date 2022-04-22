

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
    canRegister: Boolean,
    product: Object,
});
</script>


<template>
<!--  <Nav :canLogin="canLogin" :canRegister="canRegister" />-->
    <div class="relative w-full">
        <div id="epub-render" class=""></div>

        <div class="flex gap-x-2 justifx-center">
            <button class="w-14" type="button" @click="previousPage()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20A10 10 0 1 0 0 10a10 10 0 0 0 10 10zM8.711 4.3l5.7 5.766L8.7 15.711l-1.4-1.422 4.289-4.242-4.3-4.347z"></path></svg></button>

            <button class="w-14" type="button" @click="nextPage()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20A10 10 0 1 0 0 10a10 10 0 0 0 10 10zM8.711 4.3l5.7 5.766L8.7 15.711l-1.4-1.422 4.289-4.242-4.3-4.347z"></path></svg></button>
        </div>
    </div>



</template>

<script>
import ePub from "epubjs";
import Nav from "@/Components/Structure/Nav";



const URL_EPUB = "http://lv.test";


export default {
  name: "Reader",

  components: {
    Nav,
  },
  data() {
    return {
      epub: `${URL_EPUB}/epubs/${this.product.epub}`,
      newEpub: [],
      show: false,
      book: {},
      rendition: {},
      chapter: "",
      coverUrl: "",

    };
  },


  mounted() {
    this.loadEpub();
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

