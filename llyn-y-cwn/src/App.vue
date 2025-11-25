<template>
    <app-header />
    <router-view />
    <app-footer />
</template>

<style lang="scss">
    html, body, #app {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
    }
</style>

<script>
import AppHeader from '@/components/AppHeader.vue';
import AppFooter from '@/components/AppFooter.vue';

export default {
  components: {
    AppHeader,
    AppFooter,
  },
};
</script>
