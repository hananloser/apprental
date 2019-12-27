<script>
  export let data = [] ;

</script>

<style>
  /* your styles go here */
</style>

<!-- markup (zero or more items) goes here -->

{#await data}
    loading ..
{:then data}
    {#each data as item}
        <ul>
            <li>{item.first_name}</li>
        </ul>
    {/each}
{/await}
