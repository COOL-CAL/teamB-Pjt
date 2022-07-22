<template>
  <div>
    message
  </div>

  <router-link :to="{ path: '/Map' }">
    <button type="button">시작하기</button>
  </router-link>
</template>

<script>
export default {
  name: 'Home',

}
</script>