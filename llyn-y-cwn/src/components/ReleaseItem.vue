<template>
    <li class="release">
        <a :href="release.link" target="_blank" :title="release.title">
            <h3>{{ release.title }}</h3>
        </a>
        <component
            :is="'script'"
            type="application/ld+json"
            v-html="structuredData"
        />
    </li>
</template>

<script setup>
import { computed } from "vue"
    const props = defineProps({
        release: {
            type: Object,
            required: true
        }
    })

    const structuredData = computed(() =>
        JSON.stringify({
            "@context": "https://schema.org",
            "@type": "MusicAlbum",
            "name": props.release.title,
            "url": props.release.link,
            "byArtist": {
                "@type": "MusicGroup",
                "name": "Llyn Y Cwn",
                "url": "https://llynycwn.co.uk/"
            }
        })
    );
</script>

<style scoped>
    .release {
        font-size: 14px;
        font-family: "Montserrat", sans-serif;

        a {
            text-decoration: none;
            color: #fff;

            h3 {
                font-size: 14px;
                font-family: "Montserrat", sans-serif;
            }
        }
    }
</style>