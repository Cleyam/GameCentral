<template>
    <div>
        <input
            type="text"
            placeholder="Nom du client"
            v-model="query"
            v-on:keyup="autoComplete"
            class="form-control"
        />
        <div class="panel-footer" v-if="results.length">
            <form id="newCustomer" action="new" method="POST">
                <input type="hidden" name="_token" :value="csrf" />
                <input type="hidden" name="game" :value="game.id" />
                <div class="input-group md-form form-sm form-2 pl-0">
                    <select
                        name="customer"
                        class="form-control col-12"
                        required
                    >
                        <option disabled selected
                            >Choisir parmi les clients</option
                        >
                        <option
                            class="list-group-item"
                            v-for="result in results"
                            :key="result.id"
                            :value="result.id"
                        >
                            {{ result.surname }} {{ result.name }}
                        </option>
                    </select>
                </div>
                <div class="input-group md-form form-sm form-2 pl-0">
                    <select name="dateEnd" class="form-control col-12" required>
                        <option disabled selected>Durée de la location</option>
                        <option value="+1 week">Une semaine</option>
                        <option value="+2 week">Deux semaine</option>
                        <option value="+3 week">Trois semaine</option>
                        <option value="+1 month">Un mois</option>
                    </select>
                </div>
                <div class="text-center">
                    <button
                        type="submit"
                        class="btn bg-orange text-light mx-auto font-weight-bold mt-4 shadow-sm"
                    >
                        Ajouter
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    props: ["game"],
    data() {
        return {
            query: "",
            results: [],
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    },
    methods: {
        autoComplete() {
            this.results = [];
            if (this.query.length > 2) {
                axios
                    .get("/api/search", { params: { query: this.query } })
                    .then(response => {
                        this.results = response.data;
                    });
            }
        }
    }
};
</script>
