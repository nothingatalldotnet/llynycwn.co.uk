<template>
    <section class="live-section">
        <h3>LIVE</h3>
        <div>
            <p>Llyn Y Cwn plays Harmonicon Festival, Todmorden, 10-12 Oct</p>
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


    .live-section {
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

        h3 {
            text-transform: uppercase;
            font-size: 1.3rem;
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

        }

    }
</style>