<template>
    <div>
        <hr />
        <div class="d-md-flex">
            <div
                class="input-group md-form form-sm form-2 pl-0 col-12 col-md-3"
            >
                <div class="d-block mt-2">
                    <label
                        class="font-weight-bold blue mt-2 px-0 col-12"
                        for="preview"
                    >
                        {{ actualImage }}
                    </label>
                    <img
                        name="preview"
                        class=" img-fluid"
                        :src="miniature"
                        alt="Image Preview"
                        title="Image Preview"
                    />
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="input-group md-form form-sm form-2 pl-0">
                    <div class="d-block col-12">
                        <label
                            class="font-weight-bold blue mt-2"
                            for="reference"
                        >
                            {{ name }}
                        </label>
                        <input
                            name="reference"
                            class="form-control my-0 py-1 amber-border"
                            type="text"
                            :value="game.reference"
                            readonly
                        />
                    </div>
                    <div class="d-block col-12 col-md-9">
                        <label
                            class="font-weight-bold blue mt-2"
                            for="dateRelease"
                        >
                            {{ release }}
                        </label>
                        <input
                            name="dateRelease"
                            class="form-control my-0 py-1 amber-border"
                            type="text"
                            :value="game.dateRelease"
                            readonly
                        />
                    </div>
                    <div class="d-block col-12 col-md-3">
                        <label class="font-weight-bold blue mt-2" for="stock">
                            {{ stock }}
                        </label>
                        <input
                            name="stock"
                            class="form-control my-0 py-1 amber-border"
                            type="text"
                            :value="game.stock"
                            readonly
                        />
                    </div>
                    <div class="d-block col-12 col-xl-6">
                        <label class="font-weight-bold blue mt-2" for="genres">
                            {{ genre }}
                        </label>
                        <ul class="scrollable-menu list-group" name="genres">
                            <label v-for="genre in game.genres" :key="genre.id">
                                <li
                                    class="list-group-item unselectable success"
                                >
                                    <input
                                        type="checkbox"
                                        :name="name + '[' + genre.id + ']'"
                                        class="hidden"
                                    />
                                    {{ genre.name }}
                                </li>
                            </label>
                        </ul>
                    </div>

                    <div class="d-block col-12 col-xl-6">
                        <label class="font-weight-bold blue mt-2" for="modes">
                            {{ mode }}
                        </label>
                        <ul class="scrollable-menu list-group" name="modes">
                            <label v-for="mode in game.modes" :key="mode.id">
                                <li
                                    class="list-group-item unselectable success"
                                >
                                    <input
                                        type="checkbox"
                                        :name="name + '[' + mode.id + ']'"
                                        class="hidden"
                                    />
                                    {{ mode.name }}
                                </li>
                            </label>
                        </ul>
                    </div>
                    <div class="d-block col-12 col-xl-6">
                        <label
                            class="font-weight-bold blue mt-2"
                            for="platforms"
                        >
                            {{ platform }}
                        </label>
                        <ul class="scrollable-menu list-group" name="platforms">
                            <label
                                v-for="platform in game.platforms"
                                :key="platform.id"
                            >
                                <li
                                    class="list-group-item unselectable success"
                                >
                                    <input
                                        type="checkbox"
                                        :name="name + '[' + platform.id + ']'"
                                        class="hidden"
                                    />
                                    {{ platform.name }}
                                </li>
                            </label>
                        </ul>
                    </div>
                    <div class="d-block col-12 col-xl-6">
                        <label
                            class="font-weight-bold blue mt-2"
                            for="developers"
                        >
                            {{ developer }}
                        </label>
                        <ul
                            class="scrollable-menu list-group"
                            name="developers"
                        >
                            <label
                                v-for="developer in game.developers"
                                :key="developer.id"
                            >
                                <li
                                    class="list-group-item unselectable success"
                                >
                                    <input
                                        type="checkbox"
                                        :name="name + '[' + developer.id + ']'"
                                        class="hidden"
                                    />
                                    {{ developer.name }}
                                </li>
                            </label>
                        </ul>
                    </div>
                </div>

                <div class="input-group md-form form-sm form-2 pl-0">
                    <div class="d-block col-12">
                        <label
                            class="font-weight-bold blue mt-2"
                            for="synopsis"
                        >
                            {{ synopsis }}
                        </label>
                        <textarea
                            name="synopsis"
                            class="form-control my-0 py-1 amber-border"
                            cols="20"
                            rows="5"
                            :value="game.synopsis"
                            readonly
                        ></textarea>
                    </div>
                </div>
            </div>
        </div>

        <hr />
    </div>
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
        "update",
        "choose",
        "miniature",
        "imageChange",
        "actualImage"
    ],
    data: function() {
        return {
            checked: false,
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    },
    methods: {
        isDeveloper: function(listinfo) {
            let result = false;
            this.game.developers.forEach(gameinfo => {
                if (gameinfo.name == listinfo.name) {
                    result = true;
                }
            });
            return result;
        },
        isMode: function(listinfo) {
            let result = false;
            this.game.modes.forEach(gameinfo => {
                if (gameinfo.name == listinfo.name) {
                    result = true;
                }
            });
            return result;
        },
        isPlatform: function(listinfo) {
            let result = false;
            this.game.platforms.forEach(gameinfo => {
                if (gameinfo.name == listinfo.name) {
                    result = true;
                }
            });
            return result;
        },
        isGenre: function(listinfo) {
            let result = false;
            this.game.genres.forEach(gameinfo => {
                if (gameinfo.name == listinfo.name) {
                    result = true;
                }
            });
            return result;
        }
    },
    computed: {}
};
</script>
