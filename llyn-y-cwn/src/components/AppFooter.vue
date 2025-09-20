<template>
    <footer>
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
