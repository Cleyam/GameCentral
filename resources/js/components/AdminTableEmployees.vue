<template>
    <table class="table table-bordered blue shadow">
        <thead>
            <tr>
                <th scope="col">{{ login }}</th>
                <th scope="col">{{ email }}</th>
                <th scope="col">{{ see }}</th>
                <th scope="col">{{ deleteUser }}</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr v-for="employee in data" :key="employee.id">
                <td>{{ employee.login }}</td>
                <td>{{ employee.email }}</td>
                <td>
                    <a :href="'employee/' + employee.id">
                        <i class="fas fa-search fs-25 blue"></i>
                    </a>
                </td>
                <td>
                    <form
                        :id="'delete-id-' + employee.id"
                        :action="'employees/delete' + employee.id"
                        method="POST"
                    >
                        <input type="hidden" name="_token" :value="csrf" />
                        <input name="id" type="hidden" :value="employee.id" />
                        <button type="submit" class="btn btn-link">
                            <i class="fas fa-trash-alt fs-25 blue"></i>
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ["data", "login", "email", "see", "deleteUser"],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    },
    mounted() {
        console.log("test");
    }
};
</script>
