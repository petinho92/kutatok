<script lang="ts">
    import {push} from 'svelte-spa-router';
    let click = true;
    function handleClick(){
        click == !click;
    }

</script>

<nav class="navbar is-transparent is-fixed-top menucolor" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" on:click={ () => push("/")}>
            <img src="/~web/images/mik51_logo.png" alt="home" width="70" height="40">
        </a>

        <div class="navbar-burger burger" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu {click}">
        <div class="navbar-start">
            <a class="navbar-item" on:click={ () => push("/registration") }>
                Regisztráció
            </a>
        </div>
    </div>
</nav>
<div class="card">
    <div class="card-image">
        <figure class="image is-16by5 is-mobile mt-6 heroimg">
            <img src="/~web/images/kutato_hero_1.png" alt="PTE MIK Kutatók Éjszakája 2021">
        </figure>
    </div>
</div>

<style>
    .menucolor{
        background-color: #3fac69;
    }
    .heroimg{
        opacity: 0.6;
        background-color: #d6cac1;
    }
</style>