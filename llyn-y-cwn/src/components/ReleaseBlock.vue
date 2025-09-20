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
      { title: 'Megaliths', image: '', link: 'https://llynycwn.bandcamp.com/album/megaliths' },
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
      @-webkit-keyframes #{$animation-name} { @content; }
      @-moz-keyframes #{$animation-name} { @content; }
      @-ms-keyframes #{$animation-name} { @content; }
      @-o-keyframes #{$animation-name} { @content; }
      @keyframes #{$animation-name} { @content; }
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
        transform: scale(1);
        box-shadow: 0 0 6px rgba(255, 255, 255, 0.08);
      }
      50% {
        backdrop-filter: blur(9px);
        transform: scale(1.01);
        box-shadow: 0 0 14px rgba(255, 255, 255, 0.18);
      }
      100% {
        backdrop-filter: blur(5px);
        transform: scale(1);
        box-shadow: 0 0 6px rgba(255, 255, 255, 0.08);
      }
    }

    @include keyframes(shimmer-bg) {
      0%   { background-position: 0% 50%; }
      100% { background-position: 120% 50%; }
    }

    .releases-section {
      padding: 0.5rem 0.5rem 1em 0.5rem;
      overflow-y: auto;
      height: fit-content;
      flex: 1;
      background: linear-gradient(
        270deg,
        rgba(25, 25, 25, 0.85),
        rgba(35, 35, 35, 0.8),
        rgba(25, 25, 25, 0.85)
      );
      background-size: 200% 200%;
      backdrop-filter: blur(8px);

      @include animation('pulse 10s infinite ease-in-out, shimmer-bg 45s linear infinite');

      @media (max-width: 767px) {
        max-width: unset;
        width: 100%;
      }

      h2 {
          text-transform: uppercase;
          font-size: 1.3rem;
          color: #fff;
      }

      ul {
        list-style: none;
        padding: 0;
        margin: 0;

        li {
          color: #eee;
          font-size: 14px;
          margin-bottom: 0.5em;
        }
      }
    }
  </style>