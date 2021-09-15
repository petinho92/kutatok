<script lang="ts">
    import Router from 'svelte-spa-router';
    import routes from "src/application/Router/routes.ts";
    import 'bulma/css/bulma.css';
    import 'bulma-extensions/bulma-divider/dist/css/bulma-divider.min.css';
    import 'bulma-extensions/bulma-carousel/dist/css/bulma-carousel.min.css';
    import 'bulma-extensions/bulma-accordion/dist/js/bulma-accordion.min.js';
    import 'bulma-extensions/bulma-accordion/dist/css/bulma-accordion.min.css';
    import '@creativebulma/bulma-collapsible/dist/js/bulma-collapsible.min.js';
    import '@creativebulma/bulma-collapsible/dist/css/bulma-collapsible.min.css';
    import '@fortawesome/fontawesome-free/js/fontawesome.js';
    import '@fortawesome/fontawesome-free/js/brands.js';
    import '@fortawesome/fontawesome-free/js/solid.js';

</script>

<style lang="css" global>
    html{
        height: 100%;
    }
    body{
        min-height: 100%;
        background-image: url("/~web/images/bgp2.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

</style>

<Router {routes}/>