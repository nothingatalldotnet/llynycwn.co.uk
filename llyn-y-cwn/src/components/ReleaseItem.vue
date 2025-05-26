<template>
    <li class="release">
        <a :href="release.link" target="_blank" :title="release.title">
            <h3>{{ release.title }}</h3>
        </a>
    </li>
</template>

<script setup>
defineProps({
  release: {
    type: Object,
    required: true
  }
});
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