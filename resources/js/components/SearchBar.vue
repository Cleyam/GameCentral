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
        <!-- Search forms -->
        <form action="" method="POST" v-if="showGame">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :placeholder="langGame"
                    :aria-label="langGame"
                />
                <div class="input-group-append">
                    <span
                        class="input-group-text amber lighten-3"
                        id="basic-text1"
                        ><i
                            class="fas fa-search text-grey"
                            aria-hidden="true"
                        ></i
                    ></span>
                </div>
            </div>
        </form>
        <form action="" method="POST" v-if="showCustomer">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :placeholder="langCustomer"
                    :aria-label="langCustomer"
                />
                <div class="input-group-append">
                    <span
                        class="input-group-text amber lighten-3"
                        id="basic-text1"
                        ><i
                            class="fas fa-search text-grey"
                            aria-hidden="true"
                        ></i
                    ></span>
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
            showCustomer: false
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
