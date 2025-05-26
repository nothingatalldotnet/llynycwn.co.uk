<template>
    <app-header/>
    <router-view/>
    <app-footer />
</template>

<style lang="scss">

    html {
        background: url("./assets/background-megaliths.webp") no-repeat center center fixed;
        background-size: cover;
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;

        body {
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        #app {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
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
