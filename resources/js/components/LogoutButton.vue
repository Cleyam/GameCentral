<template>
  <form id="logout-form" :action="route" method="POST">
    <button type="submit" class="btn logout bg-orange shadow-sm">
      <i class="fas fa-sign-out-alt fs-30 text-light"></i>
    </button>
  </form>
</template>

<script>
export default {
  props: ["route"]
};
</script>
