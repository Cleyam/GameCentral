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
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-4">
                <label class="font-weight-bold blue mt-2" for="genres">{{
                    genre
                }}</label>
                <!-- <select name="genres" class="custom-select" multiple>
                    <option
                        v-for="genre in genres"
                        :key="genre.id"
                        :value="genre.id"
                        >{{ genre.name }}</option
                    >
                </select> -->

                <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Scrollable Menu <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu"  >
                    <li v-for="genre in genres"
                        :key="genre.id"><input type="checkbox" :name="'genre['+genre.id+']'"><label :for="'genre['+genre.id+']'">{{ genre.name }}</label></li>
                </ul>
            </div>
        </div>
            </div>
            <div class="d-block col-12 col-md-4">
                <label class="font-weight-bold blue mt-2" for="platforms">{{
                    platform
                }}</label>
                <select name="platforms" class="custom-select">
                    <option
                        v-for="platform in platforms"
                        :key="platform.id"
                        :value="platform.id"
                        >{{ platform.name }}</option
                    >
                </select>
            </div>
            <div class="d-block col-12 col-md-4">
                <label class="font-weight-bold blue mt-2" for="modes">{{
                    mode
                }}</label>
                <select name="modes" class="custom-select">
                    <option
                        v-for="mode in modes"
                        :key="mode.id"
                        :value="mode.id"
                        >{{ mode.name }}</option
                    >
                </select>
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
    }
};
</script>
