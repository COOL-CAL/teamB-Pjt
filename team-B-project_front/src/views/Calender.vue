<template>
  <h3>날짜 선택</h3>
  <div>
    달력 예정<br>
    출발일
    <input type="date" name="startDay">
    도착일
    <input type="date" name="endDay">
  </div>
  <div>
    <div class="calendar">
      <div class="header">
        <div class="year-month"></div>
        <div class="nav">
          <button class="nav-btn go-prev">&lt;</button>
          <button class="nav-btn go-today">Today</button>
          <button class="nav-btn go-next">&gt;</button>
        </div>
      </div>
      <div class="main">
        <div class="days">
          <div class="day">일</div>
          <div class="day">월</div>
          <div class="day">화</div>
          <div class="day">수</div>
          <div class="day">목</div>
          <div class="day">금</div>
          <div class="day">토</div>
        </div>
        <div class="dates"></div>
      </div>
    </div>
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