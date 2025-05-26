<template>
  <main>
    <news-block/>
    <release-block/>
  </main>
</template>

<style lang="scss">
  main {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: stretch;
    padding: 0.5rem 1rem;
    gap: 50px;

    @media (max-width: 767px) {
      flex-direction: column;
    }
  }


</style>

<script>
import NewsBlock from '@/components/NewsBlock.vue';
import ReleaseBlock from '@/components/ReleaseBlock.vue';

export default {
  components: {
    NewsBlock,
    ReleaseBlock
  },
};
</script>
