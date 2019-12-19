<script>
  import UserItem from "../atoms/molecules/item.svelte";
</script>

<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
  <div class=" dropdown-header noti-title">
    <h6 class="text-overflow m-0">Welcome!</h6>
  </div>
  <UserItem name={'My Profile'} icons ={"ni ni-single-02"}/>
  <UserItem name={'Settings'} icons={"ni ni-single-02"}/>
  <UserItem name={'logout'} icons={"ni ni-single-02"}/>
</div>
