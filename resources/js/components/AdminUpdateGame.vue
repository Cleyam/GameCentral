<template>
    <form
        :id="'update-id-' + game.id"
        :action="'update' + game.id"
        method="POST"
    >
        <input type="hidden" name="_token" :value="csrf" />
        <input name="id" type="hidden" :value="game.id" />
        <hr />
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-8">
                <label class="font-weight-bold blue mt-2" for="reference">{{
                    name
                }}</label>
                <input
                    name="reference"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :value="game.reference"
                />
            </div>
            <div class="d-block col-12 col-md-3">
                <label class="font-weight-bold blue mt-2" for="dateRelease">{{
                    release
                }}</label>
                <input
                    name="dateRelease"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :value="game.dateRelease"
                />
            </div>
            <div class="d-block col-12 col-md-1">
                <label class="font-weight-bold blue mt-2" for="stock">{{
                    stock
                }}</label>
                <input
                    name="stock"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :value="game.stock"
                />
            </div>
        </div>
        <div class="input-group md-form form-sm form-2 pl-0 mt-2">
            <div class="d-block col-12 col-md-3">
                <label class="font-weight-bold blue mt-2" for="genres">{{
                    genre
                }}</label>
                <ul class="scrollable-menu list-group" name="genres">
                    <label v-for="genre in genres" :key="genre.id">
                        <li class="list-group-item">
                            <input
                                type="checkbox"
                                :name="'genre[' + genre.id + ']'"
                            />
                            {{ genre.name }}
                        </li>
                    </label>
                </ul>
            </div>

            <div class="d-block col-12 col-md-3">
                <label class="font-weight-bold blue mt-2" for="modes">{{
                    mode
                }}</label>
                <ul class="scrollable-menu list-group" name="modes">
                    <label v-for="mode in modes" :key="mode.id">
                        <li class="list-group-item">
                            <input
                                type="checkbox"
                                :name="'mode[' + mode.id + ']'"
                            />
                            {{ mode.name }}
                        </li>
                    </label>
                </ul>
            </div>
            <div class="d-block col-12 col-md-3">
                <label class="font-weight-bold blue mt-2" for="platforms">{{
                    platform
                }}</label>
                <ul class="scrollable-menu list-group" name="platforms">
                    <label v-for="platform in platforms" :key="platform.id">
                        <li class="list-group-item">
                            <input
                                type="checkbox"
                                :name="'platform[' + platform.id + ']'"
                            />
                            {{ platform.name }}
                        </li>
                    </label>
                </ul>
            </div>
            <div class="d-block col-12 col-md-3">
                <label class="font-weight-bold blue mt-2" for="developers">{{
                    developer
                }}</label>
                <ul class="scrollable-menu list-group" name="developers">
                    <label v-for="developer in developers" :key="developer.id">
                        <li class="list-group-item">
                            <input
                                type="checkbox"
                                :name="'developer[' + developer.id + ']'"
                            />
                            {{ developer.name }}
                        </li>
                    </label>
                </ul>
            </div>
        </div>

        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12">
                <label class="font-weight-bold blue mt-2" for="synopsis">{{
                    synopsis
                }}</label>
                <textarea
                    name="synopsis"
                    class="form-control my-0 py-1 amber-border"
                    cols="20"
                    rows="5"
                    :value="game.synopsis"
                ></textarea>
            </div>

            <button
                type="submit"
                class="btn bg-orange text-light mx-auto font-weight-bold mt-4 shadow-sm"
            >
                {{ update }}
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
        "update"
    ],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    },
    methods: {}
};
</script>
