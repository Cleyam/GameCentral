<template>
    <div id="search-bloc" class="container">
        <!-- Search selection -->
        <div class="d-flex justify-content-center pb-3 mt-1">
            <label
                class="btn bg-orange text-light font-weight-bold shadow mx-2 px-2 py-2"
            >
                <input
                    class="d-none"
                    type="checkbox"
                    v-model="showGame"
                    @click="stopSearchCustomer"
                />
                <span>{{ langGame }}</span>
            </label>
            <label
                class="btn bg-orange text-light font-weight-bold shadow mx-2 px-2 py-2"
            >
                <input
                    class="d-none"
                    type="checkbox"
                    v-model="showCustomer"
                    @click="stopSearchGame"
                />
                <span>{{ langCustomer }}</span>
            </label>
        </div>

        <!-- Search Game Form -->
        <form action="search" method="POST" v-if="showGame">
            <input type="hidden" name="_token" :value="csrf" />
            <input type="hidden" name="type" value="game" />
            <div class="d-block input-group md-form form-sm form-2 pl-0">
                <label class="font-weight-bold blue" for="search">
                    {{ langGame }}
                </label>
                <div class="d-flex">
                    <input
                        name="search"
                        class="form-control my-0 py-1 amber-border"
                        type="text"
                        :placeholder="langGame"
                        :aria-label="langGame"
                    />
                    <button
                        type="submit"
                        class="input-group-append input-group-text amber lighten-3 bg-blue"
                    >
                        <i
                            class="fas fa-search text-light"
                            aria-hidden="true"
                        ></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Search Customer Form -->
        <form action="search" method="POST" v-if="showCustomer">
            <input type="hidden" name="_token" :value="csrf" />
            <input type="hidden" name="type" value="customer" />
            <div class="d-block input-group md-form form-sm form-2 pl-0">
                <label class="font-weight-bold blue" for="search">
                    {{ langCustomer }}
                </label>
                <div class="d-flex">
                    <input
                        name="search"
                        class="form-control my-0 py-1 amber-border"
                        type="text"
                        :placeholder="langCustomer"
                        :aria-label="langCustomer"
                    />
                    <button
                        type="submit"
                        class="input-group-append input-group-text amber lighten-3 bg-blue"
                    >
                        <i
                            class="fas fa-search text-light"
                            aria-hidden="true"
                        ></i>
                    </button>
                </div>
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
