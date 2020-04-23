<template>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Login</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="employee in data" :key="employee.id">
                <th scope="row">{{ employee.login }}</th>
                <td>{{ employee.email }}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ["data"],
    mounted() {
        console.log("test");
    }
};
</script>
