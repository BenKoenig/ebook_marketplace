

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
});
</script>


<template>
  <Nav :canLogin="canLogin" :canRegister="canRegister" />

  <div id="epub-render"></div>

  <div class="flex gap-x-2">
    <button type="button" @click="previousPage()">Prev</button>
    <button type="button" @click="nextPage()">Next</button>
  </div>


</template>



<script>
import ePub from "epubjs";
import Nav from "@/Components/Structure/NavigationComponent";



const URL_EPUB = "http://lv.test";
export default {
  name: "Reader",

  components: {
    Nav,
  },
  data() {
    return {
      epub: `${URL_EPUB}/epubs/0Pfn4iy0HYsJbrkR7PyesiBlQUUoDOSsWMUf8CnI.epub`,
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
        height: '70vh',
        width: "98%",
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

