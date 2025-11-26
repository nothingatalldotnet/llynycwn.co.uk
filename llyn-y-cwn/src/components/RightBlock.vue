<template>
    <section class="right">
        <grey-lake-block/>
    </section>
</template>

<style lang="scss">
    .right {
        height: 100%;
    
        flex: 1;
        position: relative;
        background-size: cover;
        background-position: center;
        transition: transform 0.5s ease, filter 0.5s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;

        background: url("../assets/background-the-grey-lake.jpg") no-repeat center center;
        background-size: cover;

        @media (min-width: 768px) {
          &:after {
              content: "";
              position: absolute;
              top: 0; left: 0; right: 0; bottom: 0;
              background: inherit;
              filter: blur(10px);
              z-index: -1;
              transform: scale(1.1);
          }
        }

        @media (max-width: 767px) {
          padding: 120px 0;
        }
    }
</style>
<script>
  import GreyLakeBlock from '@/components/GreyLakeBlock.vue';

  export default {
    name: "RightBlock",
    components: {
      GreyLakeBlock
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
