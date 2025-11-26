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

    h1, h2 {
        position: relative;
        color: #ffffff;
        font-size: 2em;
        font-weight: bold;

        &::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 100%;
            height: 2px;
            background: #ffffff;
            opacity: 0.7;
        }
    }

    @media (max-width: #{768px}) {
        position: relative;
        background: #000;
        flex-direction: column;
        align-items: flex-start;
        padding: 1rem;
        top: 0;

        h1, h2 {
            margin: 0 auto;
            text-align: center;
            width: 50%;
        }

        h1 {
            margin-bottom: 10px;

            &::after {
                bottom: -10px;
            }
        }

        h2 {
            margin-top: 10px;

            &:after {
                display: none;
            }
        }
    }
}

</style>
