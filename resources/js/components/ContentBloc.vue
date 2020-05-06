<template>
    <main class="py-4">
        <div class="container">
            <div class="d-flex justify-content-center">
                <a :href="route">
                    <img
                        class="px-3 img-fluid"
                        src="https://i.imgur.com/UTFJMhw.png"
                        alt="Accueil"
                        title="Accueil"
                    />
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <slot></slot>
            </div>
        </div>
    </main>
</template>
<script>
export default {
    props: ["route"]
};
</script>
