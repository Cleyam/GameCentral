<template>
    <table class="table table-bordered blue shadow mt-3">
        <thead>
            <tr>
                <th scope="col">{{ name }}</th>
                <th scope="col">{{ developer }}</th>
                <th scope="col">{{ genre }}</th>
                <th scope="col">{{ release }}</th>
                <th scope="col">{{ stock }}</th>
                <th scope="col">{{ see }}</th>
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
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ["data", "name", "developer", "genre", "release", "stock", "see"],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
