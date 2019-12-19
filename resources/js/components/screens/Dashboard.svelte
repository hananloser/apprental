<script>
  import List from "../atoms/Lists.svelte";
  import UserSetting from "../atoms/UserSetting.svelte";
  import Notifications from "../atoms/Notifications.svelte";
  import UserAvatar from "../atoms/UserAvatar.svelte";
  import CollapseHeader from "../atoms/CollapseHeader.svelte";
  import Brand from "../atoms/molecules/Brand.svelte";
  import MainContent from "../Content/MainContent.svelte"
</script>
<!-- Sidenav -->
<nav
  class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light
  bg-white"
  id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="/sidenav-collapse-main"
      aria-controls="sidenav-main"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" />
    </button>
    <!-- Brand -->
    <Brand />
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <!-- Notifications -->
      <Notifications />
      <li class="nav-item dropdown">
        <UserAvatar />
        <UserSetting />
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <CollapseHeader />
      <!-- Navigation -->
      <ul class="navbar-nav">
        <List icons={'fa fa-tachometer-alt'} title={'Dashboard'} urls={'google.com'} />
        <List icons={'fa fa-car'} title={'Cars'} urls={'google.com'} />
        <List icons={'fa fa-users'} title={'Owner'} urls={'google.com'} />
        <List icons={'fa fa-shopping-cart'} title={'Transaction'} urls={'google.com'} />
      </ul>
    </div>
  </div>
</nav>
<MainContent />

