<template>
    <div id="search-bloc" class="container">
        <!-- Search selection -->
        <div class="d-flex justify-content-around pb-5">
            <label
                class="btn bg-orange text-light font-weight-bold mt-4 shadow px-2 py-2"
            >
                <input
                    type="checkbox"
                    v-model="showGame"
                    @click="stopSearchCustomer"
                />
                <span>{{ langGame }}</span>
            </label>
            <label
                class="btn bg-orange text-light font-weight-bold mt-4 shadow px-2 py-2"
            >
                <input
                    type="checkbox"
                    v-model="showCustomer"
                    @click="stopSearchGame"
                />
                <span>{{ langCustomer }}</span>
            </label>
        </div>

        <!-- Search Game Form -->
        <form action="/searchgame" method="POST" v-if="showGame">
            <input type="hidden" name="_token" :value="csrf" />
            <div class="input-group md-form form-sm form-2 pl-0">
                <input
                    name="game"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :placeholder="langGame"
                    :aria-label="langGame"
                />
                <button
                    type="submit"
                    class="input-group-append input-group-text amber lighten-3"
                >
                    <i class="fas fa-search text-grey" aria-hidden="true"></i>
                </button>
            </div>
        </form>

        <!-- Search Customer Form -->
        <form action="/searchcustomer" method="POST" v-if="showCustomer">
            <input type="hidden" name="_token" :value="csrf" />
            <div class="input-group md-form form-sm form-2 pl-0">
                <input
                    name="customer"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :placeholder="langCustomer"
                    :aria-label="langCustomer"
                />
                <button
                    type="submit"
                    class="input-group-append input-group-text amber lighten-3"
                >
                    <i class="fas fa-search text-grey" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props: ["langGame", "langCustomer"],
    data() {
        return {
            showGame: false,
            showCustomer: false,
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    },
    methods: {
        stopSearchCustomer() {
            this.showCustomer = false;
        },
        stopSearchGame() {
            this.showGame = false;
        }
    }
};
</script>
