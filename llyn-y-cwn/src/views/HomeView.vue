<template>
  <main>
    <news-block/>
  </main>
</template>

<style lang="scss">
  main {
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 1rem;
  }
</style>

<script>
import NewsBlock from '@/components/NewsBlock.vue';

export default {
  components: {
    NewsBlock,
  },
};
</script>
