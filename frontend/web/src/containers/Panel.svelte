<script>
    import {shows, eloadas} from "src/application/dataStore/GetShows.ts";
    import CollapsibleSection from "src/presentationals/CollapsibleSection.svelte";
</script>

<div class="container is-max-desktop mt-6 mb-6">
    <div class="tile is-parent">
        <div class="tile is-child box panelcolor">
            <p class="title has-text-centered has-text-white">Kedves Érdeklődők!</p>
            <div class="has-text-justified has-text-white">
                <p>A Kutatók Éjszakája egy Európa-szerte megrendezett ingyenes eseménysorozat a tudomány és a kutatói
                    életpálya népszerűsítésére. Idén szeptember 24-én és 25-én lehet bepillantani a különböző
                    tudományterületek titkaiba.</p>
                <p>Szórakoztató, inspiráló előadásokon, kísérleteken, laborbejárásokon és további játékos programokon
                    keresztül minden korosztály megismerkedhet a tudományos kutatás számos új eredményével. rendezvény
                    legfontosabb célja, hogy a kutatók és fejlesztők sokszínű munkája vonzóvá váljon a fiatalok számára
                    – fiúknak és lányoknak egyaránt. Az eseménysorozat kicsik és nagyok számára egyaránt izgalmas
                    programkínálattal várja az érdeklődőket</p>

            </div>
            <p class="subtitle has-text-centered has-text-white mt-4">Kutatók Éjszakája története</p>
            <div class="has-text-justified has-text-white">
                <p class="mb-2">A Kutatók Éjszakája (Researchers’ Night) az Európai Bizottság kezdeményezésére és
                    támogatásával
                    Európa szerte megrendezett tudomány-népszerűsítő fesztivál. Az eseményt 2005 óta évente, minden év
                    szeptemberének negyedik péntekén rendezik. A rendezvény célja, hogy a kutatókat, kutatásokat
                    közelebb hozza az emberekhez, bemutassa munkájuk sokszínűségét és felhívja a figyelmet a tudomány
                    szerepére a mindennapi életünkben. Fontos cél az is, hogy a fiatalok számára vonzóvá tegye a kutatói
                    karriert, így segítve a tudományos utánpótlás biztosítását. Az esemény láthatóvá teszi a kutatók
                    munkájának társadalmi hasznosságát azáltal, hogy eredményeiket interaktív, kézzelfogható és vonzó
                    formában mutatja be.</p>
                <p class="mb-2">Magyarország a Kutatók Éjszakája európai programhoz 2006-ban csatlakozott, 2008-tól
                    pedig a Pécsi
                    Tudományegyetem (PTE) is különleges előadásokat, laborlátogatásokat, interaktív programokat szervez
                    minden év szeptemberében. Az első években a PTE Ifjúság úti campus-án, a Természettudományi Kar
                    vezetésével zajlottak a programok, a Bölcsészettudományi és az Egészségtudományi Kar részvételével.
                    Az elmúlt több mint egy évtizedben a résztvevő karok sora bővült, a programok száma pedig
                    megsokszorozódott.</p>
                <p class="mb-2">2013-ban és 2014-ben a Pécsi Tudományegyetem a Tempus Közalapítvánnyal és a Zsolnay
                    Negyeddel
                    együttműködve, országosan is kiemelt eseményt szervezett, így segítve a pécsi tudományos és kutatói
                    élet láthatóvá tételét. E két évben két fő helyszíne volt a pécsi programoknak: a megszokott Ifjúság
                    úti PTE TTK campus mellett a Zsolnay Negyed adott otthont a különleges és emlékezetes éjszakáknak,
                    színes programokkal, érdekes látnivalókkal és máskor nem látogatható helyszínekkel vártuk a
                    nagyközönséget.</p>
                <p class="mb-2">A kutatók a hétköznapokban tapasztalható csodák mögött álló színes egyéniségek - ezt
                    igyekszik
                    bemutatni évről-évre a Kutatók Éjszakája. Az eseménynek továbbra is az a célja, hogy megváltoztassa
                    a kutatókról kialakult általános képet, és minél több fiatalt győzzön meg arról, hogy érdemes a
                    tudományos életpályát választani. A sokéves hagyománynak megfelelően minden évben kinyílnak a
                    laborajtók, a látogatók személyesen találkozhatnak a kutatókkal, kipróbálhatják eszközeiket,
                    találmányaikat, megismerhetik a munkájukat előadások és tudományos-szórakoztató programok
                    keretében.</p>
                <p class="mb-2">2021-ben, szeptember negyedik péntekén, vagyis 24-én kinyílnak a laborajtók a Pécsi
                    Tudományegyetemen
                    és ismét csatlakozunk az európai rendezvénysorozathoz!</p>
                <p class="mb-2">Sok szeretettel várjuk a Kutatók Éjszakáján az érdeklődő kicsiket és nagyokat, a
                    fiatalokat és
                    idősebbeket újdonságokkal és érdekességekkel teli élménycentrikus, látványos és izgalmas
                    kalandokra.</p>
            </div>

            <h3 class="sectoionheader">
                Programok Szeptember 24. 16:00-22:00
            </h3>
            {#each shows as show}
                <CollapsibleSection headerTime={show.time} headerText={show.name}>
                    <div class="content">
                        <p>Időpont: {show.time}<br>
                        Helyszín: {show.place}</p><br>
                        {show.description}
                    </div>
                </CollapsibleSection>
            {/each}
            <h3 class="sectoionheader">
                Előadások Szeptember 24. 16:00-22:00
            </h3>
            {#each eloadas as ea}
                <CollapsibleSection headerTime={ea.time} headerText={ea.name}>
                    <div class="content">
                        <p>Időpont: {ea.time}<br>
                            Helyszín: {ea.place}</p><br>
                        {ea.description}
                    </div>
                </CollapsibleSection>
            {/each}
            <!--                        <div class="columns is-vcentered mt-6">-->
            <!--                            <div class="column is-full-mobile">-->
            <!--                                <section class="panel">-->
            <!--                                    <p class="panel-heading has-text-centered orangecolor">Programok Szeptember 24. 16:00-22:00</p>-->
            <!--                                    <div class="panel-block orangecolortable">-->
            <!--                                        <table class="table table is-fullwidth">-->
            <!--                                            <thead>-->
            <!--                                            <tr style="background-color: white;">-->
            <!--                                                <th>Időpont</th>-->
            <!--                                                <th>Előadás</th>-->
            <!--                                                <th>Helyszín</th>-->
            <!--                                            </tr>-->
            <!--                                            </thead>-->
            <!--                                            <tbody>-->
            <!--                                            <tr class="coldivider">-->
            <!--                                                <td colspan="3" class="has-text-centered">Folyamatos programok</td>-->
            <!--                                            </tr>-->
            <!--                                            {#each shows as show}-->
            <!--                                                <tr>-->
            <!--                                                    <td>{show.time}</td>-->
            <!--                                                    <td>{show.name}</td>-->
            <!--                                                    <td>{show.place}</td>-->
            <!--                                                </tr>-->
            <!--                                            {/each}-->
            <!--                                            <tr class="coldivider">-->
            <!--                                                <td colspan="3" class="has-text-centered">Előadások</td>-->
            <!--                                            </tr>-->
            <!--                                            {#each eloadas as ea}-->
            <!--                                                <tr>-->
            <!--                                                    <td>{ea.time}</td>-->
            <!--                                                    <td>{ea.name}</td>-->
            <!--                                                    <td>{ea.place}</td>-->
            <!--                                                </tr>-->
            <!--                                            {/each}-->
            <!--                                            </tbody>-->
            <!--                                        </table>-->
            <!--                                    </div>-->
            <!--                                </section>-->
            <!--                            </div>-->
            <!--                        </div>-->
        </div>
    </div>
</div>
<style>
    .panelcolor {
        /*background-color: #d2dbe1;*/
        background-image: url("/~web/images/bgp1.jpg");
    }
    .sectoionheader{
        background-color: #e83d3f;
        padding: 15px;
        text-align: center;
    }
</style>