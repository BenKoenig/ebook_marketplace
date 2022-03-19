<template>
  <div id="epub-render"></div>

  <button type="button" @click="previousPage()">Prev</button>
  <button type="button" @click="nextPage()">Next</button>

</template>



<script>
import ePub from "epubjs";
const URL_EPUB = "http://benjamins-macbook-pro.local:5757";

export default {
  name: "Reader",
  data() {
    return {
      epub: `${URL_EPUB}/assets/pg67651-images.epub`,
      newEpub: [],
      show: false,
      book: {},
      rendition: {},
      chapter: "",
      toc: [],
    };
  },
  mounted() {
    this.loadEpub();
  },
  methods: {
    loadEpub(e) {
      this.book = ePub(e ? e.target.result : this.epub);
      this.book.loaded.navigation.then(({ toc }) => {
        this.toc = toc;
      });
      this.book.ready.then(() => {
        this.show = true;
      });
      this.rendition = this.book.renderTo("epub-render", {
        height: "70vh",
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

