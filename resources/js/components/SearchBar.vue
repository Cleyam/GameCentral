<template>
    <div id="search-bloc" class="container">
        <!-- Search selection -->
        <div class="d-flex justify-content-around pb-5">
            <label
                class="btn bg-orange text-light font-weight-bold mt-4 shadow px-2 py-2"
            >
                <input type="checkbox" v-model="showGame" />
                <span>{{ langGame }}</span>
            </label>
            <label
                class="btn bg-orange text-light font-weight-bold mt-4 shadow px-2 py-2"
            >
                <input type="checkbox" v-model="showCustomer" />
                <span>{{ langCustomer }}</span>
            </label>
        </div>
        <!-- Search forms -->
        <form action="" method="POST" v-if="showGame">
            <input type="text" class="form-control" :placeholder="langGame" />
        </form>
        <form action="" method="POST" v-if="showCustomer">
            <input
                type="text"
                class="form-control"
                :placeholder="langCustomer"
            />
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
    }
};
</script>
