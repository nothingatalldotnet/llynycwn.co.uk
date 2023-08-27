<template>
    <section class="news-section">
        <h2>Stratigraphy</h2>
        <div>
            <p>Stratigraphy is an album of environmental ambient sound; three long-form pieces following the voyage of an imagined sonde dropped from the upper atmosphere through the clouds, through the ocean and below the seabed through the sediments and bedrock, through layers of increasing density and time towards the centre of gravity, through stratigraphy.</p>
            <p>An aural cross section of our planet, through air, water and rock, each of these elements a layer of the stratigraphy of Earth, and each with an internal stratigraphy formed over time scales ranging from minutes to millennia.</p>
            <p>The album contains the sound of air as its boundary layer traverses geological features, recordings from a hydrophone attached to a CTD (conductivity, temperature and depth probe, an oceanographic instrument used to measure the stratification of the sea) as it descends to 100m below the surface of the Irish Sea. Manipulated samples of a sub bottom profiler, a sonar system that uses acoustic energy to produce images of sub-seabed features.</p>
            <p>This music was originally written as part of the Du Y Moroedd album, but it was far too long to fit on the CD so an edit appeared instead – this is Stratigraphy fully realised.</p>
        </div>
        <a href="https://llynycwn.bandcamp.com/album/stratigraphy" target="_blank" title="LLyn Y Cwn - Stratigraphy">
            Buy on Bandcamp
        </a>
    </section>
</template>

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
    .news-section {
        padding: 0.5rem 0.5rem 1em 0.5rem;
        width: 500px;
        background-color: rgba(128, 128, 128, 0.1);
        backdrop-filter: blur(8px);
        animation-name: color;
        animation-duration: 10s;
        animation-iteration-count: infinite;
        @include animation('pulse 10s infinite');

        h2 {
            text-transform: uppercase;
        }

        div {
            padding-bottom: 0.83em;

            p {
                color: #fff;
                font-size: 14px;
            }
        }

        a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            padding: 8px;
            background: #808080;
        }
    }
</style>