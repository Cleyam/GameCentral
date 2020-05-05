<template>
    <form id="newGame" action="new" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" :value="csrf" />
        <hr />
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-8">
                <label class="font-weight-bold blue mt-2" for="reference">
                    {{ name }}
                </label>
                <input
                    name="reference"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                />
            </div>
            <div class="d-block col-12 col-md-3">
                <label class="font-weight-bold blue mt-2" for="dateRelease">
                    {{ release }}
                </label>
                <input
                    name="dateRelease"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                />
            </div>
            <div class="d-block col-12 col-md-1">
                <label class="font-weight-bold blue mt-2" for="stock">
                    {{ stock }}
                </label>
                <input
                    name="stock"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                />
            </div>
        </div>
        <div class="input-group md-form form-sm form-2 pl-0 mt-2">
            <div class="d-block col-12 col-xl-3 col-md-6">
                <label class="font-weight-bold blue mt-2" for="genres">
                    {{ genre }}
                </label>
                <ul class="scrollable-menu list-group" name="genres">
                    <admin-update-game-checklist
                        name="genre"
                        :data="genre"
                        v-for="genre in genres"
                        :key="genre.id"
                    >
                    </admin-update-game-checklist>
                </ul>
            </div>

            <div class="d-block col-12 col-xl-3 col-md-6">
                <label class="font-weight-bold blue mt-2" for="modes">
                    {{ mode }}
                </label>
                <ul class="scrollable-menu list-group" name="modes">
                    <admin-update-game-checklist
                        name="mode"
                        :data="mode"
                        v-for="mode in modes"
                        :key="mode.id"
                    >
                    </admin-update-game-checklist>
                </ul>
            </div>
            <div class="d-block col-12 col-xl-3 col-md-6">
                <label class="font-weight-bold blue mt-2" for="platforms">
                    {{ platform }}
                </label>
                <ul class="scrollable-menu list-group" name="platforms">
                    <admin-update-game-checklist
                        name="platform"
                        :data="platform"
                        v-for="platform in platforms"
                        :key="platform.id"
                    >
                    </admin-update-game-checklist>
                </ul>
            </div>
            <div class="d-block col-12 col-xl-3 col-md-6">
                <label class="font-weight-bold blue mt-2" for="developers">
                    {{ developer }}
                </label>
                <ul class="scrollable-menu list-group" name="developers">
                    <admin-update-game-checklist
                        name="developer"
                        :data="developer"
                        v-for="developer in developers"
                        :key="developer.id"
                    >
                    </admin-update-game-checklist>
                </ul>
            </div>
        </div>

        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12">
                <label class="font-weight-bold blue mt-2" for="synopsis">
                    {{ synopsis }}
                </label>
                <textarea
                    name="synopsis"
                    class="form-control my-0 py-1 amber-border"
                    cols="20"
                    rows="5"
                ></textarea>
            </div>
        </div>
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12">
                <label class="font-weight-bold blue mt-2" for="miniatures">
                    {{ image }}
                </label>
                <div class="custom-file" name="miniatures">
                    <input
                        type="file"
                        class="custom-file-input"
                        name="miniature"
                    />
                    <label class="custom-file-label" for="Miniature">
                        {{ choose }}
                    </label>
                </div>
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
    props: [
        "game",
        "genres",
        "genre",
        "release",
        "email",
        "name",
        "stock",
        "synopsis",
        "modes",
        "mode",
        "platforms",
        "platform",
        "developers",
        "developer",
        "add",
        "choose",
        "miniature",
        "image"
    ],
    data: function() {
        return {
            checked: false,
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    },
    methods: {},
    computed: {}
};
</script>
