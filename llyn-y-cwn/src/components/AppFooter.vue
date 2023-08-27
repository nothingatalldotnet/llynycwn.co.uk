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
            background-color: rgba(128, 128, 128, 0.1);

            p, a {
                margin: 0;
                color: #000;
                text-decoration: none;
            }
        }
    }
</style>
