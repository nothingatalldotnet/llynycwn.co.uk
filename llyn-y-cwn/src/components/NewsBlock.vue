<template>
    <section class="news-section">
        <h2>Megaliths In Dub</h2>
        <div>
            <p>The megaliths stand—timeless, unyielding. Their histories stretch beyond recorded memory, their presence imbued with silent narratives of the land. In 2024, Megaliths sought to channel this ancient energy into pure sound. Yet no history exists without its counterpart—no creation without its shadow.</p>
            <p>Megaliths In Dub is the echo beneath the surface, the unheard rhythm that has always been there. Suppressed tempos emerge, pulsing with the primal force of forgotten rites. Guitar invocations from the live rituals of 2024 weave through the fabric of the album, distorting and reshaping the familiar.</p>
            <p>It is a sonic metamorphosis—a spectral reflection of the megalithic presence.</p>
        </div>
        <div class="center-hard">
            <p>The stones have been disturbed.</p>
            <a href="https://coldspring.bandcamp.com/album/megaliths-in-dub-csr354cd" target="_blank" title="LLyn Y Cwn - Megaliths In Dub">
                Buy on Bandcamp
            </a>
        </div>
    </section>
</template>

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
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .news-section {
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
            width: 100%;
        }

        h2 {
            text-transform: uppercase;
            font-size: 1.6rem;
            color: #fff;
        }

        div {
            padding-bottom: 0.83em;

            p {
            color: #eee;
            font-size: 14px;
            opacity: 0;
            @include animation('fadeUp 1s ease forwards');
            }

            p:nth-child(1) { animation-delay: 0.2s; }
            p:nth-child(2) { animation-delay: 0.5s; }
            p:nth-child(3) { animation-delay: 0.8s; }

            &.center-hard {
            text-align: center;
            font-weight: bold;
            }
        }

        a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            padding: 8px 12px;
            background: #000;
            border: 1px solid #fff;
            transition: all 0.3s ease;

            &:hover {
                background: #fff;
                color: #000;
                box-shadow: 0 0 8px #fff;
                transform: scale(1.05);
            }
        }
    }
</style>