/* eslint-disable */
<template>
    <app-header/>
    <router-view/>
    <app-footer />
</template>

<style lang="scss">
    html {
        background: url("./background.jpg") no-repeat center center fixed;
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
