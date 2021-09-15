<script lang="ts">
	import Page from "gold/lib/page";
	export let page:Page;
	let title = page.$title;

	let url = "/getstat/getData";
	import fetchStore from '../services/fetch.js';
	const [data, loading, error, get] = fetchStore(url);

</script>

<div class="box">
	<button on:click={get}>
		Frissítés
	</button>
</div>
