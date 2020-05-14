<template>
    <table class="table table-bordered blue shadow mt-3">
        <thead>
            <tr>
                <th scope="col">{{ name }}</th>
                <th scope="col">{{ dateStart }}</th>
                <th scope="col">{{ dateEnd }}</th>
                <th scope="col">{{ returnGame }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr v-for="game in games" :key="game.id">
                <td>{{ game.reference }}</td>
                <td>{{ game.pivot.dateStart.substring(0, 10) }}</td>
                <td>{{ game.pivot.dateEnd.substring(0, 10) }}</td>

                <td>
                    <a
                        :href="'return/' + game.id"
                        class=""
                        v-if="game.pivot.deleted_at == null"
                    >
                        <button
                            class="btn bg-orange text-light mx-auto font-weight-bold mb-4 shadow-sm"
                        >
                            {{ toreturn }}
                        </button>
                    </a>
                    <a href="" class="" v-else>
                        <button
                            class="btn bg-orange text-light mx-auto font-weight-bold mb-4 shadow-sm"
                            disabled
                        >
                            {{ returned }}
                        </button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: [
        "customer",
        "games",
        "name",
        "date-start",
        "date-end",
        "return-game",
        "toreturn",
        "returned"
    ],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
