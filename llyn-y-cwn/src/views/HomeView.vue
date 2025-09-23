<template>
  <main>
    <news-block/>
    <live-block/>
    <release-block/>
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
    flex-direction: column;
    justify-content: space-between;
    align-items: stretch;
    padding: 0.5rem 1rem;
    gap: 50px;

    @media (max-width: 767px) {
      flex-direction: column;
      align-items: center;
    }
  }
</style>

<script>
  import NewsBlock from '@/components/NewsBlock.vue';
  import LiveBlock from '@/components/LiveBlock.vue';
  import ReleaseBlock from '@/components/ReleaseBlock.vue';

  export default {
    name: "HomeView",
    components: {
      NewsBlock,
      LiveBlock,
      ReleaseBlock
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
