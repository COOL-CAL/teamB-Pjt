<template>
  <h3>날짜 설정</h3>
  <div>
    달력 예정<br>
    출발일
    <input type="date" name="startDay"><br>
    도착일
    <input type="date" name="endDay">
    </div>
  <div>
    <router-link :to="{ path: '/List' }">
      <button type="button">여행 찾기</button>
    </router-link>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>