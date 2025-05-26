<template>
    <section class="news-section">
        <h2>Megaliths</h2>
        <div>
            <p>Llyn Y Cwn Unleashes Sonic Monoliths with New Album "Megaliths"</p>
            <p>Step into the shadows of ancient mysticism as Llyn Y Cwn, the maestro of Welsh dark ambient, unveils the mesmerizing odyssey that is "Megaliths." This highly anticipated album is a profound exploration of the sacred resonance embedded within stone circles, capturing years of field recordings from the silent and enigmatic monuments that stand as timeless witnesses to the ebb and flow of existence.</p>
            <p>Crafted by artist Ben Powell, "Megaliths" is a sonic voyage that mirrors the sacred spaces marked by stoic pillars of rock, each track representing a specific site. Delving deep into the esoteric significance of stone circles, the album portrays these structures not merely as historical relics but as religious ceremonial sites where the veil between our world and the eternal realm becomes tantalizingly thin.</p>
            <p>Prepare to be engulfed in ambient soundscapes extracted from burial chambers, where Ben has utilized convolution reverbs to replicate the ominous ambiance of these ancient spaces. A veteran of stone circle exploration, Ben's decades-long journey has yielded field recordings that capture the haunting whispers of wind and the solemn caws of crows, enveloping the listener in a ghostly atmosphere that transcends the ordinary.</p>
            <p>Guided by the wisdom found in Julian Cope's "The Modern Antiquarian" and Aurbrey Burl's "A Guide to the Stone Circles of Britain," Llyn Y Cwn embarks on a sonic pilgrimage across the country, exploring the remote bleakness of these sites. Ronald Hutton's insight, that the circular shape of stone rings "mirrors the sun, the full moon, and the bounds of the horizon," becomes a tangible reality in the album's mesmerizing compositions. Aubrey Burl's words resonate as the album transitions from the cramped, gloomy chambers of tombs to the unroofed, wide rings—a journey from darkness to light, from the dead to the living, and from the grave to the sky.</p>
            <p>"Megaliths" invites the audience to experience stones strategically positioned to occupy the centre of the world, acting as microcosms of the surrounding landscape. Archaeological speculation on whether the stones are monuments to ancestors or supernatural entities, such as deities, adds an extra layer of intrigue to the album's enigmatic narrative.</p>
            <p>More than just an album, "Megaliths" is a ritual, a sonic séance that transcends the constraints of time and space. It beckons listeners to commune with the ancient energies that saturate these sacred circles — an invitation to traverse astral planes, to witness the convergence of past and present, and to embrace the otherworldly energies that resonate within these ancient stones. Brace yourselves for an atmospheric descent into the heart of mysterious realms, where the boundaries between the earthly and the spiritual blur into an indistinguishable, haunting atmosphere.</p>
            <p>Experience the haunting beauty of "Megaliths" as Llyn Y Cwn unlocks the gates to the mystical realms of stone circles.</p>
        </div>
        <div class="center-hard">
            <p>Embrace the darkness, and let the stones speak.</p>
            <p>The journey begins now.</p>
            <a href="https://llynycwn.bandcamp.com/album/megaliths" target="_blank" title="LLyn Y Cwn - Megaliths">
                Buy on Bandcamp
            </a>
        </div>
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
        width: 60%;
        max-width: 1000px;
        height: fit-content;
        overflow: hidden;
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

        h2 {
            text-transform: uppercase;
        }

        div {
            padding-bottom: 0.83em;

            p {
                color: #fff;
                font-size: 14px;
            }

            &.center-hard {
                text-align: center;
                font-weight: bold;
            }
        }

        a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            padding: 8px;
            background: #000000;
        }
    }
</style>