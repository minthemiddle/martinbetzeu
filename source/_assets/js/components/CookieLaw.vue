<template>
  <footer>
    <cookie-law theme="mbeu" buttonText="I agree">
      <div slot="message">
    If you agree, I use 1 session cookie to log anonymous page visits and redirects. <a href="/privacy" class="text-blue-lighter">(More)</a></div>
  </cookie-law>
  </footer>
</template>

<script>
  import CookieLaw from 'vue-cookie-law'
  export default {
    components: { CookieLaw }
  }
</script>
