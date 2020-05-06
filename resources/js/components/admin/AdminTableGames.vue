<template>
    <table class="table table-bordered blue shadow">
        <thead>
            <tr>
                <th scope="col">{{ name }}</th>
                <th scope="col">{{ developer }}</th>
                <th scope="col">{{ genre }}</th>
                <th scope="col">{{ release }}</th>
                <th scope="col">{{ stock }}</th>
                <th scope="col">{{ see }}</th>
                <th scope="col">{{ deleteGame }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr v-for="game in data" :key="game.id">
                <td>{{ game.reference }}</td>
                <td>
                    <span
                        v-for="developer in game.developers"
                        :key="developer.id"
                    >
                        {{ developer.name }}<br />
                    </span>
                </td>
                <td>
                    <span v-for="genre in game.genres" :key="genre.id">
                        {{ genre.name }}<br />
                    </span>
                </td>
                <td>{{ game.dateRelease.substring(0, 10) }}</td>
                <td>{{ game.stock }}</td>
                <td>
                    <a :href="'game/' + game.id">
                        <i class="fas fa-search fs-25 blue"></i>
                    </a>
                </td>
                <td>
                    <form
                        :id="'delete-id-' + game.id"
                        :action="'games/delete' + game.id"
                        method="POST"
                    >
                        <input type="hidden" name="_token" :value="csrf" />
                        <input name="id" type="hidden" :value="game.id" />
                        <button type="submit" class="btn btn-link">
                            <i class="fas fa-trash-alt fs-25 blue"></i>
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: [
        "data",
        "name",
        "developer",
        "genre",
        "release",
        "stock",
        "see",
        "deleteGame"
    ],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
