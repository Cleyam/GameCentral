<template>
    <table class="table table-bordered blue shadow">
        <thead>
            <tr>
                <th scope="col">{{ name }}</th>
                <th scope="col">{{ email }}</th>
                <th scope="col">{{ phone }}</th>
                <th scope="col">{{ created }}</th>
                <th scope="col">{{ see }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr v-for="customer in data" :key="customer.id">
                <td>{{ customer.surname }} {{ customer.name }}</td>
                <td>{{ customer.email }}</td>
                <td>{{ customer.phone }}</td>
                <td>{{ customer.created_at.substring(0, 10) }}</td>
                <td>
                    <a :href="'customer/' + customer.id">
                        <i class="fas fa-search fs-25 blue"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ["data", "name", "email", "phone", "created", "see"],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
