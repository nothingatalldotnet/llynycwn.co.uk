<template>
    <header>
        <h1>LLYN Y CWN</h1>
        <h2>THE GREY LAKE</h2>
    </header>
</template>

<style lang="scss">
    header {
        position: absolute;
        z-index: 10;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: .5rem 1rem;
        width: 100%;
        box-sizing: border-box;

        @media (max-width: #{768px}) {
            flex-direction: column;
            align-items: flex-start;

            position: relative;
            top: 100px;
        }

        h1, h2 {
            color: #ffffff;
            font-size: 2em;
            font-weight: bold;

            @media (max-width: #{768px}) {
                margin: auto;
            }
        }
    }
</style>
