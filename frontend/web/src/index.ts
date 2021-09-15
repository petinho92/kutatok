import App from "./app.svelte";

window.addEventListener('load', ()=>{
	const app = new App({target: document.body});
});

export {}