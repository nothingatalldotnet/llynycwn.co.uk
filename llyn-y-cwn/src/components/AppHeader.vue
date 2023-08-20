<template>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="mailto:info@llynycwn.co.uk" target="_blank" title="Email">
                        <font-awesome-icon :icon="['fas', 'envelope']" aria-hidden="true" />
                    </a>
                </li>
                <li>
                    <a href="https://llynycwn.bandcamp.com/" target="_blank" title="Bandcamp">
                        <font-awesome-icon :icon="['fab', 'bandcamp']" aria-hidden="true" />
                    </a>
                </li>
                <li>
                    <a href="https://llynycwn.bandcamp.com/" target="_blank" title="Youtube">
                        <font-awesome-icon :icon="['fab', 'youtube']" aria-hidden="true" />
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</template>

<style lang="scss">
    header {
        display: flex;
        padding: .5rem 1rem;
        height: 50px;

        nav {
            margin-left: auto;

            ul {
                list-style: none;
            }

            ul li {
                display: inline-flex;
                margin-left: 1rem;

                a {
                    color: #000;
                    text-decoration: none;
                }
            }
        }
    }
</style>
