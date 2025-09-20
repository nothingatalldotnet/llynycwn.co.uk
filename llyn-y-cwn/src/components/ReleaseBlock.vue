<template>
    <section class="releases-section">
      <h4>RELEASES</h4>
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

@include keyframes(fadeUp) {
  0%   { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

.releases-section {
    padding: 0.5rem 0.5rem 1em 0.5rem;
    width: 60%;
    max-width: 1000px;
    height: fit-content;
    overflow: hidden;
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
    width: 90%;
  }

  h4 {
    text-transform: uppercase;
    font-size: 1.3rem;
    color: #fff;

    @media (max-width: 767px) {
      text-align: center;
    }
  }

  ul {
    list-style: none;
    padding: 0;
    margin: 0;

    @media (max-width: 767px) {
        text-align: center;
    }

    li {
      color: #eee;
      font-size: 14px;
      margin-bottom: 0.5em;
      opacity: 0;
      @include animation('fadeUp 0.8s ease forwards');
    }

    // stagger animations
    li:nth-child(1) { animation-delay: 0.1s; }
    li:nth-child(2) { animation-delay: 0.2s; }
    li:nth-child(3) { animation-delay: 0.3s; }
    li:nth-child(4) { animation-delay: 0.4s; }
    li:nth-child(5) { animation-delay: 0.5s; }
    li:nth-child(6) { animation-delay: 0.6s; }
    li:nth-child(7) { animation-delay: 0.7s; }
    li:nth-child(8) { animation-delay: 0.8s; }
    li:nth-child(9) { animation-delay: 0.9s; }
    li:nth-child(10) { animation-delay: 1s; }
    li:nth-child(11) { animation-delay: 1.1s; }
    li:nth-child(12) { animation-delay: 1.2s; }
    li:nth-child(13) { animation-delay: 1.3s; }
  }
}

  </style>