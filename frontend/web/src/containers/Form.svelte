<script>
    import {cities} from '../application/dataStore/GetCities.ts';
    import {schools} from '../application/dataStore/GetSchools.ts';
    import {shows} from 'src/application/dataStore/GetShows.ts';
    import RegistrantsFormData from "src/application/formData/registrants.ts";
    import {Button} from 'svelma';
    import handleFetch from "src/application/services/handle-fetch.ts";
    import ModalCard from "src/presentationals/ModalCard.svelte";

    let school;
    let city;
    let show1 = [];
    let formData = new RegistrantsFormData();
    let privacy = false;
    let active = false;

    function onRegister() {
        formData.school = school;
        formData.city = city;

        fetch('/post/post-registration', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        }).then(handleFetch)
            .then(res => {
                console.log('sikeres');
                active = true;
            })

    }

</script>

<div class="container is-max-desktop mt-6 cont">
    <div class="tile is-parent">
        <div class="tile is-child box formcolor">
            <p class="title has-text-centered">Regisztráció</p>
            <div class="is-divider is-info" data-content="Személyes adatok"></div>

            <div class="field">
                <label class="label">Név<b class="has-text-danger">*</b></label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="Név" bind:value={formData.name} maxlength="30">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>

                </div>
            </div>

            <div class="field">
                <label class="label">Email<b class="has-text-danger">*</b></label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="example@example.com" bind:value={formData.email}>
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                     </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Város<b class="has-text-danger">*</b></label>
                <div class="control has-icons-left">
                    <div class="select is-fullwidth">
                        <select bind:value={city}>
                            <option value="">Kérem válasszon!</option>
                            {#each cities as city}
                                <option value={city.name}>{city.name}</option>
                            {/each}

                        </select>
                        <span class="icon is-small is-left">
                            <i class="fas fa-city"></i>
                        </span>
                    </div>

                </div>
            </div>
            <div class="field">
                <label class="label">Iskola<b class="has-text-danger">*</b></label>
                <div class="control has-icons-left">
                    <div class="select is-fullwidth">
                        <select bind:value={school}>
                            <option value="">Kérem válasszon!</option>
                            {#each schools as school}
                                {#if school.city === city}
                                    <option value={school.name}>{school.name}</option>
                                {/if}
                            {/each}
                        </select>
                        <span class="icon is-small is-left">
                            <i class="fas fa-school"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="is-divider is-info" data-content="Programok"></div>
            <div class="field">
                <label class="label">Az alábbi programok érdekelnek:</label>
            </div>
            <div class="field mb-6">
                {#each shows as show}
                    <br>
                    <label class="is-pulled-left"><input type="checkbox" bind:group={formData.programs}
                                                         value={show.id}/> {show.name}</label>
                {/each}
            </div>
            <div class="is-divider is-info" data-content="Adatvédelmi tájékoztató"></div>
            <div class="control">
                <label class="checkbox">
                    <br><input type="checkbox" bind:checked={privacy}>
                    Elfogadom az <a href='/~web/files/privacy_policy.pdf' target='_blank'>adatvédelmi tájákoztatót</a>
                    és hozzájárulok a regisztráció során megadott személyes adataim kezeléséhez.<b
                        class="has-text-danger">*</b>
                </label>
            </div>
            <!--            <div class="buttons  mt-6 mb-6">-->
            <div class="columns is-centered mt-6">
                <div class="buttons">
                    <Button type="is-info"
                            outlined on:click={onRegister}
                            disabled={!privacy}>
                        Regisztráció
                    </Button>
                </div>
            </div>
        </div>

    </div>
</div>


<ModalCard bind:active={active} title="Sikeres regisztráció">
    <div class="modal-card-body">
        <p></p>
        <p>Sok szeretettel várjuk a PTE MIK Kutatók Éjszakáján, újdonságokkal és érdekességekkel teli élménycentrikus, látványos és izgalmas kalandokra.</p>
        <p></p>
    </div>
</ModalCard>

<style>
    .formcolor {
        /*background-color: #feca4d;*/
        background-image: linear-gradient(#feca4d, #eaa12a);
        opacity: 1;

        /*background-image: url("/~web/images/bgp.jpg");*/
    }

    .cont {
        margin-bottom: 45px;
    }

</style>