<script lang="ts">
    let year = new Date().getFullYear();
</script>

<div class="foobar">
    <div class="footcontent">
        <strong class="has-text-white">PTE MIK </strong> {year}
    </div>
</div>

<style>
    .foobar {
        background-color: #004141;
        color: white;
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 50px;
    }
    .footcontent{
        padding-top: 15px;
        margin-left: 10px;
    }
</style>