<template>
    <table class="table table-bordered blue shadow mt-3">
        <thead>
            <tr>
                <th scope="col">{{ name }}</th>
                <th scope="col">{{ dateStart }}</th>
                <th scope="col">{{ dateEnd }}</th>
                <th scope="col">{{ return }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr v-for="game in games" :key="game.id">
                <td>{{ game.reference }}</td>

                <td>
                    <a :href="'game/' + game.id">
                        <i class="fas fa-search fs-25 blue"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ["games"],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
