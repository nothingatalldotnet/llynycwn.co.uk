<template>
  <main>
    <left-block/>
    <right-block/>
    <div class="blend"></div>

    <component
          :is="'script'"
          type="application/ld+json"
          v-html="structuredData"
        />
  </main>
</template>

<style lang="scss">
  main {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100%;
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;

    @media (max-width: 767px) {
      flex-direction: column-reverse;
      overflow: scroll;
      align-items: center;
      height: auto;
      min-height: 100vh;
      overflow: visible;
    }

    > * {
      position: absolute;
      top: 0;
      height: 100%;
      width: 50%;

      @media (max-width: 767px) {
        width: 100%;
        position: relative;
        height: auto;
      }
    }

    left-block {
      left: 0;
      z-index: 1;

      @media (max-width: 767px) {
        width:100%;
      }
    }

    right-block {
      right: 0;
      z-index: 1;

      @media (max-width: 767px) {
        width:100%;
      }
    }

    .blend {
      position: absolute;
      top: 0;
      left: 40%;
      width: 20%;
      height: 100%;
      z-index: 2;
      pointer-events: none;

      background: linear-gradient(
      to right,
      rgba(0,0,0,0),
      rgba(0,0,0,1),
      rgba(0,0,0,0)
      );

      mix-blend-mode: multiply;
      filter: blur(40px);
    }
  }
</style>

<script>
  import LeftBlock from '@/components/LeftBlock.vue';
  import RightBlock from '@/components/RightBlock.vue';

  export default {
    name: "HomeView",
    components: {
      LeftBlock,
      RightBlock
    },
    data() {
      return {
        structuredData: JSON.stringify({
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Llyn Y Cwn",
          "url": "https://llynycwn.co.uk/",
          "logo": "https://llynycwn.co.uk/logo.png"
        })
      }
    }
  };
  </script>
