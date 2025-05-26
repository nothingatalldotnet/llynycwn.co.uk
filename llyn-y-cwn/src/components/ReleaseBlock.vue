<template>
    <section class="releases-section">
      <h2>RELEASES</h2>
      <ul>
        <Release
          v-for="(release, index) in releases"
          :key="index"
          :release="release"
        />
      </ul>
    </section>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import Release from '@/components/ReleaseItem.vue';

  const releases = ref([]);
  
  onMounted(() => {
    releases.value = [
      { title: 'Boscawen Un Expanded', image: '', link: 'https://llynycwn.bandcamp.com/track/boscawen-un-expanded' },
      { title: 'Stratigraphy', image: '', link: 'https://llynycwn.bandcamp.com/album/stratigraphy' },
      { title: 'Du Y Moroedd', image: '', link: 'https://llynycwn.bandcamp.com/album/du-y-moroedd' },
      { title: 'Llugwy', image: '', link: 'https://llynycwn.bandcamp.com/album/llugwy' },
      { title: 'Dinorwic', image: '', link: 'https://llynycwn.bandcamp.com/album/dinorwic' },
      { title: 'Cwn Bochlwyd', image: '', link: 'https://llynycwn.bandcamp.com/album/cwm-bochlwyd' },
      { title: 'Twll Du', image: '', link: 'https://llynycwn.bandcamp.com/album/twll-du' },
      { title: 'Lost and Found at Sea, Volume 1', image: '', link: 'https://llynycwn.bandcamp.com/album/lost-and-found-at-sea-volume-1' },
      { title: 'IV', image: '', link: 'https://llynycwn.bandcamp.com/album/iv' },
      { title: 'III:KA', image: '', link: 'https://llynycwn.bandcamp.com/album/iii-ka' },
      { title: 'II', image: '', link: 'https://llynycwn.bandcamp.com/album/ii' },
      { title: 'I', image: '', link: 'https://llynycwn.bandcamp.com/album/i' },
    ];
  });
  </script>
  

  <style lang="scss">
    @mixin keyframes($animation-name) {
        @-webkit-keyframes #{$animation-name} {
            @content;
        }
        @-moz-keyframes #{$animation-name} {
            @content;
        }  
        @-ms-keyframes #{$animation-name} {
            @content;
        }
        @-o-keyframes #{$animation-name} {
            @content;
        }  
        @keyframes #{$animation-name} {
            @content;
        }
    }

    @mixin animation($str) {
        -webkit-animation: #{$str};
        -moz-animation: #{$str};
        -ms-animation: #{$str};
        -o-animation: #{$str};
        animation: #{$str};      
    }

    @include keyframes(pulse) {
        0% {
            backdrop-filter: blur(5px);
            background-color: rgba(128, 128, 128, 0.1);
        }
        50% {
            backdrop-filter: blur(5px);
            background-color: rgba(121, 101, 138, 0.1)
        }
        100% {
            backdrop-filter: blur(5px);
            background-color: rgba(128, 128, 128, 0.1);
        }
    }


    .releases-section {
      padding: 0.5rem 0.5rem 1em 0.5rem;
      overflow-y: auto;
      height: fit-content;
      flex: 1;
      background-color: rgba(128, 128, 128, 0.1);
      backdrop-filter: blur(8px);
      animation-name: color;
      animation-duration: 10s;
      animation-iteration-count: infinite;
      @include animation('pulse 10s infinite');

      @media (max-width: 767px) {
        max-width: unset;
        width: 100%;
      }

      ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
    }
  </style>