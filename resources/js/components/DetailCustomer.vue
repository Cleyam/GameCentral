<template>
    <div>
        <hr />
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="surname">{{
                    surname
                }}</label>
                <input
                    name="surname"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    readonly
                    :value="customer.surname"
                />
            </div>
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="name">{{
                    name
                }}</label>
                <input
                    name="name"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    readonly
                    :value="customer.name"
                />
            </div>
        </div>

        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="email">{{
                    email
                }}</label>
                <input
                    name="email"
                    class="form-control my-0 py-1 amber-border"
                    type="email"
                    readonly
                    :value="customer.email"
                />
            </div>
            <div class="d-block col-12 col-md-6">
                <label class="font-weight-bold blue mt-2" for="phone">{{
                    phone
                }}</label>
                <input
                    name="phone"
                    class="form-control mt-0 mb-2 py-1 amber-border"
                    type="text"
                    readonly
                    :value="customer.phone"
                />
            </div>
        </div>

        <hr />
    </div>
</template>
<script>
export default {
    props: ["customer", "email", "name", "surname", "phone"],
    data: function() {
        return {};
    }
};
</script>
