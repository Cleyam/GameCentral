<template>
  <button
    @click="searchGame"
    class="btn bg-orange text-light font-weight-bold mt-4 shadow"
  >Rechercher un jeu</button>
</template>

<script>
export default {
  data() {
    return {
      settings: ["game", "customer"]
    };
  }
};
</script>