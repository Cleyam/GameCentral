<template>
    <form @submit.prevent="$emit(search)" method="post" action="">
        <button
            :id="search"
            type="submit"
            class="btn bg-orange text-light font-weight-bold mt-4 shadow"
        >
            <slot></slot>
        </button>
    </form>
</template>

<script>
export default {
    props: ["search"]
};
</script>
