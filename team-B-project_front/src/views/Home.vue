<template>
  <div>message</div>
  <div>
    <router-link :to="{ path: '/Map' }">
      <button type="button">시작하기</button>
    </router-link>
  </div>
</template>

<script>
export default {
  name: 'Home',

}
</script>