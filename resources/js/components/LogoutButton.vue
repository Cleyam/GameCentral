<template>
    <form id="logout-form" :action="route" method="POST">
        <input type="hidden" name="_token" :value="csrf" />
        <button type="submit" class="btn logout bg-orange shadow-sm">
            <i class="fas fa-sign-out-alt fs-25 text-light"></i>
        </button>
    </form>
</template>

<script>
export default {
    props: ["route"],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
