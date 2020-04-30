<template>
    <label>
        <li class="list-group-item" :class="{ success: checked }">
            <input
                type="checkbox"
                :name="data + '[' + data.id + ']'"
                v-model="checked"
            />
            {{ data.name }}
        </li>
    </label>
</template>
<script>
export default {
    props: ["data", "isActive"],
    data: function() {
        return {
            checked: this.isActive
        };
    },
    methods: {},
    computed: {}
};
</script>
