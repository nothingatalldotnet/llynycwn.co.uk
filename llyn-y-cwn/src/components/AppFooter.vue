<template>
    <footer>
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
        <div>
            <p>site by <a href="https://nothingatall.net/" target="_blank" title="nothingatall.net">nothingatall.net</a></p>
        </div>
    </footer>
</template>

<style lang="scss">
    footer {
        padding: 0.5rem 1rem;
        height: 50px;
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
        align-items: center;
        font-size: 10px;
        box-sizing: border-box;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 100; 

        @media (max-width: 767px) {
            flex-direction: column;
            position: relative;
            bottom: 100px;
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
                        font-size: 20px;
                    }
                }
            }
        }

        div {
            padding: 0.5rem;
            backdrop-filter: blur(5px);
            background: linear-gradient(
                270deg,
                rgba(25, 25, 25, 0.85),
                rgba(35, 35, 35, 0.8),
                rgba(25, 25, 25, 0.85)
            );
            background-size: 200% 200%;
            backdrop-filter: blur(8px);

            p, a {
                margin: 0;
                color: #fff;
                text-decoration: none;
            }
        }
    }
</style>
