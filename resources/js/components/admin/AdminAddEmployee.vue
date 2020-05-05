<template>
    <form id="newEmployee" action="new" method="POST">
        <input type="hidden" name="_token" :value="csrf" />
        <hr />
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="login">{{
                    login
                }}</label>
                <input
                    name="login"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                />
            </div>
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="email">{{
                    email
                }}</label>
                <input
                    name="email"
                    class="form-control my-0 py-1 amber-border"
                    type="email"
                />
            </div>
        </div>
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="name">{{
                    name
                }}</label>
                <input
                    name="name"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                />
            </div>
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="surname">{{
                    surname
                }}</label>
                <input
                    name="surname"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                />
            </div>
        </div>
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="phone">{{
                    phone
                }}</label>
                <input
                    name="phone"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                />
            </div>
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="password">{{
                    password
                }}</label>
                <input
                    name="password"
                    class="form-control my-0 py-1 amber-border"
                    type="password"
                />
            </div>
            <button
                type="submit"
                class="btn bg-orange text-light mx-auto font-weight-bold mt-4 shadow-sm"
            >
                {{ add }}
            </button>
        </div>

        <hr />
    </form>
</template>
<script>
export default {
    props: ["login", "email", "name", "surname", "phone", "password", "add"],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
