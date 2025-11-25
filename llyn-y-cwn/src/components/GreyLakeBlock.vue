<template>
    <section class="grey-lake-block">
        <h2>The Grey Lake</h2>
        <div>
            <p>We're delighted to introduce The Grey Lake — a long-distance collaboration between two artists, built from an exchange of tones, drones, found sounds, and field recordings.</p>
            <p>The project's name reflects both artists' identities and creative approaches: the dark ambient soundscapes of Ben Powell (Llyn Y Cwn) merge with the reel-to-reel tape manipulations and granular textures of Christopher Olson (Standard Grey). Together, they craft new sonic tableaux and evocative atmospheres for the imagination.</p>
            <p>Listeners can expect dense, immersive drones, delicately layered textures, and rich, enveloping dark ambience.</p>
        </div>
        <div class="center-hard">
            <a href="https://winter-light.bandcamp.com/album/the-grey-lake" target="_blank" title="The Grey Lake - The Grey Lake">
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

    .grey-lake-block {
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

        h2 {
            text-transform: uppercase;
            font-size: 1.6rem;
            color: #fff;

            @media (max-width: 767px) {
                text-align: center;
            }
        }

        div {
            padding-bottom: 0.83em;

            p {
                color: #eee;
                font-size: 14px;
                opacity: 0;
                @include animation('fadeUp 1s ease forwards');

                @media (max-width: 767px) {
                    text-align: center;
                }
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