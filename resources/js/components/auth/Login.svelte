<script>
  import FooterLogin from "./component/FooterLogin.svelte";
  import LoginBox from "./component/LoginBox.svelte";
  import LoginHeader from "./component/LoginHeader.svelte";
  import LoginNavbar from "./component/LoginNavbar.svelte";
</script>

<div class="main-content bg-dark">
  <!-- Navbar -->
   <LoginNavbar />
  <!-- Header -->
  <LoginHeader />
  <!-- Page content -->
  <LoginBox />
  <!-- Footer -->
  <FooterLogin />
</div>
