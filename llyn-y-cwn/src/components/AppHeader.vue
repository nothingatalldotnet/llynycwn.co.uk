<template>
    <header>
        <h1>LLYN Y CWN</h1>
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
                    <a href="https://www.instagram.com/llynycwnmusic/" target="_blank" title="Instagram">
                        <font-awesome-icon :icon="['fab', 'instagram']" aria-hidden="true" />
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/llynycwn/" target="_blank" title="Facebook">
                        <font-awesome-icon :icon="['fab', 'facebook']" aria-hidden="true" />
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/user/mankymusic1" target="_blank" title="Youtube">
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
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: .5rem 1rem;

        @media (max-width: #{768px}) {
            flex-direction: column;
            align-items: flex-start;
        }

        h1 {
            color: #ffffff;

            @media (max-width: #{768px}) {
                margin: auto;
            }
        }

        nav {
            margin-left: auto;

            @media (max-width: #{768px}) {
                margin: auto;
            }

            ul {
                list-style: none;
                padding: 0;
            
                li {
                    display: inline-flex;

                    @media (max-width: #{768px}) {
                        &:first-child {
                            margin-left: 4px;
                        }
                    }

                    &:not(:first-child) {
                        margin-left: 1rem;
                    }

                    a {
                        color: #ffffff;
                        text-decoration: none;
                    }
                }
            }
        }
    }
</style>
