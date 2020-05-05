<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange shadow">
        <a class="navbar-brand" href="#">Administration</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" :href="dashboardRoute">{{
                        dashboard
                    }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" :href="gameRoute">{{ games }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" :href="customerRoute">{{
                        customers
                    }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" :href="employeeRoute">{{
                        employees
                    }}</a>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script>
export default {
    props: [
        "dashboard",
        "dashboardRoute",
        "games",
        "gameRoute",
        "customers",
        "customerRoute",
        "employees",
        "employeeRoute"
    ]
};
</script>
