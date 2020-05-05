<template>
    <label>
        <li class="list-group-item unselectable" :class="{ success: checked }">
            <input
                type="checkbox"
                :name="name + '[' + data.id + ']'"
                v-model="checked"
                class="hidden"
            />
            {{ data.name }}
        </li>
    </label>
</template>
<script>
export default {
    props: ["data", "name", "isActive"],
    data: function() {
        return {
            checked: this.isActive
        };
    },
    methods: {},
    computed: {}
};
</script>
