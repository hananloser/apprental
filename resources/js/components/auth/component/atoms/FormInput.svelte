<script>
  // your script goes here
  export let icons = ""
</script>
<div class="form-group">
  <div class="input-group input-group-alternative">
    <div class="input-group-prepend">
      <span class="input-group-text">
        <i class={icons} />
      </span>
    </div>
    <slot></slot>
  </div>
</div>
