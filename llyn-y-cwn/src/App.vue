<template>
    <app-header/>
    <router-view/>
    <app-footer />
</template>

<style lang="scss">
    @keyframes scanlines {
        to { background-position: 0 6px; }
    }

    html {
        background: url("./assets/background-megaliths-in-dub-no-text.webp") no-repeat center center fixed;
        background-size: cover;
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;

        &:before {
            content: "";
            position: fixed;
            inset: 0;
            background: repeating-linear-gradient(
                0deg,
                rgba(255,0,0,0.1) 0 2px,
                rgba(0,255,0,0.1) 2px 4px,
                rgba(0,0,255,0.1) 4px 6px
            );
            mix-blend-mode: overlay;
            animation: scanlines 0.1s steps(6) infinite;
        }


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
